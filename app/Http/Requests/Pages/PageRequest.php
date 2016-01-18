<?php

namespace App\Http\Requests\Pages;

use App\Http\Requests\Request;

class PageRequest extends Request
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
            'description' => 'required|max:255|min:2',
            'image'       =>  'file_exists:' . env('UPLOAD_DIR', 'img'),
            'content'     => 'required'
        ];
    }
}
