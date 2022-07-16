<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Profil\{
    ProfilRequest,
    ProfilPasswordRequest
};
use App\Helpers\FormatResponse;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    /**
     *  Update data user login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilRequest $request){
    	try{
    		\DB::beginTransaction();

    		auth()->user()->update([
                "username" => Str::slug($request->username,'-')
            ] + $request->validated() );

    		\DB::commit();
    		return response()->json([
    			"status" => true,
    			"user" => auth()->user()
    		]);
    	}catch(\Exception $e){
    		\DB::rollback();
            return FormatResponse::failed($e);
    	}
    }

    /**
     *  Update password user login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function password(ProfilPasswordRequest $request){
        try{
            \DB::beginTransaction();

            throw_if(
                !\Hash::check($request->old_password,auth()->user()->password),
                new \Exception("Password lama salah",422)
            );

            auth()->user()->update([
                "password" => \Hash::make($request->password)
            ]);

            \DB::commit();
            return response()->json([
                "status" => true
            ]);
        }catch(\Exception $e){
            \DB::rollback();
            return FormatResponse::failed($e);
        }
    }
}
