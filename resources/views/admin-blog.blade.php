@extends("layouts.main")
@push("title")
Blog
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/admin/"
                    },
                    "view_post_collection":{
                        "text":"View Post",
                        "url":"/admin/blog",
                        "active":"true"
                    },
                    "add_post":{
                        "text":"Add Post",
                        "url":"/admin/blog/create"
                    },
                    "logout":{
                        "text":"Logout",
                        "url":"/admin/logout"
                    }
                }' />
<div class="container-none flex flex-wrap p-2">
    @foreach($blog as $post)
    <x-admin-blog-card blogid="{{$post->blog_id}}" blogimg="{{$post->blog_img}}" blogtitle="{{$post->blog_title}}" blogcontent="{{$post->blog_content}}" />
    @endforeach
</div>
{{$blog->links('pagination::custom')}}
<x-footer />
<script src="{{ asset('js/modal.js') }}"></script>
@endsection