<?php

namespace App\Http\Controllers;

use App\Post;
use App\Page;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonials\TestimonialRequest;

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

        $page = Page::where('title', 'home')->first();

        return view('welcome', compact('posts', 'page'));
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('blog', compact('posts'));
    }


    public function about()
    {
        $page = Page::where('title', 'about')->first();

        return view('about', compact('page'));
    }

    public function show_simple_post($id)
    {
        $post = Post::findOrFail($id);

        return view('simple_post', compact('post'));
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function addTestimonial(TestimonialRequest $request)
    {
        flash('Votre témoigagne a bien été envoyé.');

        return redirect()->back();
    }
}
