<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/login");
    }

    public function home(){
        return view("admin-home"); 
    }
}
