<?php

// namespace App\Http\Controllers;

// use App\Models\Post;
// use Illuminate\Http\Request;
// use App\Services\PostsService;
// use App\Traits\CategoryListTrait;

// class PostsController extends Controller
// {
//     use CategoryListTrait;
//     protected $postsService;

//     public function __construct(PostsService $postService)
//     {
//         $this->postsService = $postService;
//     }

//     public function liveSearch(Request $request)
//     {
//         $query = $request->input('query');

//         $searchResult = Post::latest()
//             ->filter(['search' => $query])
//             ->get();

//         $results = $searchResult->map(function ($post) {
//             return [
//                 'title' => $post->title,
//                 'url' => route('posts.show', $post), // Sesuaikan ini dengan nama route yang sesuai
//             ];
//         });

//         return response()->json($results);
//     }

//     public function index()
//     {
//         $this->shareCategoryList();

//         $getData = $this->postsService->postsService();
//         $liveSearch = $this->liveSearch(request());

//         return view('posts', [
//             "judul" => $getData->title,
//             "posts" => $getData->posts
//         ]);
//     }
// }

namespace App\Http\Controllers;

use App\Traits\CategoryListTrait;
use App\Services\PostsService;

class PostsController extends Controller
{
    use CategoryListTrait;
    protected $postsService;

    public function __construct(PostsService $postService)
    {
        $this->postsService = $postService;
    }

    public function index()
    {
        $this->shareCategoryList();

        $getData = $this->postsService->postsService();

        return view('posts', [
            "judul" => $getData->title,
            "posts" => $getData->posts,
        ]);
    }
}
