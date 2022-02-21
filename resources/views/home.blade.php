@extends("layouts.main")
@push("title")
Home
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/",
                       "active":"true"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog"
                    },
                    "about":{
                        "text":"About",
                        "url":"/about"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"/contact"
                    }
                }' />
<x-header headtext="Argha Blog" subtext="We want to learn , create , innovate new things "></x-header>
<div class=" pl-2 mt-4">
    <h1 class="text-3xl header-btn-sm:text-2xl">Latest Posts</h1>
    <div class="mt-2 flex justify-content flex-wrap">
        @foreach($posts as $post)
        <x-blog-card blogid="{{$post->blog_id}}" blogimg="{{$post->blog_img}}" blogtitle="{{$post->blog_title}}" blogcontent="{{$post->blog_content}}" />
        @endforeach
    </div>
</div>

<x-footer />
@endsection