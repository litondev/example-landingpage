<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getValueAttribute($value){
        if(isset($this->attributes["name"])){
            switch($this->attributes["name"]){
                case "logo":        
                    return asset("/images/logo/default.png");
                    break;             
                case "trial_day_warning":
                    return intval($value);
                    break;              
                case "billing_day_warning":
                    return intval($value);
                    break;            
                case "expired_payment_day":
                    return intval($value);
                    break;
                case "trial_day":
                    return intval($value);
                    break;
                case "referral_percentage":
                    return floatval($value);
                    break;                    
                default:
                    return $value;
                    break;
            }
        }else{
            return $value;
        }
    }

    public function setValueAttribute($value)
    {
        switch($this->attributes["name"]){
            case "trial_day_warning":      
                $this->attributes["value"] = intval($value);
                break;
            case "billing_day_warning":
                $this->attributes["value"] = intval($value);
                break;
            case "expired_payment_day":
                $this->attributes["value"] = intval($value);
                break;
            case "trial_day":
                $this->attributes["value"] = intval($value);
                break;
            case "referral_percentage":
                $this->attributes["value"] = floatval($value);
                break;
            default:
                $this->attributes["value"] = $value;
                break;
        }           
    }

    public function getValueOriginalAttribute($value){
        return $this->attributes["value"];
    }
}
