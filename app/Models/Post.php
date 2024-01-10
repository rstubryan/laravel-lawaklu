<?php

namespace App\Models;

class Post
{
    private static $meme_posts = [
        [
            "title" => "Lorem maseh",
            "slug" => "lorem-maseh",
            "likes" => "10",
            "author" => "lawaklu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam magnam, commodi vero omnis est distinctio, nam aperiam sunt quos maiores corrupti error officia, reprehenderit tenetur! Nulla sequi asperiores iusto fuga praesentium consequatur autem quo, laborum pariatur aspernatur esse ipsum harum mollitia? Est, dolorem dolor eveniet officiis labore quasi soluta nam in ab itaque fuga debitis alias nobis? Modi nulla nemo qui temporibus vero architecto iusto commodi? Sapiente praesentium commodi quos totam cupiditate ipsa ducimus, iste doloribus animi laboriosam vel molestiae dolore ea non necessitatibus earum nihil officia quod voluptas magnam, explicabo quis enim facilis. Accusamus necessitatibus autem facilis, quasi perspiciatis consequuntur quae beatae at quas neque sapiente similique ipsa? Soluta, libero necessitatibus expedita voluptate enim beatae aut molestias doloremque recusandae velit totam, fugiat temporibus amet consequuntur dolor? Dignissimos quisquam vitae, sed sit unde ducimus accusamus mollitia repellat odit labore obcaecati laborum excepturi. Corrupti vel pariatur doloribus quidem, tenetur sint voluptas deleniti dolores veniam delectus maiores omnis incidunt veritatis, facere necessitatibus provident in atque mollitia rerum libero ad cum eligendi. Ullam, nam atque voluptas, dolorem blanditiis incidunt neque porro facilis totam debitis molestiae veniam itaque praesentium accusantium sit quod odit alias asperiores architecto, natus sunt iste! Blanditiis hic repellat ipsa deserunt.",
        ],
        [
            "title" => "Mancing maseh",
            "slug" => "mancing-maseh",
            "likes" => "2",
            "author" => "lawak",
            "body" => "Mancing mania mantap",
        ],
    ];

    public static function all()
    {
        return collect(self::$meme_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
