@if ($paginator->hasPages())
<div class="pagination">
    <div></div>
    <div class="pagination-button">
        @if (!$paginator->onFirstPage())
            <a type="button" href="{{ $paginator->previousPageUrl() }}#complaints-table">Previous</a>
        @endif
        @if ($paginator->hasMorePages())
            <a type="button" href="{{ $paginator->nextPageUrl() }}#complaints-table">Next</a>
        @endif
    </div>
</div>
@endif