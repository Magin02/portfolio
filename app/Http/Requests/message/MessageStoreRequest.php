<?php

namespace App\Http\Requests\message;

use Illuminate\Foundation\Http\FormRequest;

class MessageStoreRequest extends FormRequest
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
            'name' => 'required|max:80|min:3',
            'email' => 'required|email',
            'subject' => 'max:80|min:2',
            'content' => 'required|max:700|min:2'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é necessário.',
            'name.max' => 'Maximo de 90 caracteres para o nome.',
            'name.min' => 'Minimo de 3 caracteres para o nome.',
            'email.email' => 'Precisa ser um email válido.',
            'email.required' => 'O email é necessário.',
            'content.required' => 'O contéudo é necessário.',
            'content.min' => 'Minimo de 2 caracteres para o conteúdo.',
            'content.max' => 'Maximo de 700 caracteres para o conteúdo.',
            'subject.min' => 'Minimo de 2 caracteres para o assunto.',
            'subject.max' => 'Maximo de 80 caracteres para o assunto.'
        ];
    }
}
