<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/{post:slug}', [PostController::class, 'show']);

Route::get('/posts', function () {
    return view ('posts');
});

// Route::get('/posts', [PostController::class, 'index']);

Route::get('/post', function () {
    return view ('post');
});
Route::get('/merchandise', function () {
    return view ('merchandise');
});

Route::get('/dashboard', function () {
    return view ('dashboard.index');
});

Route::get('/login', function () {
    return view ('login.index');
});

Route::get('/register', function () {
    return view ('register.index');
});