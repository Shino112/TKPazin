<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(6);

        return view("frontend.novosti", compact('posts'))->render();
    }

    public function show($id)
    {
        $post = Post::FindOrFail($id);

        return view('frontend.prikaz_novosti', compact('post'))->render();
    }
}
