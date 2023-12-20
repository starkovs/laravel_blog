<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

Route::get('/test', 'TestController@test')->middleware('token:secret');


Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');


    Route::get('/register', [RegisterController::class, 'index'])->name('register');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');


Route::prefix('user')->middleware(['auth', 'active'])->as('user.')->group(function () {
    // CRUD (Create, Read, Update, Delete)
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::post('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
});

// Alternative in one line
// Route::resource('posts', PostController::class);

Route::resource('posts/{post}/comments', CommentController::class);



Route::redirect('/home', '/');

Route::fallback(function () {
    return 'This is the fallback';
});
