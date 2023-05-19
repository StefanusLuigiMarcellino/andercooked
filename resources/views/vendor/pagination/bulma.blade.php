@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">

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

            @endphp

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="pagination-link" disabled><<</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link"><<</a>
            @endif

            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $currentPage)
                    <li><a class="pagination-link is-current" style="background-color: #FD9303; border:none;">{{ $i }}</a></li>
                @else
                    <li><a href="{{ $paginator->url($i) }}" class="pagination-link">{{ $i }}</a></li>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link">>></a>
            @else
                <a class="pagination-link" disabled>>></a>
            @endif
        </ul>
    </nav>
@endif
