<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Posts;

use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // $posts = $posts->all();
        // // $posts = (new \App\Repositories\Posts)->all();
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'Your post has now been published.');
        
        return redirect('/');
    }
}
