<?php

namespace App\Helpers;

class FormatCode{
    public static function getCode($model,$initial){
		// WITH DOT
			// $lastCode = $model->query()
			//     ->select("code")    
			//     ->withTrashed()
			//     ->where("code","like","%".date("Ym")."%")
			//     ->orderBy("id","desc")
			//     ->first();
					
			// $code = $lastCode 
			//     ? explode(".",$lastCode->code)
			//     : array($initial,0,date("Ym"),0);    
		
			// return $code[0].".".rand(001,999).".".$code[2].".".sprintf("%'.04d\n",(intval($code[3]) + 1 ));      

		// WITHOUT DOT		
		$lastCode = $model->query()
            ->select("code")    
            ->withTrashed()
            ->where("code","like","%".date("Ym")."%")
            ->orderBy("id","desc")
            ->first();

		$code = 1;

		if($lastCode){
			$code = intval(substr($lastCode->code,-4)) + 1;
		}

		return $initial."".rand(001,999)."".date("Ym")."".sprintf("%'.04d",$code);      		
	}
}