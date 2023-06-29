<?php

namespace App\Http\Requests;

use App\Models\Person;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {



        return [
            'first_name' => ['string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'email' => [
                'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id_user, 'id_user'),
            ],
            'cpf' => ['nullable', 'cpf', Rule::unique(Person::class)->ignore($this->user()->id_user, 'id_user')]
        ];
    }


    public function messages()
    {
        return [
            "first_name.max" => "Nome muito grande",
            "last_name.max" => "Sobrenome muito grande",
            "email.email" => "E-mail inválido",
            "email.unique" => "E-mail já em uso",
            "email.max" => "E-mail muito grande",
            'cpf.cpf' => 'CPF inválido',
            'cpf.unique' => 'CPF já em uso'
        ];
    }
}
