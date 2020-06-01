<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'inputUsername' => 'required|min:11|max:40|email',
            'inputPassword' => 'required|min:8|max:20|regex:/^(?=.*[A-Z]+)(?=.*\d+)(?=.*[!@#\$&\*]+)[\w!@#\$&\*]{8,20}$/i'
        ];
    }
}
