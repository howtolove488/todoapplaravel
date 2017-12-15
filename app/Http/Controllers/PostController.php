<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
    	$posts = \App\Post::findOrFail($id);

    	$this->authorize($posts, 'view');

    	return view('post_show',compact('posts'));
    }
}
