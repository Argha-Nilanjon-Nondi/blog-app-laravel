<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicBlogController extends Controller
{
    public function index()
    {
        $data= Blog::select("blog_id", "blog_title", DB::raw("SUBSTRING(blog_content,1,100) as blog_content"), "blog_img")
        ->paginate(5);
        return view("blog",["blog"=>$data]);
    }

    public function show($id)
    {
        $post=Blog::where([
            ["blog_id","=",$id]
        ])->get();

        return view("blog-page",["post"=>$post[0]]);
    }

  
}
