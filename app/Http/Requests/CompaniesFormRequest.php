<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_name' => 'required|min:2',
            'trading_name' => 'required|min:2',
            'cnpj' => 'required|min:18|max:18'
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'O campo \'Razão Social\' é obrigatório',
            'trading_name.required' => 'O campo \'Nome Fantasia\' é obrigatório',
            'company_name.min' => 'O campo \'Razão Social\' precisa ter pelo menos 2 caracteres',
            'trading_name.min' => 'O campo \'Nome Fantasia\' precisa ter pelo menos 2 caracteres',
            'cnpj.required' => 'O campo \'CNPJ\' é obrigatório',
            'cnpj.min' => 'O campo \'CNPJ\' precisa ter exatamente 18 caracteres'
        ];
    }
}
