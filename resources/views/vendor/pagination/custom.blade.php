@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between w-5/6 mx-auto mb-4">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span class="opacity-0">
    </span>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-purple-700 border  leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-white transition ease-in-out duration-150">
        {!! __('pagination.previous') !!}
    </a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-purple-700 border  leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-white transition ease-in-out duration-150">
        {!! __('pagination.next') !!}
    </a>
    @else
    <span class="opacity-0">
    </span>
    @endif
</nav>
@endif