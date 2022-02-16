<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "author" => "Budi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nisi non eum perspiciatis odit quibusdam necessitatibus sequi est explicabo! Cupiditate perferendis omnis nobis distinctio repellat numquam optio, dolore consectetur excepturi quidem unde non. Tempore quam, deserunt nihil in facere animi aspernatur quae! Voluptates eius maiores doloribus sapiente! Voluptatum obcaecati reprehenderit, blanditiis atque dolores similique, perspiciatis modi mollitia neque aliquid tempore. Quos harum soluta vero debitis possimus commodi, error laudantium a ex. Quibusdam aliquid quisquam facere nisi quae corrupti obcaecati natus nulla libero esse odit a, sed error expedita, fugit debitis vel cum beatae, nobis sequi deleniti. Quis optio nisi obcaecati."
        ],
        [
            "title" => "Judul Postingan Kedua",
            "slug" => "judul-postingan-kedua",
            "author" => "Udin",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla eum odio amet error natus aspernatur quia quidem, earum nostrum, ratione minus. Reiciendis reprehenderit nisi animi! Laboriosam, sequi error deserunt animi est eveniet molestiae voluptas sint reprehenderit sapiente nesciunt impedit quia fuga culpa corrupti consectetur harum, iste vitae, voluptatibus aut ab. Saepe illo dignissimos obcaecati voluptates laboriosam beatae cupiditate quibusdam veritatis deserunt reiciendis. Provident similique aperiam facilis cupiditate consequatur molestias, non quasi? Voluptatum hic repellat, nam dicta sunt harum quos. Incidunt?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // };

        return $posts->firstWhere('slug', $slug);
    }
}
