<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CompanyRequest extends FormRequest
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
            'email' => 'sometimes|required|email|unique:companies,email,'.$this->company .'|max:255',
            "logo"  => "dimensions:min_width=100,min_height=100,max_width=1024,max-height=768"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('Name required'),
            'name.min' => __('Min 4 symbol'),
            'email.required' => __('Email required'),
            'email.unique' => __('Email exists'),
            'email.email' => __('Invalid email address'),
            'logo.dimensions' => __('Size logo')
        ];
    }
}
