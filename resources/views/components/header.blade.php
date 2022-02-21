<section class="text-gray-600 body-font my-4 mx-4 header:m-0">
    <div class="md:container w-full mx-auto flex md:flex-row header:h-100 flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left header:mb-0  header:w-[90%] header:h-inherit md:mb-0 items-center text-center justify-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 header:text-white header-btn-sm:text-2xl">{{$headtext}}</h1>
            @if($subtext!="")
            <p class="mb-8 leading-relaxed header:text-white">{{$subtext}}</p>
            <div class="flex justify-center header-btn-sm:flex-col">
                <a class="inline-flex text-white border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 bg-purple-700 rounded text-lg" href="/blog">Get Started</a>
            </div>
            @endif
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 header:w-full header:absolute header:-z-10 header:h-inherit">
            <img class="object-cover object-center rounded header:w-full header:h-full header:brightness-50" alt="hero" src="{{ asset('img/header.jpg') }}">
        </div>
    </div>
</section>