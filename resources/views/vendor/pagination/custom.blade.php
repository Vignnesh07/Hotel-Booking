@if ($paginator->hasPages())
<div class="pagination">
    <div></div>
    <div class="pagination-button">
        @if (!$paginator->onFirstPage())
            <a type="button" href="{{ $paginator->previousPageUrl() }}#{{ $tableID }}">Previous</a>
        @endif
        @if ($paginator->hasMorePages())
            <a type="button" href="{{ $paginator->nextPageUrl() }}#{{ $tableID }}">Next</a>
        @endif
    </div>
</div>
@endif