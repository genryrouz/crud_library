<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'surname' => 'required',
            'author_name' => 'required',
            'email' => 'required'
        ];
    }

    public function messages() {
        return [
            'surname.required' => 'Поле "Фамилия" является обязательным.',
            'author_name.required' => 'Поле "Имя" является обязательным.',
            'email.required' => 'Поле "Email" является обязательным.'
           
        ];
    }
}
