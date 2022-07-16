<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setting\{
	ActivityController,
	SettingController,
};

Route::group(["prefix" => "setting","as" => "setting."],function(){
    // ACTIVITY
    Route::get("/activity",[ActivityController::class,"index"])->name("activity.index");
                
    // SETTING
    Route::put("/signature",[SettingController::class,"updateSignature"])->name("signature");
    Route::put("/logo-print",[SettingController::class,"updateLogoPrint"])->name("logo-print");
    Route::put("/logo",[SettingController::class,"updateLogo"])->name("logo");
    Route::get("/",[SettingController::class,"index"])->name("index");
    Route::put("/",[SettingController::class,"update"])->name("update");
});
