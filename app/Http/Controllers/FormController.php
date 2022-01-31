<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
