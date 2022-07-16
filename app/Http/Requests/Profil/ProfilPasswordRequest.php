<?php

namespace App\Http\Requests\Profil;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;

class ProfilPasswordRequest extends FormRequest
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
            "password" => "required|string|min:8",
            "old_password" => "required|string|min:8"
        ];   
    }


    public function messages()
    {
        return [    
            "password.required" => "Password harus diisi",
            "password.string" => "Password harus diisi",
            "password.min" => "Password karakter min 8 digit",

            "old_password.required" => "Password lama harus diisi",
            "old_password.string" => "Passwordh lama harus diisi",
            "old_password.min" => "Password lama karakter min 8 digit"
        ];
    }
}
