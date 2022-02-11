<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request){
        $request->validate([
            "username"=>["required","alpha_dash","min:5"],
            "password"=>["required","alpha_dash","min:5"]
        ]);

        $data = Login::where([
            ["username", "=", $request->username],
            ["password", "=", hash("sha256",$request->password)]
        ]);

        if($data->count()==0){
            return view("login",["invalid"=>true]);
        }

        $request->session()->put("is_verified",true);

        return redirect("/admin/blog");
    
    }
}
