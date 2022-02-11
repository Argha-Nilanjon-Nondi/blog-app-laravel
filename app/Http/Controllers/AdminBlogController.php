<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{

    public function blogUI()
    {
        $data = Blog::select("blog_id",DB::raw("SUBSTRING(blog_title,1,50) as blog_title"), DB::raw("SUBSTRING(blog_content,1,80) as blog_content"), "blog_img")
        ->orderBy("updated_at", "desc")    
        ->paginate(5);
        return view("admin-blog", ["blog" => $data]);
    }

    public function postUpdateUI($id){
        $post = Blog::where([
            ["blog_id", "=", $id]
        ])->get();

        return view("admin-update-post", ["post" => $post[0]]);
    }

    public function postUpdate(Request $request,$id){
        $request->validate([
            "title" => ["required", "min:20"],
            "description" => ["required", "min:20"],
            "image" => [ "max:10000", "mimes:jpg,png,jpeg"]
        ]);

        $title = $request->title;
        $description = $request->description;
        $image = $request->file("image");

        $blog = Blog::find($id);
       
        $blog->blog_content = $description;
        $blog->blog_title = $title;
        if($image!=null){
            $path = Storage::putFile("public/img", $image);
            $blog->blog_img = basename($path);
        }
        
        $blog->save();

        return redirect("/admin/blog/");
    }

    public function postDelete($id){
        Blog::destroy([$id]);
        return redirect()->back();
    }

    public function postStore(Request $request){
        $request->validate([
            "title"=>["required","min:20"],
            "description"=>["required","min:20"],
            "image"=>["required","max:10000","mimes:jpg,png,jpeg"]
        ]);

        $title=$request->title;
        $description=$request->description;
        $image=$request->file("image");
        $path=Storage::putFile("public/img",$image);
        $blog = new Blog();
        $blog->blog_title = $title;
        $blog->blog_content = $description;
        $blog->blog_img=basename($path);
        $blog->save();
        
        return redirect("/admin/blog");
    }

    public function postCreateUI(){
        return view("admin-create-post");
    }
}
