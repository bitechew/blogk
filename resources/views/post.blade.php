@extends('layouts.app')

@section('title', 'Single Post')

@section('content')
<article class="py-8 max-w-3xl border-b">
    <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
        <a href="">{{ $post['author'] }}</a> | 20 Januari 2026
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to posts</a>
</article>
@endsection
