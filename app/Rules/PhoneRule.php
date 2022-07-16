<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $value = strval($value);

        $firstLine = substr($value,0,2);

        if(!in_array($firstLine,["08","+6"])){
            return false;
        }

        if($firstLine == "+6"){
            if(substr($value,0,3) != "+62"){
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'No telp tidak valid harus +62/08';
    }
}
