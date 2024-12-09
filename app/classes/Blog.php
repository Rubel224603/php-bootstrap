<?php


namespace App\classes;


class Blog
{
    public static $blogs= [];
    public  static function getAllBlog(){

        self::$blogs =[
            0=>[
                "id"                =>  1,
                "title"             =>  "This is blog title",
                "decription_one"    =>  "The is blog one Description one",
                "description_two"   =>  "this is blog one descripton two",
                "image"             =>  "assets/img/7.png",

            ],
            1=>[
                "id"                =>  2,
                "title"             =>  "This is blog titl two",
                "decription_one"    =>  "The is blog one Description one",
                "description_two"   =>  "this is blog one descripton two",
                "image"             =>  "assets/img/8.png",

            ],
            3=>[
                "id"                =>  2,
                "title"             =>  "This is blog titl two",
                "decription_one"    =>  "The is blog one Description one",
                "description_two"   =>  "this is blog one descripton two",
                "image"             =>  "assets/img/8.png",

            ],
            4=>[
                "id"                =>  2,
                "title"             =>  "This is blog titl two",
                "decription_one"    =>  "The is blog one Description one",
                "description_two"   =>  "this is blog one descripton two",
                "image"             =>  "assets/img/8.png",

            ],
            5=>[
                "id"                =>  2,
                "title"             =>  "This is blog titl two",
                "decription_one"   =>  "The is blog one Description one",
                "description_two"   =>  "this is blog one descripton two",
                "image"             =>  "assets/img/8.png",

            ],

        ];

        return self::$blogs;
    }
}