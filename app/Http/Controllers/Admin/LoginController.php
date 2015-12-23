<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Only allow guest user (not logged) except if the user wants to logout
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Display the login form for the admin user
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('admin.login.login');
    }

    /**
     * Process login form and check if email and password is valid
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }

        flash('Email or password does not match', 'error');

        return redirect()->back()->withInput();
    }

}
