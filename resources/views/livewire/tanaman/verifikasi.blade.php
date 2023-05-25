<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card border-0 p-3 shadow-sm">
        <div class="card-header border-0 bg-white">
            <h3>{{ $tanaman->nama_tanaman }}</h3>
            <p>Ditulis Oleh: {{ $tanaman->user->name }}</p>
            <p>{{ $tanaman->user->biodata->biodata ?? 'belum ada biodata' }}</p>
        </div>
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-7 deskripsi-tanaman" style="font-family: 'Inter', sans-serif">
                    {!! $tanaman->diskripsi_tanaman !!}
                </div>
                <div class="col-4 border-start border-light border-0">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group my-3">
                            <x-form-select name="status" wire:model="status" label="Status">
                                <option value="">Pilih Status</option>
                                <option value="Diterbitkan">Diterbitkan</option>
                                <option value="Direview">Direview</option>
                                <option value="Ditolak">Ditolak</option>
                            </x-form-select>
                        </div>
                        <div class="form-group my-3">
                            <x-form-textarea wire:model="catatan" rows="8" name="catatan"
                                label="Catatan"></x-form-textarea>
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-primary d-flex align-items-center gap-1">
                                <i class="ri-save-3-fill"></i>
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
    <style>
        .deskripsi-tanaman p {
            font-family: 'Inter', sans-serif !important;
        }
    </style>
@endpush
