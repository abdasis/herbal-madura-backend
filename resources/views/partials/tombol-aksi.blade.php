<div>
    @if(!empty($edit))
        <a href="{{$edit}}" class="text-muted">
            <button class="btn btn-link btn-sm text-warning">
                <i class="fas fa-edit"></i>
            </button>
        </a>
    @endif

    @if(!empty($detail))
        <a href="{{$detail}}" class="text-muted">
            <button class="btn btn-link btn-sm">
                <i class="fas fa-eye"></i>
            </button>
        </a>
    @endif

    @if(!empty($verifikasi))
        <a href="{{$verifikasi}}" class="text-muted" wire:click.prevent="verifikasi({{$verifikasi}})">
            <button class="btn btn-link btn-sm text-success">
                <i class="fas fa-check-square"></i>
            </button>
        </a>
    @endif

    @if(!empty($hapus))
        <button wire:click="hapus({{$hapus}})" class="btn btn-link btn-sm text-danger">
            <i class="fas fa-trash-alt"></i>
        </button>
    @endif

</div>
