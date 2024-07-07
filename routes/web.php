<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog', ['posts' => [
        [
            'id' => 1,
            'title' => 'Post ke-1',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 2,
            'title' => 'Post ke-2',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 3,
            'title' => 'Post ke-3',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 4,
            'title' => 'Post ke-4',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ]
    ]]);
});

Route::get('/blog/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Post ke-1',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 2,
            'title' => 'Post ke-2',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 3,
            'title' => 'Post ke-3',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ],
        [
            'id' => 4,
            'title' => 'Post ke-4',
            'image' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugiat ratione odio! Hic, laudantium cumque.'
        ]
    ];
    $post = collect($posts)->firstWhere('id', $id);

    return view('post', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
