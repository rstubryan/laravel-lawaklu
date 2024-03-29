<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "All posts of Lawaklu",
            // "posts" => Post::all()
            "posts" => Post::latest()->paginate(6)
        ]);
    }

    public function show(Post $post)
    {
        return view("post", [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
