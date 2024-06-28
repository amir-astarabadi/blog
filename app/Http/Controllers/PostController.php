<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('posts.index', ['posts' => auth()->user()->posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = new Post();
        $post->title = request()->get('title');
        $post->description = request()->get('description');
        $post->user_id = auth()->id();

        $post->save();
        return redirect(route('posts.index'));
    }


}
