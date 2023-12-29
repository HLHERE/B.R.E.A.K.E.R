<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use App\Traits\CategoryListTrait;

class HomeController extends Controller
{
    use CategoryListTrait;
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    // route data ke halaman Home
    public function index()
    {
        $this->shareCategoryList();

        $popular = $this->postService->getPopularData(2, 3);
        $postss = $this->postService->getPostRandom(2, 5);

        return view('home', [
            "popular" => $popular,
            "posts" => $postss,
        ]);
    }
}
