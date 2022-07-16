<?php

namespace App\Http\Requests\Profil;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;

class ProfilRequest extends FormRequest
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
            "username" => "required|string|max:255|unique:users,username,".auth()->user()->id,
            "fullname" => "nullable|string|max:200",
            "email" => "required|string|unique:users,email,".auth()->user()->id."|max:50",
        ];           
    }


    public function messages()
    {
        return [    
            "username.required" => "Username harus diisi",
            "username.string" => "Username harus diisi",
            "username.max" => "Username karakter max 255 digit",
            "username.unique" => "Username telah terpakai",

            "fullname.max" => "Nama lengkap karakter max 200 digit",
            "fullname.string" => "Nama lengkap harus diisi",

            "email.required" => "Email harus diisi",
            "email.string" => "Email harus diisi",
            "email.unique" => "Email telah terpakai",
            "email.max" => "Email karakter max 50 digit"
        ];
    }
}
