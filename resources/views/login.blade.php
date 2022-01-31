@extends("layouts.main")
@push("title")
Login
@endpush
@section("content")
<div class="mx-auto mt-20 w-96 log:w-5/6">
    <form class="bg-white shadow-lg shadow-black rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{url('/login')}}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror" id="username" type="text" name="username" placeholder="Username">
            @error("username")
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" id="password" type="password" name="password" placeholder="******************">
            @error("password")
            <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
            <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
        </div>
        <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Sign In
            </button>
        </div>
    </form>
</div>
@endsection