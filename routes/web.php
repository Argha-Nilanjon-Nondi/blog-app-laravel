<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
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


Route::get("/",[AdminController::class,"index"]);
Route::get("/login", [FormController::class, "index"]);
Route::post("/login", [FormController::class, "login"]);
Route::get("/blog",[PublicBlogController::class,"index"]);
Route::get("/blog/{id}", [PublicBlogController::class, "show"])->middleware(["validate-blog-id-format", "validate-blog-id-format"]);

Route::group(["prefix" => "admin","middleware"=>["validate-admin-session"]], function () {
    Route::resource("/",AdminController::class);
    Route::group(["prefix"=>"blog"],function (){
        Route::get("/",[AdminBlogController::class,"blogUI"]);
        Route::get("/{id}/update/", [AdminBlogController::class, "postUpdateUI"])->middleware(["validate-blog-id-format","validate-blog-id-format"]);
        Route::get("/{id}/delete", [AdminBlogController::class, "postDelete"])->middleware(["validate-blog-id-format","validate-blog-id-format"]);
    });
});

