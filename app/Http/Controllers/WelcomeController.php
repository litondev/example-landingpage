<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Setting,
    Question,
    Testimoni,
    Package
};
use App\Helpers\FormatSetting;

class WelcomeController extends Controller
{
    public function index(Request $request){
        FormatSetting::getAll();

        $questions = Question::all();
        $testimonis = Testimoni::all();    
        $packages = Package::with([
            "package_features" => function($q){
                $q->selecT("package_id","value");
            }
        ])->get();
    
        return view("welcome",[
            "questions" => $questions,
            "testimonis" => $testimonis,
            "packages" => $packages,
        ]);
    }

    public function about(Request $request){
        FormatSetting::getAll();

        return view('pages.about');
    }

    public function referral(Request $request){
        return view('pages.referral');
    }

    public function termsOfService(Request $request){
        return view("pages.terms-of-service");
    }
}
