<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'billing_email'=>['required','string', 'email'],
            'billing_name'=>['required', 'string', 'min:2', 'max:40'],
            'billing_address' => ['required', 'string', 'min:5'],
        ];
    }
}
