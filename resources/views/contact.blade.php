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

@if(! $errors->any())
<x-banner headtext="Contact"></x-banner>
@endif
@isset($alertStatus)
<x-alert.success message="Message received"></x-alert.success>
@endisset
<section class="text-gray-600 body-font relative">
    <div class="px-5 py-24 mx-auto">
        <div class="mx-auto">
            <form class="flex flex-wrap -m-2" method="post" action="{{url('/contact')}}">
                @csrf
                <div class="p-2 w-1/2 contact-form-a:w-full">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" value="{{old('name')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                        @error("name")
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-1/2 contact-form-a:w-full">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error("email")
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="content" value="{{old('content')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-purple-500 focus:bg-white focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        @error("content")
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button class="flex mx-auto text-white bg-purple-700 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
<x-footer />
@endsection