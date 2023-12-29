<?php

namespace App\Repositories;

use Guardian\GuardianAPI;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Client\RequestException;


class GuardianApiRepository
{
  private $api;

  public function __construct()
  {
    $this->api = new GuardianAPI(env('GUARDIAN_API_KEY'));
  }
  // Semua pengambilan data API
  public function getNews($isi, $categoryQuery, $orderBy, $useDate)
  {
    try {
      $response = $this->api->content()
        ->setQuery($categoryQuery)
        ->setOrderBy($orderBy)
        ->setUseDate($useDate)
        ->setShowTags("contributor,blog")
        ->setShowFields("headline,thumbnail,short-url,publication,body")
        ->setShowReferences("author,isbn,opta-cricket-match")
        ->fetch();

      $results = $response->response->results;

      if (count($results) > 0) {
        $processedItems = collect($results)->random($isi)->map(function ($item) {
          return $this->processNewsItem($item);
        });
        return $processedItems;
      } else {
        return [];
      }
    } catch (RequestException $exception) {
      Log::error('Guardian API Error: ' . $exception->getMessage());
      Log::error('Response Body getNews: ' . $exception->response->body());

      return [];
    }
  }

  public function processNewsItem($item)
  {
    $formattedDate = Carbon::parse($item->webPublicationDate)->isoFormat('LL LT');

    $processedItem = [
      'webTitle' => Str::limit(strip_tags($item->webTitle), 44),
      'thumbnail' => isset($item->fields->thumbnail) ? $item->fields->thumbnail : null,
      'publication' => $item->fields->publication,
      'authorImage' => $this->getAuthorImage($item),
      'authorName' => $this->getAuthorName($item),
      'body' => Str::limit(strip_tags($item->fields->body), 150),
      'shortUrl' => $item->fields->shortUrl,
      'cartegory' => $item->sectionName,
      'published' => $formattedDate,
    ];
    return $processedItem;
  }

  public function getAuthorImage($item)
  {

    if (!empty($item->tags)) {
      if (isset($item->tags[0]->bylineLargeImageUrl)) {
        return $item->tags[0]->bylineLargeImageUrl;
      } elseif (isset($item->tags[0]->bylineImageUrl)) {
        return $item->tags[0]->bylineImageUrl;
      } else {
        // return $this->rdmImgUser;
        return '/../img/randomUser.png';
      }
    }
    return null;
  }

  public function getAuthorName($item)
  {
    if (!empty($item->tags)) {
      foreach ($item->tags as $tag) {
        if (isset($tag->webTitle)) {
          return $tag->webTitle;
        }
      }
    }

    return 'Anonimous';
  }
}
