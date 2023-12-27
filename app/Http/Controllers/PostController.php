<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Guardian\GuardianAPI;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Client\RequestException;

class PostController extends Controller
{

    private $api;
    private array $meterAPI = ['relevance', 'published', 'newest', 'first-publication'];
    private $rdmImgUser = '/../img/randomUser.png';
    private $rdmImgPost = '/../img/randomPost.png';
    public $category, $author, $title;

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->api = new GuardianAPI(env('GUARDIAN_API_KEY'));
        $this->categoryService = $categoryService;
    }

    // Fungsi ambil data Popular
    private function getPopularData($local, $Api)
    {
        $popular = Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate($local)->withQueryString();
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

    // // Fungsi ambil data category
    // private function getCategoryList()
    // {
    //     $categoryList = $this->categoryService->getCategoryList();

    //     // Tambahkan 10 ke setiap nilai posts_count
    //     $categoryList->transform(function ($category) {
    //         $category->posts_count += 10;
    //         return $category;
    //     });

    //     return $categoryList;
    // }

    public function navbar()
    {
        // $categoryList = $this->getCategoryList();
        $categoryList = $this->categoryService->getCategoryList();

        // dd($categoryList);
        // Share $categoryList to both views
        View::share('categoryList', $categoryList);
        // // return view('partials.navbar', [
        // //     "categoryList" => $categoryList,
        // // ]);

        // return view('partials.navbar');
        return view('partials.navbar');
    }

    // route data ke halaman Home
    public function index()
    {
        $popular = $this->getPopularData(2, 3);
        $postss = $this->getPostRandom(2, 5);

        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);


        return view('home', [
            "popular" => $popular,
            "posts" => $postss,

        ]);
    }



    public function logicSearchPosts()
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);
        $title = '';
        $search = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
            $search = $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
            $search = $author->name;
        }

        $getData = Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(10)->withQueryString();

        // dd($category);
        $searchResult = $this->getNews(10, $search, '', '');

        $mix = $this->mergeProcessedData($getData, $searchResult);

        return view('posts', [
            "judul" => $title,
            "posts" => $mix,
            // "categoryList" => $category
        ]);
    }

    // route data ke halaman show
    public function show(Post $post)
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);
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
                ->setShowTags("contributor,blog")
                ->setShowFields("headline,thumbnail,short-url,publication,body")
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
            // 'authorImage' => $this->getAuthorImageLocal($item),
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
