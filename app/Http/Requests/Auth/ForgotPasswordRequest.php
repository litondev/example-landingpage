<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;
use Illuminate\Validation\Rule;

class ForgotPasswordRequest extends FormRequest
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
            ]
        ];
    }

    public function attributes(){
        return [
            'email' => 'Email',
        ];
    }
}
