<?php

namespace App\Http\Controllers\Admin\Security;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Security;

class SecurityController extends Controller
{
    /**
    * Do not allow guest user to access methods in this class
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display security logs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Security::paginate(30);

        return view('admin.security.security', compact('logs'));
    }
}
