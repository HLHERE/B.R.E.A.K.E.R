<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;

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


// Route::get('/login', function () {
//     return view ('login.index');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/register', function () {
//     return view ('register.index');
// });

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/about', function () {
    return view ('about');
});

Route::get('/', [PostController::class, 'index']);
Route::get('/{post:slug}', [PostController::class, 'show']);

Route::resource('/dashboard/posts', DashboardPostController::class);
Route::resource('/dashboard/admin', DashboardAdminController::class);
Route::resource('/dashboard/user',DashboardUserController::class);
