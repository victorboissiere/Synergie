<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class UserRequest extends Request
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
        $new_user = $this->route()->getName() != "admin-users.update";

        return [
            'name' => 'required|max:50|min:2',
            'email' => 'required' . ($new_user ? '|unique:users' : ''),
            'password' => ($new_user ? 'required|' : '') . 'min:2'
        ];
    }
}
