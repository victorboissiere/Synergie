<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Do not allow guest user to access methods in this class
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the dashboard once the user is logged
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nb_users = User::count();
        $nb_posts = Post::count();
        return view('admin.admin', compact('nb_users', 'nb_posts'));
    }

}
