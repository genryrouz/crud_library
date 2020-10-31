<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required',
            'id_author' => 'required',
            'pages_count' => 'required',
            'charter_count' => 'required',
            'publish_date' => 'required',
            'city_publish_date' => 'required',
            'dectiption_book' => 'required'
   
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле "Наименование книги" является обязательным.',
            'id_author.required' => 'Поле "Автор" является обязательным.',
            'pages_count.required' => 'Поле "Количество страниц" является обязательным.',
            'charter_count.required' => 'Поле "Количество глав" является обязательным.',
            'publish_date.required' => 'Поле "Год издания" является обязательным.',
            'city_publish_date.required' => 'Поле "Город издания" является обязательным.',
            'dectiption_book.required' => 'Поле "Описание книги" является обязательным.'
        ];
    }
}
