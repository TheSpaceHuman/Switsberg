<div class="pagination-wrapper">
    <nav aria-label="Page navigation">
        @if ($paginator->hasPages())
            <ul class="pagination" role="navigation">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li aria-disabled="true" aria-label="Previous">
                        <a class="hidden-control">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                            <span aria-hidden="false">«</span>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                            <span aria-hidden="false">»</span>
                        </a>
                    </li>
                @else
                    <li aria-disabled="true" aria-label="Next">
                        <a class="hidden-control">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                @endif
            </ul>
        @endif
    </nav>
</div>