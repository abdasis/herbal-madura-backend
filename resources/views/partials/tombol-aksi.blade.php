@if(!empty($edit))
    <a href="{{$edit}}" class="text-muted">
        <button class="btn btn-link btn-sm text-warning">
            <i class="fas fa-edit"></i>
        </button>
    </a>
@endif

@if(!empty($edit))
    <a href="{{$detail}}" class="text-muted">
        <button class="btn btn-link btn-sm">
            <i class="fas fa-eye"></i>
        </button>
    </a>
@endif

@if(!empty($hapus))
    <a href="#" class="text-danger">
        <button class="btn btn-link btn-sm text-danger">
            <i class="fas fa-trash-alt"></i>

        </button>
    </a>
@endif
