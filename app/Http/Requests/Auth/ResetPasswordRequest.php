<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;
use Illuminate\Validation\Rule;

class ResetPasswordRequest extends FormRequest
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
            "email" => [
                "required",
                "email",
                "max:50",
                Rule::exists('users', 'email')                     
                    ->where('email', $this->email) 
            ],        
            "token" => [
                "required",
                "max:100",
                Rule::exists('users', 'remember_token')                     
                    ->where('remember_token', $this->remember_token) 
            ],    
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required|min:8",
        ];
    }

    public function attributes(){
        return [
            'email' => 'Email',
            'token' => 'Token',
            'password' => 'Password',
            'password_confirmation' => 'Password Konfirmasi'
        ];
    }
}
