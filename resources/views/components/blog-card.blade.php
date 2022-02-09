    <div class="bg-white shadow-md border border-gray-200 rounded-lg blog-card-max:w-5/6 blog-card-min:w-[35rem]  blog-card-min:flex blog-card-min:flex-row mb-5 mx-auto m-1 ">
        <img class="rounded-t-lg blog-card-min:w-72" src="{{ asset('images') }}/{{ $blog_img }}" alt="{{ $blog_title }}">
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-xl tracking-tight mb-2">{{ $blog_title }}...</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3">{{ $blog_content }}</p>
            <a class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="{{ url('/blog') }}/{{ $blog_id }}">
                Read more
            </a>
        </div>
    </div>