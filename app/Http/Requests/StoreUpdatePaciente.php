<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePaciente extends FormRequest
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
            'nome' =>                ['required', 'min:3', 'max:160'],
            'email' =>               ['required', 'min:5', 'max:50'],
            'cpf' =>                 ['required'],
            'senha' =>               ['nullable'],
            'nascimento' =>          ['nullable'],
            'altura' =>              ['nullable'],
            'peso' =>                ['nullable'],
            'superficie_corporea' => ['nullable'],
            'telefone' =>            ['nullable'],
            'acesso' =>              ['nullable']
        ];
    }
}