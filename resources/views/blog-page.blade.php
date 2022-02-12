@extends("layouts.main")
@push("title")
{{$post->blog_title}}
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"#"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog",
                        "active":"true"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"#"
                    }
                }' />
<x-blog-page blogimg="{{$post->blog_img}}" blogtitle="{{$post->blog_title}}" blogcontent="{{$post->blog_content}}" />
<x-footer />
@endsection