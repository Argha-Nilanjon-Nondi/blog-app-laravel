<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Contact;
use App\Rules\NiceName;

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

    public function view_contact(){
        return view("contact");
    }

    public function store_contact(Request $request){
        $request->validate([
            "name" => ["required", "min:5",new NiceName],
            "email" => ["required", "email"],
            "content"=>["required", "alpha_dash"]
        ]);

        $name=$request->name;
        $email=$request->email;
        $content=$request->content;

        $contact=new Contact();
        $contact->contact_name=$name;
        $contact->contact_email=$email;
        $contact->contact_content=$content;
        $contact->save();

        return view("contact",["alertStatus"=>true]);
    }
}
