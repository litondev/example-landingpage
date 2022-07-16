<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;

class SettingLogoRequest extends FormRequest
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
            "logo" => "required|image|mimes:jpeg,png,jpg|max:10024|dimensions:max_width=10000,max_height=10000"
        ];
    }


    public function messages()
    {
        return [    
            "logo.required" => "Gambar logo harus diisi",
            "logo.image" => "Gambar logo tidak valid harus (jpeg,png,jpg)",
            "logo.mimes" => "Gambar logo tidak valid harus (jpeg,png,jpg)",
            "logo.max" => "Gambar logo ukuran lebih dari 10mb",
            "logo.dimensions" => "Gambar logo dimensinya lebih dari 10000x10000"
        ];
    }
}
