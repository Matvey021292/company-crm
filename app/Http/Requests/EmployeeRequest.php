<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'lastname' => 'required|string|min:2|max:255',
            'email' => 'email:rfc,dns|unique:employees,email,'.$this->employee .'|max:255',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:11'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => __('site.firstNameRequired'),
            'name.min' => __('site.nameMinSymbol'),
            'lastname.required' => __('site.lastNameRequired'),
            'lastname.min' => __('site.lastNameMinSymbol'),
            'phone.regex' => __('site.invalidPhone'),
            'phone.min' => __('site.phoneMinSymbol'),
            'email.required' => __('site.emailRequired'),
            'email.unique' => __('site.emailExists'),
            'email.email' => __('site.invalidEmailAddress'),
            'phone.integer' => __('site.phoneNumber')
        ];
    }
}
