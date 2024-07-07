<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function allPost()
    {
        return [
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
    }

    public static function findPost($id): array
    {
        $post = collect(self::allPost())->firstWhere('id', $id);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
