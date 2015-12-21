<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display the homepage content
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::take(5)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('posts'));
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog', compact('posts'));
    }


    public function about()
    {
        return view('about');
    }
}
