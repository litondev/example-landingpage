<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\FormatResponse;
use App\Http\Requests\Auth\{
    SigninRequest,
    SignupRequest,
    ForgotPasswordRequest,
    ResetPasswordRequest
};

class AuthController extends Controller
{
    /**
     *  Signin user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signin(SigninRequest $request)
    {
        try{
            $payload = $request->validated();

            $field = filter_var($payload["email"], FILTER_VALIDATE_EMAIL) 
                ? "email" 
                : "username";

            if (!auth()->attempt([
                "company_name" => $payload["company_name"],
                $field => $payload["email"],
                "password" => $payload["password"]
            ])) {
                return response()->json([
                    "message" => "Email/Username Atau Password Salah"
                ],401);
            }    

            return response()->json([
                'access_token' => auth()->user()->createToken('access_token')->plainTextToken,
                'user' => auth()->user()
            ]);
        }catch(\Exception $e){
            return FormatResponse::failed($e);
        }
    }

    public function signup(SignupRequest $request){
        try{
            \DB::beginTransaction();

            $payload = $request->validated();

            $user = User::create([
                "username" => Str::slug($payload["username"],"-"),
                "package_id" => $payload["package_id"],
                "company_name" => $payload["company_name"],
                "sub_domain" => Str::slug($payload["company_name"],"_"),
                "email" => $payload["email"],
                "phone" => $payload["phone"],
                "password" => \Hash::make($payload["password"])
            ]);            
            
            \DB::commit();
            return response()->json($user);            
        }catch(\Exception $e){
            \DB::rollback();
            return FormatResponse::failed($e);
        }
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\Response
     */
    public function me()
    {        
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Berhasil Keluar'
        ]);
    }


    /**
     *  Forgot password user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function forgotPassword(ForgotPasswordRequest $request){
        try{
            \DB::beginTransaction();

            $user = User::query()
                ->where("email",$request->email)
                ->firstOrFail();

            $user->update([
                "remember_token" => \Str::random(100)
            ]);

            \Notification::send($user,new \App\Notifications\ResetPassword($user));

            \DB::commit();
            return response()->json([
                "status" => true
            ]);
        }catch(\Exception $e){
            \DB::rollback();
            return FormatResponse::failed($e);
        }
    }

    /**
     *  Reset password user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(ResetPasswordRequest $request){
        try{
            \DB::beginTransaction();

            $user = User::query()
                ->where("remember_token",$request->token)
                ->where("email",$request->email)
                ->firstOrFail();

            $user->update([
                "password" => \Hash::make($request->password),
                "remember_token" => Null
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
