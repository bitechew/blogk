<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id'=> 1,
                'slug'=> 'judul-artikel-1',
                'title'=> 'Judul Artikel 1',
                'author'=> 'Jose Keitaro',
                'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dicta omnis est velit impedit non quasi repellendus minima error aspernatur minus ducimus sint voluptatem adipisci cum excepturi, ut molestias quisquam.'
            ],
            [
                'id'=> 2,
                'slug'=> 'judul-artikel-2',
                'title'=> 'Judul Artikel 2',
                'author'=> 'Jose Keitaro',
                'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus culpa iste adipisci vero! Reiciendis, fuga reprehenderit! Ratione eveniet a earum beatae dolorum? Distinctio, ratione. Facilis architecto molestiae magnam quas praesentium?'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}