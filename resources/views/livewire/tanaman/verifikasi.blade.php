<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card shadow-sm border-0 p-3">
        <div class="card-header bg-white border-0">
            <h3>{{$tanaman->nama_tanaman}}</h3>
            <p>Ditulis Oleh: {{$tanaman->user->name}}</p>
            <p>{{$tanaman->user->biodata->biodata ?? 'belum diisi'}}</p>
        </div>
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-md-7 ctext-content ">
                    {!! $tanaman->diskripsi_tanaman !!}
                </div>
                <div class="col-4 border-0 border-start border-light">
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
                            <x-form-textarea wire:model="catatan" rows="8" name="catatan" label="Catatan"></x-form-textarea>
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
