<div class="btn-group gx-0">
    <a href="{{ route('wiki.sunting-artikel', $row->slug) }}" class="btn btn-link text-decoration-none text-warning">
        <i class="ri-pencil-fill"></i>
    </a>
    {{--
    <a class="btn btn-link text-decoration-none text-primary">
        <i class="ri-chat-1-line"></i>
    </a>
--}}

    <button wire:click.prevent="hapus({{$row->id}})" class="btn btn-link text-decoration-none text-danger">
        <i class="ri-delete-bin-2-line"></i>
    </button>

</div>
