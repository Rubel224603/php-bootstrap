<?php

namespace App\classes;
use App\classes\Blog;

class Home {

    public $blogs;
    public function index()
    {
        $this->blogs = Blog::getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }

    public function  about(){
        return view('about');
    }

    public function  portfolio(){
        return view('portfolio');
    }

    public function  gallary(){
        return view('gallary');
    }

    public function  contact(){
        return view('contact');
    }

    public function  service(){
        return view('service');
    }
}








?>