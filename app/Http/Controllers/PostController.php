<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Tampilkan daftar sumber daya.
     */
    public function index()
    {
        // Mengambil data author dari table users by username
        $author = User::firstWhere('username', request('author'));

        // Tampilkan daftar sumber daya yang sering di lihat.
        $popular = Post::with('author')->orderBy('views', 'desc')->take(5)->get();

        // Tampilkan daftar sumber daya 7 saja
        $posts = Post::with(['author'])->latest()->take(7)->get();

        return view('home', [
            "popular" => $popular,
            "posts" => $posts, $author
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
}
