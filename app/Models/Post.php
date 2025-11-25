<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

        if (!$post)
        {
            abort(404);
        }

        return $post;
    }
}
