<?php

namespace App\Helpers;

use App\Models\Setting;

class FormatSetting{
    public static function getAll(){	
        $settings = Setting::all();
        
        foreach($settings as $item){
            \Config::set("setting.".$item->name,strval($item->value));
        }
    }
}