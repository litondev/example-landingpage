<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        try{             
            // IF SUPERADMIN ACCESS
            if(!auth()->user()->parent_id){
                return $next($request);
            }
    
            // GET ROUTE
            $route_name = explode(".",$request->route()->getName());
                        
            // SEARCH "get" WORD IN ROUTE NAME 2
            if(strpos($route_name[2],"get") > -1){
                return $next($request);
            }           

            // GET USER
            $user = auth()->user();

            // GET GROUP ROLES AND ROLES
            $user->load(["group_role","group_role.roles"]);
            
            // SEARCH FOR THIS ROUTE
            $main_role = $user->group_role->roles->where("name",$route_name[1])->first();
            
            // IF DOES HAVE ACCESS
            if(!$main_role){
                return response()->json([
                    "message" => "Unauthorized"
                ],401);     
            }
                  
            // IF ALL ACCESS
            if(in_array("all",json_decode($main_role->pivot->operators))){
                return $next($request);
            }    

            // CHECK ACCESS
            if(!in_array($route_name[2],json_decode($main_role->pivot->operators))){
                return response()->json([
                    "message" => "Unauthorized"
                ],401); 
            }
                            
            return $next($request);
        }catch(\Exception $e){
            return response()->json([
                "message" => "Unauthorized"
            ],401);
        }
    }
}
