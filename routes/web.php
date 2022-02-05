<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Models\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get("/get",function (){
//     $data=Login::where([
//         ["username","=","argha_nilanjon_nondi"],
//         ["password","=",hash("sha256","admin123")]
//     ]);

//     return var_dump($data->count());
// });

// Route::get("/create/{username}/{password}", function ($username,$password) {
//     $login = new Login();
//     $login->username = $username;
//     $login->password = hash("sha256", $password);
//     $login->save();
//     return "user is created";
// });
Route::get("/login", [FormController::class, "index"]);
Route::post("/login", [FormController::class, "login"]);
Route::get("/dashboard",function (){
return "you are my admin";
});
Route::get("/",[AdminController::class,"index"]);
Route::get("/blog",function (){
    return view("blog");
});
Route::get("/blog/id", function () {
    return view("blog-page");
});
