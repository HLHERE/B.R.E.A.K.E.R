<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use iluminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tampilButton = true;
        $showButton = true;

        return view('dashboard.posts.index',[
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
        return view('dashboard.posts.create' , [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' =>'required',
        ]);
    
        $validatedData['user_id'] = auth()->user()->id;
    
        // Hapus baris berikut untuk menghilangkan 'excerpt' dari data yang dikirimkan
        // $validatedData['excerpt'] = Str::limit($request->body, 200);
    
        // Simpan data ke model atau tempat penyimpanan yang sesuai
        Post::create($validatedData);
    
        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect('dashboard/posts')->with('success', 'news has been added'); // Gantilah 'nama.route' sesuai dengan route yang sesuai.
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $showButton = true;
        return view ('dashboard.posts.show' , [
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
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success' , 'news has been deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class,'slug' , $request->title );
        return response()->json(['slug' => $slug]);
 }

}
