<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;

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
     * Fetch settings from database
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::find(1)->data;

        return view('admin.settings.settings', compact('settings'));
    }
}
