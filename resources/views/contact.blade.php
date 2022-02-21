@extends("layouts.main")
@push("title")
Contact
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
                        "url":"/about"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"/contact",
                       "active":"true"
                    }
                }' />


<x-footer />
@endsection