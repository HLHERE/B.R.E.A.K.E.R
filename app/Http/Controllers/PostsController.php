<?php

namespace App\Http\Controllers;

use App\Services\PostsService;
use App\Traits\CategoryListTrait;

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
            "posts" => $getData->posts
        ]);
    }
}
