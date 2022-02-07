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
    <x-admin-blog-card />
</div>
<x-footer />
<script src="{{ asset('js/modal.js') }}"></script>
@endsection