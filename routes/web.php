<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::allPost()]);
});

Route::get('/blog/{id}', function ($id) {
    return view('post', ['post' => Post::findPost($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
