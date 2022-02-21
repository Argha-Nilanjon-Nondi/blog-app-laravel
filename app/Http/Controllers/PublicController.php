<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class PublicController extends Controller
{
    public function home(){

        $data = Blog::select("blog_id", DB::raw("SUBSTRING(blog_title,1,50) as blog_title"), DB::raw("SUBSTRING(blog_content,1,80) as blog_content"), "blog_img")
            ->orderBy("created_at", "desc")
            ->paginate(2);
        return view("home", ["posts" => $data]);
    }

    public function about(){
        return view("about");
    }

    public function contact(){
        return view("contact");
    }
}
