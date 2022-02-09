<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicBlogController extends Controller
{
    public function index()
    {
        $data = Blog::select("blog_id", DB::raw("SUBSTRING(blog_title,1,50) as blog_title"), DB::raw("SUBSTRING(blog_content,1,80) as blog_content"), "blog_img")
        ->orderBy("created_at", "desc")
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
