<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Guardian\GuardianAPI;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class PostController extends Controller
{

    private $api;

    public function __construct()
    {
        $this->api = new GuardianAPI(env('GUARDIAN_API_KEY'));
    }

    /**
     * Tampilkan daftar sumber daya.
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // film,gadgets,games,music,art & design,cartoons,tech
    public function index()
    {
        // Mengambil data author dari table users by username
        $author = User::firstWhere('username', request('author'));

        // Tampilkan daftar sumber daya yang sering di lihat.
        $popular = Post::with('author')->orderBy('views', 'desc')->take(5)->get();

        // Tampilkan daftar sumber daya 7 saja
        $posts = Post::with(['author'])->latest()->take(7)->get();

        // 

        $randomContent = $this->getNews(5, '');

        // Get category content
        $categoryName = 'sport'; // Ganti dengan kategori yang sesuai
        $categoryContent = $this->getNews(5, $categoryName);

        return view('home', [
            "popular" => $popular,
            "posts" => $posts, $author,
            'randomContent' => $randomContent,
            'categoryContent' => $categoryContent,
            'cartegoryName' => $categoryName
        ]);
    }

    /**
     * Tunjukkan formulir untuk membuat sumber daya baru.
     */
    public function create()
    {
        //
    }

    /**
     * Simpan sumber daya yang baru dibuat dalam penyimpanan.
     */
    public function store(StorePostRequest $request)
    {
        //
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
            abort(404); // atau lakukan penanganan ketika post tidak ditemukan
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

    /**
     * Tunjukkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Perbarui sumber daya yang ditentukan dalam penyimpanan.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Hapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(Post $post)
    {
        //
    }

    // Semua pengambilan data api

    public function getNews($isi, $categoryQuery)
    {
        try {
            $response = $this->api->content()
                ->setQuery($categoryQuery)
                ->setFromDate(new \DateTimeImmutable("01/01/2023"))
                ->setToDate(new \DateTimeImmutable())
                // ->setShowTags(implode(',', $tagIds)) // Gunakan tag yang diperoleh untuk menyaring konten
                ->setShowTags("contributor,blog")
                ->setShowFields("headline,thumbnail,short-url,publication,body,score")
                ->setShowReferences("author,isbn,opta-cricket-match")
                ->fetch();

            $results = $response->response->results;

            // dd($results);

            if (count($results) > 0) {
                $processedItems = collect($results)->random($isi)->map(function ($item) {
                    return $this->processNewsItem($item);
                });

                // dd($processedItems);
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

        // dd($processedItem);
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
                return 'https://picsum.photos/200/300'; // Gambar Random
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
