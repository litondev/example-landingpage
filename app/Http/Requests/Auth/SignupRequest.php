<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;
use Illuminate\Validation\Rule;
use App\Rules\PhoneRule;

class SignupRequest extends FormRequest
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
            "package_id" => [
                "integer",
                "required",
                Rule::exists('packages', 'id')                     
                    ->where('id', $this->package_id)
            ],

            "username" => [
                "required",
                "string",
                "max:100",
                Rule::unique("users","username")
                    ->where("username",$this->username)
            ],

            "company_name" => [
                "required",
                "string",
                "max:100",
                Rule::unique("users","company_name")
                    ->where("company_name",$this->company_name)
            ],

            "email" => [
                "required",
                "string",
                "max:50",
                "email",
                Rule::unique("users","email")
                    ->where("email",$this->email)
            ],

            "phone" => [
                "string",
                "required",
                "max:20",
                "min:10",
                new PhoneRule(),
                Rule::unique("users","phone")
                    ->where("phone",$this->phone)
            ],

            "password" => "required|string|min:8",
        ];
    }

    public function attributes(){
        return [
            'package_id' => 'Paket',
            'username' => 'Username',
            'company_name' => 'Nama Perushaan',
            'email' => 'Email',
            'phone' => 'No Telp',        
            'password' => 'Password'
        ];
    }
}
