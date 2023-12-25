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
    private $rdmImgUser = '/../img/randomUser.png';
    private $rdmImgPost = '/../img/randomPost.png';
    public $category, $author, $title;


    public function __construct()
    {
        $this->api = new GuardianAPI(env('GUARDIAN_API_KEY'));
    }

    public function logicSearch()
    {
        $this->title = '';
        if (request('category')) {
            $this->category = Category::firstWhere('slug', request('category'));
            $this->title = ' in ' . $this->category->name;
        }

        if (request('author')) {
            $this->author = User::firstWhere('username', request('author'));
            $this->title = ' by ' . $this->author->name;
        }

        $getData = Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQueryString();

        $search = 'sport'; // cari cara mengirim data dari blade ke PostController
        $searchResult = $this->getNews(5, $search, '', '');

        return view('posts', [
            "posts" => $getData, $searchResult
        ]);
    }


    // Fungsi ambil data Popular
    private function getPopularData($local, $Api)
    {
        $popular = Post::with('author', 'category')->orderBy('views', 'desc')->take($local)->get();
        $popularContentAPI = $this->getNews($Api, '', $this->meterAPI[0], $this->meterAPI[1]);

        $processedPopular = $this->mergeProcessedData($popular, $popularContentAPI);
        return $processedPopular;
    }

    // Fungsi ambil data Random
    private function getPostRandom($local, $Api)
    {
        $posts = Post::with(['author', 'category'])->latest()->take($local)->get();
        $randomContentAPI = $this->getNews($Api, '', $this->meterAPI[2], $this->meterAPI[3]);

        $processedPosts = $this->mergeProcessedData($posts, $randomContentAPI);

        return $processedPosts;
    }

    // Fungsi ambil data category
    private function getCategoryList()
    {
        $categoryList = Category::withCount('posts')->get();

        // Tambahkan 10 ke setiap nilai posts_count
        $categoryList->transform(function ($category) {
            $category->posts_count += 10;
            return $category;
        });

        return $categoryList;

        // return [
        // "popular" => $this->getPopularData(2, 1),
        // "posts" => $this->getPostRandom(2, 5),
        // "author" => $this->author, // Sesuaikan dengan properti yang sesuai
        // "category" => $this->category, // Sesuaikan dengan properti yang sesuai
        // "categoryList" => $categoryList
        // ];
    }

    // route data ke halaman Home
    public function index()
    {
        $popular = $this->getPopularData(2, 1);
        $postss = $this->getPostRandom(2, 5);
        $categoryList = $this->getCategoryList();

        return view('home', [
            "popular" => $popular,
            "posts" => $postss,
            "categoryList" => $categoryList
        ]);
    }

    // route data ke halaman Posts
    public function posts()
    {
        $popular = $this->getPopularData(2, 1);
        $postss = $this->getPostRandom(2, 5);

        return view('home', [
            "popular" => $popular,
            "posts" => $postss
        ]);
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $posts = Post::with(['author', 'category'])->latest()->take(2)->get();

    //     $popular = Post::with('author', 'category')->orderBy('views', 'desc')->take(2)->get();

    //     $popularContentAPI = $this->getNews(3, '', $this->meterAPI[0], $this->meterAPI[1]);

    //     $randomContentAPI = $this->getNews(5, '', $this->meterAPI[2], $this->meterAPI[3]);

    //     $categoryList = Category::withCount('posts')->get();

    //     // Tambahkan 10 ke setiap nilai posts_count
    //     $categoryList->transform(function ($category) {
    //         $category->posts_count += 10;
    //         return $category;
    //     });

    //     // Fungsi Menggabungkan
    //     $processedPopular = $this->mergeProcessedData($popular, $popularContentAPI);
    //     $processedPosts = $this->mergeProcessedData($posts, $randomContentAPI);

    //     return view('home', [
    //         "popular" => $processedPopular,
    //         "posts" => $processedPosts, $this->author, $this->category,
    //         "categoryList" => $categoryList
    //         // 'categoryContent' => $categoryContent,
    //         // 'cartegoryName' => $categoryName
    //     ]);
    // }

    // route data ke halaman show
    public function show(Post $post)
    {
        if (!$post) {
            abort(404);
        }

        $post->views += 1; // Tingkatkan jumlah tampilan

        $post->save(); // Simpan perubahan ke database

        // dd($post);
        $popular = $this->getPopularData(2, 1);

        return view('post', [
            'post' => $post,
            'popular' => $popular
        ]);
    }

    // Semua pengambilan data API
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
            'thumbnail' => $item->postImg != '' ? $item->postImg : $this->rdmImgPost,
            'publication' => $item->views,
            'authorImage' => $item->author->userImg != '' ? $item->author->userImg : $this->rdmImgUser,
            'authorName' => $item->author->name,
            'body' => Str::limit(strip_tags($item->body), 200),
            'shortUrl' => $item->slug,
            'cartegory' => $item->category->name,
            'published' => $formattedDate,
        ];

        return $processedItem;
    }
}
