<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact');
});
