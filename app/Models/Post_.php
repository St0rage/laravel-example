<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dani Yudistira M",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore doloremque porro tenetur repellendus, at iusto magnam autem nemo cupiditate quo veritatis odio repellat nesciunt! Laudantium aperiam totam molestiae perspiciatis fugiat pariatur. Alias quisquam eos eum voluptatum quos facilis, iure soluta rem inventore officiis commodi laudantium, porro possimus mollitia id fugit velit totam perferendis exercitationem? Saepe sed temporibus laudantium atque, deserunt dolore sit mollitia quo asperiores et impedit dolores sint, numquam illo maxime natus, doloribus eum magnam beatae quas ipsum modi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dani Yudistira M",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure iste quis sapiente eveniet animi explicabo ipsa. Expedita pariatur magni aut suscipit voluptate, deleniti totam illum maiores. Adipisci autem eveniet labore quia quas amet aliquam, nobis eum ad explicabo, eos nihil deserunt? Maiores, a id quaerat porro dignissimos cumque ratione maxime eius quibusdam impedit voluptatibus ullam qui aliquam sequi repellat unde enim rerum veniam assumenda non quos! Qui fugiat eaque, perferendis ipsum et temporibus quisquam sint id, distinctio iure, dolor doloremque accusantium voluptatem at unde voluptates error dicta fuga dolorum possimus magni repudiandae commodi repellendus. Voluptatem similique vero aliquam! Accusamus, nobis."
        ]
    ];

    public static function all()
    {
        // property static gunakan self::
        // collect adalah collection
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // method gunakan static::
        // property gunakan self::/
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post;

        // cara collection
        return $posts->firstWhere('slug', $slug);

    }
}
