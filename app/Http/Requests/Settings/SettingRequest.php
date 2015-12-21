<?php

namespace App\Http\Requests\Settings;

use App\Http\Requests\Request;

class SettingRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'website_title' => 'required|min:2|max:60',
            'admin_title' => 'required|min:2|max:60',
            'website_description' => 'required|min:10|max:255',
            'admin_email' => 'required|email|max:255',
            'code_header' => 'max:10000',
            'code_footer' => 'max:10000'
        ];
    }
}
