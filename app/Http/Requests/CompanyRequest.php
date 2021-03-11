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
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email:rfc|unique:companies,email,'.$this->company .'|max:255',
            "logo"  => "dimensions:min_width=100,min_height=100,max_width=1024,max-height=768|image|mimes:jpeg,png,jpg|max:2048"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('site.nameRequired'),
            'name.min' => __('site.minSymbol'),
            'email.required' => __('site.emailRequired'),
            'email.unique' => __('site.emailExists'),
            'email.email' => __('site.invalidEmailAddress'),
            'logo.dimensions' => __('site.sizeLogo')
        ];
    }
}
