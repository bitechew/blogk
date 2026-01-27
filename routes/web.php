<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => [
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
    ]]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
