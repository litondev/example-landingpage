<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profil\ProfilController;

Route::group(["as" => "profil.","prefix" => "profil"],function(){
    Route::put("/password",[ProfilController::class,"password"])->name("password");        
    Route::put("/",[ProfilController::class,"update"])->name("update");
});
