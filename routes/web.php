<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'style' => '/css/home.css',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'style' => '/css/posts.css',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString(),
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'style' => '/css/post.css',
        'post' => $post,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'style' => '/css/about.css',
        'name' => 'Fikri Setiawan',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'style' => '/css/contact.css',
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' articles by ' . $user->name,
        'style' => '/css/posts.css',
        'posts' => $user->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => count($category->posts) . ' articles in category ' . $category->name,
        'style' => '/css/posts.css',
        'posts' => $category->posts,
    ]);
});
