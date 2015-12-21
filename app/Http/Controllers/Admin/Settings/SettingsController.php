<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Requests\Settings\SettingRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
use Cache;

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

    public function store(SettingRequest $request)
    {
        //remove from cache old data to update global website settings
        Cache::forget('settings');

        $settings = Setting::find(1);

        //update database using json format
        $settings->data = [
          'website_title'       => $request->get('website_title'),
          'admin_title'         => $request->get('admin_title'),
          'website_description' => $request->get('website_description'),
          'admin_email'         => $request->get('admin_email'),
          'code_header'         => $request->get('code_header'),
          'code_footer'         => $request->get('code_footer')
        ];

        $settings->update();

        flash('Settings updated with success');

        return redirect()->back();
    }
}
