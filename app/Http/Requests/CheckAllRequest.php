<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;

class CheckAllRequest extends FormRequest
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
            "checkboxs" => "required|array",
            "checkboxs.*" => "required|integer"
        ];
    }


    public function messages()
    {
        return [
            "checkboxs.required" => "Daftar checkbox harus diisi",
            "checkboxs.array" => "Daftar checkbox harus diisi",
            
            "checkboxs.*.required" => "Terdapat isi daftar checkbox yang belum diisi",
            "checkboxs.*.integer" => "Terdapat isi daftar checkbox yang belum diisi"
        ];
    }
}
