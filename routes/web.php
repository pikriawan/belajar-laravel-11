<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'style' => 'css/home.css'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'style' => 'css/blog.css'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'style' => 'css/about.css',
        'name' => 'Fikri Setiawan'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'style' => 'css/contact.css'
    ]);
});
