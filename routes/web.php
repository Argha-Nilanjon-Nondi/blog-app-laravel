<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PublicBlogController;

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

Route::get("/login", [FormController::class, "index"]);
Route::post("/login", [FormController::class, "login"]);
Route::get("/",[AdminController::class,"index"]);
Route::resource("/blog",PublicBlogController::class)->only(['index', 'show'
]);

Route::group(["prefix" => "admin"], function () {
    Route::get("/", function () {
        return view("blog");
    });
    Route::resource("/blog",BlogController::class);
});


