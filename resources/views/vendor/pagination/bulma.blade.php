<head>
    <link rel="stylesheet" href="/css/templates/pagination.css">
</head>

@if ($paginator->hasPages())
    <nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">
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

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <a class="pagination-link current" disabled>
                <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.737172 5.73519C0.314276 6.15821 0.314276 6.84518 0.737172 7.26819L6.15025 12.6827C6.57315 13.1058 7.25993 13.1058 7.68283 12.6827C8.10572 12.2597 8.10572 11.5728 7.68283 11.1497L3.03435 6.5L7.67944 1.85025C8.10234 1.42724 8.10234 0.740271 7.67944 0.317259C7.25655 -0.105753 6.56976 -0.105753 6.14687 0.317259L0.733789 5.73181L0.737172 5.73519Z" fill="#4B8077"/>
                </svg>                    
            </a>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link current">
                <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.737172 5.73519C0.314276 6.15821 0.314276 6.84518 0.737172 7.26819L6.15025 12.6827C6.57315 13.1058 7.25993 13.1058 7.68283 12.6827C8.10572 12.2597 8.10572 11.5728 7.68283 11.1497L3.03435 6.5L7.67944 1.85025C8.10234 1.42724 8.10234 0.740271 7.67944 0.317259C7.25655 -0.105753 6.56976 -0.105753 6.14687 0.317259L0.733789 5.73181L0.737172 5.73519Z" fill="#4B8077"/>
                </svg>    
            </a>
            @endif

            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $currentPage)
                    <li><a class="pagination-link is-current ml-1 mr-1 active">{{ $i }}</a></li>
                @else
                    <li><a href="{{ $paginator->url($i) }}" class="pagination-link ml-1 mr-1 current">{{ $i }}</a></li>
                @endif
            @endfor

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link current">
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.2648 5.73519C7.68782 6.15821 7.68782 6.84518 7.2648 7.26819L1.85025 12.6827C1.42724 13.1058 0.740271 13.1058 0.317259 12.6827C-0.105753 12.2597 -0.105753 11.5728 0.317259 11.1497L4.967 6.5L0.320643 1.85025C-0.102369 1.42724 -0.102369 0.740271 0.320643 0.317259C0.743655 -0.105753 1.43063 -0.105753 1.85364 0.317259L7.26819 5.73181L7.2648 5.73519Z" fill="#4B8077"/>
                    </svg>    
                </a>
            @else
                <a class="pagination-link" disabled>
                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.2648 5.73519C7.68782 6.15821 7.68782 6.84518 7.2648 7.26819L1.85025 12.6827C1.42724 13.1058 0.740271 13.1058 0.317259 12.6827C-0.105753 12.2597 -0.105753 11.5728 0.317259 11.1497L4.967 6.5L0.320643 1.85025C-0.102369 1.42724 -0.102369 0.740271 0.320643 0.317259C0.743655 -0.105753 1.43063 -0.105753 1.85364 0.317259L7.26819 5.73181L7.2648 5.73519Z" fill="#4B8077"/>
                    </svg>
                </a>
            @endif
        </ul>
    </nav>
@endif
