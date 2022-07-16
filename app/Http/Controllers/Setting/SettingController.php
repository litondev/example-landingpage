<?php

namespace App\Http\Controllers\Setting;

use App\Models\{
    Setting,
    Package
};
use Illuminate\Http\Request;
use App\Helpers\FormatResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\{
    SettingRequest,
    SettingLogoRequest,
    SettingIconRequest
};

class SettingController extends Controller
{   
    /**
     * Display a listing of the resource 
     *
     * @return \Iluminate\Http\Response
     *
    */
    public function index(){
        $setting = Setting::query()
            ->select("name","value")
            ->get();    

        $setting[count($setting)] = [
            "name" => "packages",
            "value" => Package::query()
                ->select("id","name","type","price")
                ->with(["package_fitures"  => function($q){
                    $q->select("package_id","value");
                }])->get()
        ];                
        
        return response()->json($setting);
    }

    /**
     *  Update all data setting resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request){
        try{
            \DB::beginTransaction();

            foreach($request->validated() as $key => $item){               
                Setting::query()
                    ->where("name",$key)
                    ->update([
                        "value" => $item
                    ]);                
            }

            activity()        
                ->causedBy(auth()->user())
                ->withProperties([            
                    'table' => 'settings'                  
                ])
                ->log('Updated Data');

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
     *  Update logo setting resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateLogo(SettingLogoRequest $request){
       try{
            \DB::beginTransaction();

            $setting = Setting::query()
                ->where("name","logo")
                ->first();

            $fileName = "default.png";

            if($setting->value_original && file_exists(public_path('/images/logo/'.$setting->value_original))){
                unlink(public_path('/images/logo/'.$setting->value_original));
            }

            \Image::make($request->file("logo"))->save(public_path("/images/logo/".$fileName));

            $setting->update([
                "value" => $fileName
            ]);

            activity()        
                ->causedBy(auth()->user())
                ->withProperties([            
                    'table' => 'settings'                  
                ])
                ->log('Updated Logo');

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
     *  Update icon setting resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateIcon(SettingIconRequest $request){
        try{
             \DB::beginTransaction();
 
             $setting = Setting::query()
                 ->where("name","icon")
                 ->first();
 
             $fileName = "default.png";
 
             if($setting->value_original && file_exists(public_path('/images/icon/'.$setting->value_original))){
                 unlink(public_path('/images/icon/'.$setting->value_original));
             }
 
             \Image::make($request->file("icon"))->save(public_path("/images/icon/".$fileName));
 
             $setting->update([
                 "value" => $fileName
             ]);
 
             activity()        
                 ->causedBy(auth()->user())
                 ->withProperties([            
                     'table' => 'settings'                  
                 ])
                 ->log('Updated Icon');
 
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
