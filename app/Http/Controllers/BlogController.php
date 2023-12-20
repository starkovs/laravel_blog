<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat.',
        ];
        $posts = array_fill(0,10, $post);
        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat.',
        ];
        return view('blog.show', compact('post'));
    }

}
