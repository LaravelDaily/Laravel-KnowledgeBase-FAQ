@if ($paginator->hasPages())
    <nav class="text-center">
        <ul class="pagination">
            @if (!$paginator->onFirstPage())
                <li class="enabled">
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">
                            <i class="fa fa-arrow-circle-left"></i> @lang('pagination.previous')</span>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page">
                                <a>{{ $page }}
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        @else
                            <li class="enabled"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if($paginator->hasMorePages())
                <li class="enabled">
                    <a href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">@lang('pagination.next')
                            <i class="fa fa-arrow-circle-right"></i>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif