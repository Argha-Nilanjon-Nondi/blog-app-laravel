<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class AdminBlogController extends Controller
{

    public function blogUI()
    {
        $data = Blog::select("blog_id", "blog_title", DB::raw("SUBSTRING(blog_content,1,80) as blog_content"), "blog_img")
            ->paginate(5);
        return view("admin-blog", ["blog" => $data]);
    }

    public function postUpdateUI($id){
        return $id;
    }
}
