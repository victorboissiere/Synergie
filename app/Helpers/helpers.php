<?php

function flash($message, $var = 'message')
{
    session()->flash($var, $message);
}

/**
* Available settings :
* - website_title
* - website_description
* - admin_title
* - admin_email
* - code_header
* - code_footer
*/
function get_global_settings($key)
{
    static $settings;

    if (is_null($settings))
    {
        $settings = Cache::remember('settings', 24*60, function() {
            return App\Setting::find(1)->data;
        });
    }

    return $settings[$key];
}
