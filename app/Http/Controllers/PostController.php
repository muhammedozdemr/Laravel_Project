<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
{
    views($post)->record();

    return view('post.show', compact('post'));
}
}
