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
        //cache settings for one day
        $settings = Cache::remember('settings', 24*60, function() {
            return App\Setting::find(1)->data;
        });
    }

    return $settings[$key];
}

function get_page_image($url = '')
{
    //get default page image
    if (empty($url))
    {
        return asset('frontend-theme/img/home-bg.jpg');
    }

    return asset($url);
}


function get_post_image($url = '')
{
    //get default page image
    if (empty($url))
    {
        return asset('frontend-theme/img/post-bg.jpg');
    }

    return asset($url);
}

function get_post_date($date)
{
    //make sure to add fr_FR local. (locale -a to see currently installed)
    setlocale(LC_TIME, "fr_FR");
    return strftime("%e %B %Y", strtotime($date));
}
