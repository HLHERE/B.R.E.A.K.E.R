<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PrintController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/posts', function () {
    return view ('posts');
});

// Route::get('/posts', function () {
//     return view('posts');
// });

Route::get('/posts', [PostController::class, 'logicSearchPosts']);


// Route::get('/posts', [PostController::class, 'index']);

Route::get('/post', function () {
    return view ('post');
});

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


    // Route::get('/login', function () {
    //     return view ('login.index');
    // });

    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);

    // Route::get('/register', function () {
    //     return view ('register.index');
    // });

    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);


    Route::get('/about', function () {
        return view ('about');
    });

    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

    Route::get('/', [PostController::class, 'index']);
    Route::get('/{post:slug}', [PostController::class, 'show']);
    
    Route::get('/dashboard/posts/checkSlug' , [DashboardPostController::class,'checkSlug'])->middleware('auth');
    Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
    Route::resource('/dashboard/user',DashboardUserController::class)->middleware('auth');

    Route::get('/dashboard/print',[DashboardPostController::class, 'print']);
    