<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setting\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$defaultVersion = "v1";

Route::group(["prefix" => $defaultVersion],function() use ($defaultVersion) {
	// STATUS
    Route::get('/status', function () use ($defaultVersion) {
		return response([
			'message' => 'active (running)',
			'version' => $defaultVersion
		]);
	})->name("status");

	// GET SETTING
	Route::get("/get-setting",[SettingController::class,"index"])->name("get-setting");
	
	// MODULE AUTH
	Route::group([],__DIR__.'/api/auth.php');

	// Route::group(["middleware" => ["auth:sanctum"]],function(){
	// 	// DASHBOARD 
	// 	Route::group([],__DIR__.'/api/dashboard.php');

	// 	// PROFIL
	// 	Route::group([],__DIR__.'/api/profil.php');

	// 	/* MODULE SETTING */
	// 	Route::group([],__DIR__.'/api/setting.php');
	// });
});
