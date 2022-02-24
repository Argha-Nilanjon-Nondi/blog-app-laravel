<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PublicBlogController;
use App\Http\Controllers\PublicController;

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


Route::get("/",[PublicController::class,"home"]);
Route::get("/about", [PublicController::class, "about"]);
Route::get("/contact", [PublicController::class, "view_contact"]);
Route::post("/contact", [PublicController::class, "store_contact"]);
Route::get("/login", [FormController::class, "index"]);
Route::post("/login", [FormController::class, "login"]);
Route::get("/blog",[PublicBlogController::class,"index"]);
Route::get("/blog/{id}", [PublicBlogController::class, "show"])->middleware(["validate-blog-id-format", "validate-blog-id-format"]);

Route::group(["prefix" => "admin","middleware"=>["validate-admin-session"]], function () {
    Route::get("/logout",[AdminController::class,"logout"]);
    Route::get("/",[AdminController::class,"home"]);
    Route::group(["prefix"=>"blog"],function (){
        Route::get("/",[AdminBlogController::class,"blogUI"]);
        Route::get("/create",[AdminBlogController::class,"postCreateUI"]);
        Route::post("/create", [AdminBlogController::class, "postStore"]);
        Route::get("/{id}/update/", [AdminBlogController::class, "postUpdateUI"])->middleware(["validate-blog-id-format","validate-blog-id-format"]);
        Route::post("/{id}/update/", [AdminBlogController::class, "postUpdate"])->middleware(["validate-blog-id-format", "validate-blog-id-format"]);
        Route::get("/{id}/delete", [AdminBlogController::class, "postDelete"])->middleware(["validate-blog-id-format","validate-blog-id-format"]);
    });
});


