<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::allPost()]);
})->name('blog');

Route::get('/blog/{id}', function ($id) {
    return view('post', ['post' => Post::findPost($id)]);
})->name('post');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
