<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('/post/{slug}', function ($slug) {


    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);
});

Route::get('/add-post', function () {
    return view('add-post');
});

Route::post('/admin/posts', function () {
    return 'lol';
});
