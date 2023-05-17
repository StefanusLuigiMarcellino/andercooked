@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" disabled>Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">Previous</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next">Next</a>
        @else
            <a class="pagination-next" disabled>Next</a>
        @endif

        <ul class="pagination-list">
            {{-- Pagination Elements --}}
            @php
                $currentPage = $paginator->currentPage();
                $lastPage = $paginator->lastPage();
                $linkCount = 7;

                // Determine the start and end page numbers
                $start = max(1, $currentPage - floor($linkCount / 2));
                $end = min($start + $linkCount - 1, $lastPage);

                // Adjust the start page if it exceeds the limit
                if ($end - $start < $linkCount - 1) {
                    $start = max(1, $end - $linkCount + 1);
                }

                // for ($i=1; $i < $lastPage; $i++) {
                //     $start = max(1, $currentPage - 1);
                //     $end = min($start + $linkCount - 1, $lastPage);

                //     if ($end - $start < $linkCount - 1) {
                //         $start = max(1, $end - $linkCount + 1);
                //     }
                // }
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $currentPage)
                    <li><a class="pagination-link is-current">{{ $i }}</a></li>
                @else
                    <li><a href="{{ $paginator->url($i) }}" class="pagination-link">{{ $i }}</a></li>
                @endif
            @endfor
        </ul>
    </nav>
@endif
