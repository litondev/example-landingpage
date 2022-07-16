<?php
namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait DateModelTrait{
    public function getDateAttribute($date)
    {    
        return now()->parse($date)->format("d/m/Y");
    }
}