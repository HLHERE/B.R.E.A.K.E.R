<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use App\Traits\CategoryListTrait;

class PostController extends Controller
{
    use CategoryListTrait;

    public $category, $author, $title;

    protected $postService;

    public function __construct(PostService $postService)
    {
        // $this->categoryService = $categoryService;
        $this->postService = $postService;
    }

    // route data ke halaman show
    public function show(Post $post)
    {
        $this->shareCategoryList();

        if (!$post) {
            abort(404);
        }

        $post->views += 1; // Tingkatkan jumlah tampilan

        $post->save(); // Simpan perubahan ke database

        $popular = $this->postService->getPopularData(2, 1);

        // dd($post);
        return view('post', [
            'post' => $post,
            'popular' => $popular
        ]);
    }
}
