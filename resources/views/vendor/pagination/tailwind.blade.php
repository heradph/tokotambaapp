@if ($paginator->hasPages())
    <div class="mt-5">
        <p class="text-xs text-gray-500 leading-5 dark:text-gray-400">
            {!! __('Showing') !!}
            @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            {!! __('of') !!}
            <span class="font-medium">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
    </div>

    <ol class="mt-8 flex justify-center gap-1 text-xs font-medium">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="opacity-50">
                <span class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Dots --}}
            @if (is_string($element))
                <li>
                    <span class="block size-8 text-center leading-8">{{ $element }}</span>
                </li>
            @endif

            {{-- Page Numbers --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="block size-8 rounded-sm border-black bg-[#32620e] text-center leading-8 text-white">
                            {{ $page }}
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}"
                                class="block size-8 rounded-sm border border-gray-100 text-center leading-8">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        @else
            <li class="opacity-50">
                <span class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </li>
        @endif
    </ol>

@endif
