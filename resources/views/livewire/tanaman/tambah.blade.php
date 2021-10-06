<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit.prevent="simpan">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header border-light">
                        Tambah Data Tanaman
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Tanaman</label>
                                    <input wire:model="nama_tanaman" type="text" class="form-control" name="" id="" placeholder="Masukan Nama Tanaman">
                                    <
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Latin</label>
                                    <input wire:model="nama_latin" type="text" class="form-control" name="" id="" placeholder="Nama Latin dari Tanaman">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="">Bagian Tanaman</label>
                            <textarea wire:model="bagian_tanaman" name="" class="form-control" id="bagian" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="">Manfaat</label>
                            <textarea wire:model="manfaat" name="" class="form-control" id="manfaat" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Lingkungan Hidup Tanaman</label>
                            <input wire:model="lingkungan_hidup" type="text" class="form-control" name="" id="" placeholder="Nama Latin dari Tanaman">
                        </div>
                        <div class="form-group" wire:ignore>
                            <label for="">Cara Pembuatan Obat</label>
                            <textarea wire:model="cara_pembuatan" name="" class="form-control" id="pembuatan" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header border-light">
                        <div class="card-title">Data Tambahan</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="customFile">Gambar Tanaman</label>
                            <div class="custom-file">
                                <input wire:model="gambar_tanaman" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Status</label>
                            <select wire:model="status" name="" id="" class="custom-select">
                                <option value="">Pilih Status</option>
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                                <option value="Terverifikasi">Terverifikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark"><i class="fa fa fa-save mr-1"></i>Simpan Tanaman</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

@push('js')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endpush
