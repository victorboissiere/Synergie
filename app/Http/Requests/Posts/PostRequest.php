<?php

namespace App\Http\Requests\Posts;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'title' => 'required|max:255|min:2',
            'description' => 'required|max:180|min:30',//for the meta tag to be indexed by search engines
            'content' => 'required'
        ];
    }
}
