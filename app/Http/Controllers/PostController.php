<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            'articles' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        // la definition de findOrfail va s'effectuer automatiquement
        return view('article', [
            'article' => $post
        ]);
    }
}
