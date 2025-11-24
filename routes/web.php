<?php

use Illuminate\Support\Arr;
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
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Fikri Setiawan',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet purus consequat, vulputate dolor vel, tincidunt risus. Donec a dapibus justo, sit amet venenatis urna. Nulla fringilla nibh sit amet accumsan pretium. Donec in metus efficitur, tristique elit non, tempus ante. Integer nisi massa, cursus sit amet lectus pharetra.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Fikri Setiawan',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut mauris eu sem molestie consectetur a ut risus. Curabitur sit amet hendrerit ex, eget aliquet nisi. Ut hendrerit, dui in pharetra feugiat, lectus ex facilisis turpis, sed condimentum libero justo non sapien. Nam finibus risus eu tellus ultrices tristique. Ut.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fikri Setiawan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet purus consequat, vulputate dolor vel, tincidunt risus. Donec a dapibus justo, sit amet venenatis urna. Nulla fringilla nibh sit amet accumsan pretium. Donec in metus efficitur, tristique elit non, tempus ante. Integer nisi massa, cursus sit amet lectus pharetra.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fikri Setiawan',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut mauris eu sem molestie consectetur a ut risus. Curabitur sit amet hendrerit ex, eget aliquet nisi. Ut hendrerit, dui in pharetra feugiat, lectus ex facilisis turpis, sed condimentum libero justo non sapien. Nam finibus risus eu tellus ultrices tristique. Ut.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] === $slug;
    });

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
