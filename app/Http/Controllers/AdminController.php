<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login.login');
    }
    
    public function postLogin(Request $request)
    {
        //TODO : transform with only
        $input = $request->all();
        //dd($input);
        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return 'failed';
    }
    
    public function index()
    {
        return view('admin.admin');
    }
}
