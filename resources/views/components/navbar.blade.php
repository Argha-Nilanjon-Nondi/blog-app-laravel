@php
$data = json_decode($json, true);
$menu = "";
foreach (array_keys($data) as $key) {
    $text = $data[$key]["text"];
    $url = $data[$key]["url"];
    if (array_key_exists("active", $data[$key])) {
        $menu = $menu . '<a href="' . $url . '" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">' . $text . '</a>';
    } else {
        $menu = $menu . '<a href="' . $url . '" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">' . $text . '</a>';
    }
}
@endphp
<nav class="bg-purple-700">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-btn">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <i class="block h-8 w-auto fas fa-blog text-white text-4xl"></i>
                    <h1 class="text-white text-xl font-black ml-4 navbar-head-text:hidden h-8 w-auto">Argha Blog</h1>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        @php
                        echo $menu ;
                        @endphp
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu-collection">
        <div class="px-2 pt-2 pb-3 space-y-1 flex flex-col">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            @php
            echo $menu ;
            @endphp
        </div>
    </div>

</nav>
<script src="{{ asset('js/navbar.js') }}"></script>