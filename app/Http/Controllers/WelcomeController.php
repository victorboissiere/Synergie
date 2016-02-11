<?php

namespace App\Http\Controllers;

use App\Post;
use App\Page;
use App\Testimonial;


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
        $testimonials = Testimonial::where('status', 'published')->paginate(15);

        return view('testimonials', compact('testimonials'));
    }

    public function addTestimonial(TestimonialRequest $request)
    {
        // Google recaptcha settings
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => env('GOOGLE_CAPTCHA_SECRET', ''),
            'response' => $request->get('g-recaptcha-response')
        ];

        // send data to Google Recaptcha.
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context  = stream_context_create($options);
        $response = json_decode(file_get_contents($url, false, $context), true);

        //verify google catpcha is valid
        if (!isset($response['success']) || !$response['success'])
        {
            flash('CAPTCHA non valide', 'error');

            return redirect()->back()->withInput();
        }

        Testimonial::create([
            'ip'      => $_SERVER['REMOTE_ADDR'],
            'content' => $request->get('content'),
            'status'  => 'waiting'
        ]);

        flash('Votre témoigagne a bien été envoyé.');

        return redirect()->back();
    }

    public function calendar()
    {
        return view('calendar');
    }
}
