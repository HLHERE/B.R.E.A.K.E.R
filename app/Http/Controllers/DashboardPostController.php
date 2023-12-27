<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use Illuminate\Support\Facades\View;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);

        $tampilButton = true;
        $showButton = true;

        return view('dashboard.posts.index', [
            // 'posts' => Post::where('id' ,auth()->user()->id)->get()
            'posts' => Post::all(),
            'tampilButton' => $tampilButton,
            'showButton' => $showButton,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);

        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);

        $showButton = true;
        return view('dashboard.posts.show', [
            'post' => $post,
            'showButton' => $showButton,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $categoryList = $this->categoryService->getCategoryList();
        View::share('categoryList', $categoryList);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
