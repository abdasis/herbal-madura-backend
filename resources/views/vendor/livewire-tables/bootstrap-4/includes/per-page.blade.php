@if ($paginationEnabled && $showPerPage)
    <div class="ml-0 ml-md-2">
        <select
            wire:model="perPage"
            id="perPage"
            class="custom-select shadow-none"
        >
            @foreach ($perPageAccepted as $item)
                <option value="{{ $item }}">{{ $item === -1 ? __('All') : $item }}</option>
            @endforeach
        </select>
    </div>
@endif
