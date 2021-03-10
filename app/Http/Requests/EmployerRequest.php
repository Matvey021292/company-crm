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
            'phone' => 'required|regex:/(80)[0-9]{9}/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('site.nameRequired'),
            'name.min' => __('site.nameMinSymbol'),
            'lastname.required' => __('site.lastNameRequired'),
            'lastname.min' => __('site.lastNameMinSymbol'),
            'phone.regex' => __('site.invalidPhone'),
            'email.required' => __('site.emailRequired'),
            'email.unique' => __('site.emailExists'),
            'email.email' => __('site.invalidEmailAddress'),
        ];
    }
}
