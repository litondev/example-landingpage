<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestTrait;

class SettingRequest extends FormRequest
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
            "company_name" => "required|string",
            "address" => "required|string",            
            "email" => "required|string|email",
            "phone" => "required|string",
            "website" => "nullable",
            "tax" => "required|numeric|between:0.00,100.00|".$this->vrDecimal,
            "signature_owner" => "nullable",
            "is_min_stock" => "required|in:1,0",
            "limit_item_transaction" => "required|integer|min:1",
            "product_group_material" => "required|string"
        ];
    }



    public function messages()
    {
        return [    
            "company_name.required" => "Nama Perusahan harus diisi",
            "company_name.string" => "Nama Perusahan harus diisi",

            "email.required" => "Email harus diisi",
            "email.string" => "Email harus diisi",
            "email.email" => "Email tidak valid",

            "phone.required" => "No Telp harus diisi",
            "phone.string" => "No Telp harus diisi",

            "address.required" => "Alamat harus diisi",
            "address.string" => "Alamat harus diisi",
            
            "tax.required" => "Ppn harus diisi",
            "tax.numeric" => "Ppn tidak valid",
            "tax.regex" => "Ppn tidak valid",
            "tax.between" => "Ppn harus di antara 0 - 100 %",

            // signature_owner

            // website

            "is_min_stock.required" => "Stok dapat minus harus diisi",
            "is_min_stock.in" => "Stock dapat minus tidak valid harus (Ya/Tidak)",        

            "limit_item_transaction.required" => "Batas transaksi item harus diisi",
            "limit_item_transaction.integer" => "Batas transaksi item harus diisi",
            "limit_item_transaction.min" => "Batas transaksi item kurang dari 1",

            "product_group_material.required" => "Nama produk group material harus diisi",
            "product_group_material.required" => "Nama produk group material harus diisi"
        ];
    }
}
