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
                                    <x-error-message error="nama_tanaman"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Latin</label>
                                    <input wire:model="nama_latin" type="text" class="form-control" name="" id="" placeholder="Nama Latin dari Tanaman">
                                    <x-error-message error="nama_latin"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="" wire:ignore>
                                <label for="">Bagian Tanaman</label>
                                <textarea name="" wire:model="bagian_tanaman" class="form-control" id="bagian_tanaman" cols="30" rows="10"></textarea>
                            </div>
                            <x-error-message error="nama_latin"/>
                        </div>

                        <div class="form-group">
                            <div wire:ignore>
                                <label for="">Manfaat</label>
                                <textarea name="" class="form-control" wire:model="manfaat" id="manfaat" cols="30" rows="10"></textarea>
                            </div>
                            <x-error-message error="manfaat"/>

                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Lingkungan Hidup Tanaman</label>
                            <input type="text" class="form-control" wire:model="lingkungan_hidup" name="" id="" placeholder="Masukan tempat lingkungan hidup">
                            <x-error-message error="lingkungan_hidup"/>

                        </div>
                        <div class="form-group">
                            <div  wire:ignore>
                                <label for="">Cara Pembuatan Obat</label>
                                <textarea name="" class="form-control" id="pembuatan" cols="30" rows="10"></textarea>
                            </div>
                            <x-error-message error="cara_pembuatan"/>

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
                                <x-error-message error="gambar_tanaman"/>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Status</label>
                            <select name="" id="" wire:model="status" class="custom-select">
                                <option value="">Pilih Status</option>
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                                <option value="Terverifikasi">Terverifikasi</option>
                            </select>
                            <x-error-message error="status"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark"><i class="fa fa fa-save mr-1"></i>Simpan Tanaman</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--<div class="card card-primary collapsed-card">
        <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="display: none;">
            The body of the card
        </div>
        <!-- /.card-body -->
    </div>--}}
</div>

@push('js')
    <script>
        tinymce.init({
            selector: 'textarea#bagian_tanaman',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('bagian_tanaman', editor.getContent());
                });
            },
        });

        tinymce.init({
            selector: 'textarea#manfaat',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('manfaat', editor.getContent());
                });
            },
        });

        tinymce.init({
            selector: 'textarea#pembuatan',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('cara_pembuatan', editor.getContent());
                });
            },
        });
    </script>
@endpush
