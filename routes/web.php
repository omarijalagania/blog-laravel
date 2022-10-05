<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Post;

Route::get('/', function () {

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('/posts/{post}', function ($slug) {


    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);
})->where('post', '[</A-z_0-9>\-]+');

Route::get('/about', [TodoController::class, 'index'])->name('index');
