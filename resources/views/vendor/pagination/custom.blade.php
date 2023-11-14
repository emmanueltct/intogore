@if ($paginator->hasPages())
    <div class="text-start py-4">
        <div class="custom-pagination">
        @if ($paginator->onFirstPage())
             <a href="#" class="prev" tabindex="-1" >Prevous</a>
        @else
            <a class="prev" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <a class="page-item disabled">{{ $element }}</a>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                            <a href="#" class="active">{{ $page }}</a>
                    @else
                     <a  href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
                <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            @else
                <a class="disabled next" href="#">Next</a>
            @endif
        </div>
     </div>
@endif