<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::group(["namespace" => "Auth","as" => "auth."],function(){
    Route::post('/signin', [AuthController::class,"signin"])->name("signin");
    Route::post('/signup',[AuthController::class,"signup"])->name("signup");
    Route::post("/forgot-password",[AuthController::class,"forgotPassword"])->name("forgot-password");
    Route::post("/reset-password",[AuthController::class,"resetPassword"])->name("reset-password");
    
    Route::group(["middleware" => "auth:sanctum"],function(){
        Route::post("/logout",[AuthController::class,'logout'])->name("logout");
        Route::get("/me",[AuthController::class,'me'])->name("me");
    });
});