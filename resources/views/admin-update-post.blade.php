@extends("layouts.main")
@push("title")
Update Post
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/admin/"
                    },
                    "view_post_collection":{
                        "text":"View Post",
                        "url":"/admin/blog"
                    },
                    "add_post":{
                        "text":"Add Post",
                        "url":"/admin/blog/create"
                    },
                    "update_post":{
                        "text":"Update Post",
                        "url":"#",
                        "active":"true"
                    },
                    "logout":{
                        "text":"Logout",
                        "url":"/admin/logout"
                    }
                }' />

<div class="w-5/6 mx-auto mt-4">
    <div>

        <form action="{{url('/admin/blog')}}/{{ $post->blog_id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 sm:px-0">
                <h3 class="text-2xl font-medium leading-6 text-gray-900">Update Post</h3>
            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700"> Title </label>
                        <div class="mt-1">
                            <textarea id="about" name="title" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-purple-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Type the title..." value="{{ old('title') }}">{{ $post->blog_title }}</textarea>
                            @error("title")
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700"> Description </label>
                        <div class="mt-1">
                            <textarea name="description" rows="10" class="shadow-sm focus:ring-indigo-500 focus:border-purple-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Type the description..." value="{{ old('description') }}">{{ $post->blog_content }}</textarea>
                            @error("description")
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mt-1 flex rounded-md shadow-sm border border-r-0 border-gray-300">
                            <span class="inline-flex items-center px-3 rounded-l-md  bg-gray-50 text-gray-500 text-sm"> Image</span>
                            <input type="file" name="image" class="focus:ring-indigo-500 focus:border-purple-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="{{ $post->blog_img }}">
                        </div>
                        @error("image")
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-700 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
                </div>
            </div>
        </form>

    </div>


</div>

<x-footer />

@endsection