@extends("layouts.main")
@push("title")
Blog
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog",
                        "active":"true"
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
<div class="container-none flex flex-wrap p-2">
    @foreach($blog as $post)
    <x-blog-card blogid="{{$post->blog_id}}" blogimg="{{$post->blog_img}}" blogtitle="{{$post->blog_title}}" blogcontent="{{$post->blog_content}}" />
    @endforeach
</div>
{{$blog->links('pagination::custom')}}
<x-footer />
@endsection