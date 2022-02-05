@extends("layouts.main")
@push("title")
Blog
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/home"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog",
                        "active":"true"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"/contact"
                    }
                }' />
<div class="container-none flex flex-wrap p-2">
    <x-blog-card />
    <x-blog-card />
    <x-blog-card />
</div>
<x-footer/>
@endsection