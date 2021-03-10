<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:255',
            'lastname' => 'required|string|min:4|max:255',
            'email' => 'required|email:rfc,dns|unique:companies,email,'.$this->employer .'|max:255',
            'phone' => 'required|regex:/(80)[0-9]{11}/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('Name required'),
            'name.min' => __('Min 4 symbol'),
            'lastname.required' => __('Last Name required'),
            'lastname.min' => __('Min 4 symbol'),
            'phone.required' => __('Phone required'),
            'phone.regex' => __('Invalid phone'),
            'email.required' => __('Email required'),
            'email.unique' => __('Email exists'),
            'email.email' => __('Invalid email address'),
        ];
    }
}
