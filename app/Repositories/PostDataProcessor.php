<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PostDataProcessor
{
  private $rdmImgUser = '/../img/randomUser.png';
  private $rdmImgPost = '/../img/randomPost.png';

  public function processLocalData($item)
  {
    $formattedDate = Carbon::parse($item->created_at)->isoFormat('LL LT');

    $processedItem = [
      'webTitle' => Str::limit(strip_tags($item->title), 44),
      'thumbnail' => $item->postImg != '' ? $item->postImg : $this->rdmImgPost,
      'publication' => $item->views,
      'authorImage' => $item->author->userImg != '' ? $item->author->userImg : $this->rdmImgUser,
      'authorName' => $item->author->name,
      'body' => Str::limit(strip_tags($item->body), 150),
      'shortUrl' => $item->slug,
      'cartegory' => $item->category->name,
      'published' => $formattedDate,
    ];

    return $processedItem;
  }
}
