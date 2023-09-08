<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Dika',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure incidunt saepe omnis autem, eum, dicta eaque vitae veritatis distinctio, nobis itaque temporibus accusamus ea natus odio et sapiente laborum consectetur excepturi. Odit, iusto? Praesentium, ratione a. Dolore atque laborum id omnis sunt consequatur esse nulla eos impedit eaque rerum facilis voluptas provident itaque nostrum quia maiores nam, velit voluptatum iusto similique vero at. Incidunt sed reprehenderit eveniet velit quia vitae voluptates sequi? Ipsa vero laboriosam ex eveniet tempore? Ipsa, officiis.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Diki',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium impedit, voluptate officia ipsa blanditiis, voluptas aliquam maxime, maiores rem aperiam est autem quo vero dolores consequatur veritatis? Saepe sed ducimus aut? Repellendus voluptatem hic numquam velit iure, quasi cupiditate in. Error numquam reprehenderit facere. Sit quibusdam at ullam porro facilis nihil. Laudantium at vel aut, eum in voluptate inventore sapiente voluptatum obcaecati? Veniam, ex quisquam? Earum, voluptatem, dolore asperiores facere ex quae consequuntur quo accusamus harum nam, labore voluptates perferendis necessitatibus reprehenderit officia nisi excepturi sunt dolorem maiores cum! Laborum praesentium perspiciatis veritatis iste unde! Labore eveniet recusandae harum minus!'
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
