<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;
use Illuminate\Validation\Rule;

class SigninRequest extends FormRequest
{
    use RequestTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "company_name" => [
                "required",
                "string",
                "max:100",
                Rule::exists('users', 'company_name')                     
                    ->where('company_name', $this->company_name)
            ],
            "email" => [
                "required",
                "string",
                "max:50"              
            ],
            "password" => "required|string|min:8"
        ];
    }

    public function attributes(){
        return [
            'company_name' => 'Nama Perushaan',
            'email' => 'Email/Username',
            'password' => 'Password'
        ];
    }
}
