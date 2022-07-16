<?php
namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait RequestTrait{
    /**
     * Custom Decimal Validation
     * 
     * @return string
     * vrDecimal => Validation Regex Decimal
    **/
    public $vrDecimal = "regex:/^-?[0-9]+(?:.[0-9]{1,2})?$/";

	/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /** 
     * Custom Error
     *
     * @return json     
    */
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                "message" => $validator->errors()->first()
            ],422)
        );
    }

    /**
     * Global Message
     */
    public function messages()
    {
        return [
            "required" => ":attribute harus diisi",
            "integer" => ":attribute harus diisi",
            "string" => ":attribute harus diisi",
            "exists" => ":attribute tidak ditemukan",
            "max" => ":attribute max :max digit",
            "min" => ":attribute min :min digit",
            "unique" => ":attribute telah digunakan oleh orang lain",
            "email" => ":attribute email tidak valid",
            "confirmed" => ":attribute tidak sama dengan konfirmasinya"
        ];
    }
}