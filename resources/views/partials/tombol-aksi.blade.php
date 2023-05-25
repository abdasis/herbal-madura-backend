<div>
    <ul class="list-inline hstack mb-0 gap-2">
        @if (!empty($edit))
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                title="Edit">
                <a href="{{ $edit }}" class="text-muted d-inline-block">
                    <i class="ri-edit-line"></i>
                </a>
            </li>
        @endif

        @if (!empty($verifikasi))
            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                title="Verifikasi">
                <a href="{{ route('tanaman.verifikasi', $verifikasi) }}" class="text-muted d-inline-block">
                    <i class="ri-check-double-line text-success"></i>
                </a>
            </li>
        @endif

        @if (!empty($hapus))
            <li wire:click="hapus({{ $hapus }})" class="list-inline-item edit" data-bs-toggle="tooltip"
                data-bs-trigger="hover" data-bs-placement="top" title="Hapus">
                <a href="javascript:void(0);" class="text-muted d-inline-block">
                    <i class="ri-delete-bin-5-line text-danger"></i>
                </a>
            </li>
        @endif
    </ul>
</div>
