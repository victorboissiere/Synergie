<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
    * Do not allow guest user to access methods in this class
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.settings');
    }
}
