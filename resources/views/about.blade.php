@extends("layouts.main")
@push("title")
About
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog"
                    },
                    "about":{
                        "text":"About",
                        "url":"/about",
                       "active":"true"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"/contact"
                    }
                }' />

<x-banner headtext="About Us"></x-banner>
<x-footer />
@endsection