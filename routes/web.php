<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'style' => '/css/home.css'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'style' => '/css/posts.css',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);

    return view('post', [
        'title' => 'Single Post',
        'style' => '/css/post.css',
        'post' => $post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'style' => '/css/about.css',
        'name' => 'Fikri Setiawan'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'style' => '/css/contact.css'
    ]);
});
