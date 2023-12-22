<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Guardian\GuardianAPI;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class PostController extends Controller
{

    private $api;
    private array $meterAPI = ['relevance', 'published', 'newest', 'first-publication'];
    private $rdmImgUser = 'https://picsum.photos/100/80';
    private $rdmImgPost = 'https://picsum.photos/300/150';


    public function __construct()
    {
        $this->api = new GuardianAPI(env('GUARDIAN_API_KEY'));
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::firstWhere('slug', request('category'));

        $author = User::firstWhere('username', request('author'));

        $posts = Post::with(['author', 'category'])->latest()->take(7)->get();

        $popular = Post::with('author', 'category')->orderBy('views', 'desc')->take(5)->get();

        $popularContentAPI = $this->getNews(5, '', $this->meterAPI[0], $this->meterAPI[1]);

        $randomContentAPI = $this->getNews(5, '', $this->meterAPI[2], $this->meterAPI[3]);

        $categoryName = 'sport';
        $categoryContent = $this->getNews(5, $categoryName, '', '');

        // Fungsi Menggabungkan
        $processedPopular = $this->mergeProcessedData($popular, $popularContentAPI);
        $processedPosts = $this->mergeProcessedData($posts, $randomContentAPI);


        return view('home', [
            "popular" => $processedPopular,
            "posts" => $processedPosts, $author, $category,
            'categoryContent' => $categoryContent,
            'cartegoryName' => $categoryName
        ]);
    }

    /**
     * Tampilkan sumber daya yang ditentukan.
     */
    public function show(Post $post)
    {
        // Temukan post berdasarkan ID
        $post = Post::find($post);
        // Periksa apakah post ditemukan
        if (!$post) {
            abort(404);
        }
        // Tingkatkan jumlah tampilan
        $post->views += 1;
        // Simpan perubahan ke database
        $post->save();
        // Tampilkan post dalam view
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Semua pengambilan data

    public function getNews($isi, $categoryQuery, $orderBy, $useDate)
    {
        try {
            $response = $this->api->content()
                ->setQuery($categoryQuery)
                ->setOrderBy($orderBy)
                ->setUseDate($useDate)
                ->setShowTags("contributor,blog,keyword")
                ->setShowFields("headline,thumbnail,short-url,publication,body,all")
                ->setShowReferences("author,isbn,opta-cricket-match")
                ->fetch();

            $results = $response->response->results;

            // dd($response);

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
            'webTitle' => $item->webTitle,
            'thumbnail' => isset($item->fields->thumbnail) ? $item->fields->thumbnail : null,
            'publication' => $item->fields->publication,
            'authorImage' => $this->getAuthorImage($item),
            'authorName' => $this->getAuthorName($item),
            'body' => Str::limit(strip_tags($item->fields->body), 200),
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
                return $this->rdmImgUser;
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

    public function mergeProcessedData($localData, $apiData)
    {
        $localProcessed = $localData->map(function ($item) {
            return $this->processLocalData($item);
        });

        $mergedData = $apiData->merge($localProcessed);

        return $mergedData;
    }

    public function processLocalData($item)
    {
        $formattedDate = Carbon::parse($item->created_at)->isoFormat('LL LT');

        $processedItem = [
            'webTitle' => $item->title,
            'thumbnail' => $item->postImg != '' ? $item->postImg : $this->rdmImgUser,
            'publication' => $item->views,
            'authorImage' => $item->author->userImg != '' ? $item->author->userImg : $this->rdmImgPost,
            'authorName' => $item->author->name,
            'body' => Str::limit(strip_tags($item->body), 200),
            'shortUrl' => null,
            'cartegory' => $item->category->name,
            'published' => $formattedDate,
        ];

        return $processedItem;
    }
}
