<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
        ['id' => 1,
        'title' => 'Judul 1',
        'slug' => 'judul-1',
        'author' => 'Danu Alamsyah',
        'date' => 'Januari 1, 2023',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti illum, suscipit, fugit ullam facilis reprehenderit velit sequi exercitationem dolores, totam ducimus neque! Excepturi eligendi, assumenda quod iusto corporis at repellat?'
        ],
        ['id' => 2,
        'title' => 'Judul 2',
        'slug' => 'judul-2',
        'author' => 'Danu Alamsyah',
        'date' => 'Agustus 17, 2025',
        'body' => 'sit amet consectetur adipisicing elit. Porro voluptatibus quia commodi facere neque voluptas a sit consequatur sint illum at, nemo sapiente quae pariatur, cumque repudiandae dolorem atque ab!'
        ],
    ];
    }
    public static function find($slug)
    {
        $posts = static::all();
        return Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    }
}