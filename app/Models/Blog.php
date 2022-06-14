<?php

namespace App\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Anderies",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat possimus aliquam praesentium vero tempore ut, amet
            dolores voluptas iusto ipsam autem obcaecati ipsum eligendi accusantium asperiores mollitia officiis, aut esse quidem
            repellat dolor sapiente quibusdam. Illum dignissimos fugiat totam, sapiente quasi rem, earum quae ut dolorem ipsum
            laboriosam! Veritatis vel esse delectus facilis autem accusantium ipsa nobis rem nulla molestias laborum quae doloribus
            dolorum, voluptate unde voluptas deleniti nam tempora necessitatibus consequatur natus nemo quo! Ab praesentium
            quibusdam laudantium quaerat!."

        ],
        [
            "title" => "Judul Post Anderies",
            "slug" => "judul-post-kedua",
            "author" => "Anderies",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ipsum, molestiae, similique nihil et ratione quisquam,
            numquam harum eius ex fugiat corporis! Reprehenderit, voluptates similique ipsa odit temporibus, doloremque at iure
            ducimus praesentium repellat natus. Commodi ipsa eaque non velit quae? Excepturi officia animi consequatur enim
            inventore autem ab doloremque dignissimos accusantium, assumenda ipsum error ad culpa nam modi et porro aspernatur,
            pariatur quam sequi eveniet. Ratione, laudantium! Quia, eveniet pariatur facere iusto adipisci voluptates iste suscipit
            perspiciatis. Nesciunt fugit veritatis animi neque ullam modi tempora, asperiores non ad ab labore provident praesentium
            cum nostrum maiores aspernatur at! Voluptate, cupiditate?"


        ],
    ];


    public static function getAll()
    {
        // return self::$blog_posts;
        // Log::info("test");
        // foreach (self::$blog_posts as $value) {
        //     // Log::info($value);
        // };

        // $c = [];
        // $collection = collect(self::$blog_posts);
        // foreach (self::$blog_posts as $b) {
        //     // echo
        //     // dump($b);
        //     // dd(Str::limit(strip_tags($b['body']), 50, '...'));
        //     $merged = $collection->merge([ 'discount' => dd(Str::limit(strip_tags($b['body']), 50, '...'))]);
        //     // array_push($b,  Str::limit(strip_tags($b['body']), 30, '...'));
        // }

        // @dd($merged);
        // return self::$blog_posts;
        // @dd(collect(self::$blog_posts));
        return collect(self::$blog_posts);
    }
}
