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
    return view('blog', ['posts' => Post::all()]);
})->name('blog');

Route::get('/blog/{id}', function ($id) {
    if (!Post::find($id)) {
        abort(404);
    }

    return view('post', ['post' => Post::find($id)]);
})->name('post');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
