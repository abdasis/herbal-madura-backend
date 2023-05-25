<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container-fluid" style="margin-top: 120px">
        <form wire:submit.prevent="simpan">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="card border-0 shadow-none">
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <x-form-input type="text" name="nama_tanaman"
                                    class="form-control form-control-lg border-0" wire:model="nama_tanaman"
                                    placeholder="Masukan Nama Tanaman" />
                            </div>
                            <div class="form-group mb-2">
                                <div class="editor-content border-0 shadow-none" wire:ignore>
                                    <textarea name="" class="form-control border-0 shadow-none" placeholder="Tulis lengkap diskripsi tanaman"
                                        id="manfaat" cols="30" rows="10">
                                    <h2>Deskripsi Tanaman</h2>
                                    <p>Tulis deskripsi tanaman disini</p>
                                    <h2>Zat yang Berkhasiat</h2>
                                    <p>Tulis Zat yang Berkhasiat disini</p>
                                    <h2>Manfaat</h2>
                                    <p>Tulis manfaat disini</p>

                                </textarea>
                                </div>
                                <x-error-message error="diskripsi" />
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="">Referensi</label>
                                <div class="" wire:ignore>
                                    <textarea class="form-control" name="" wire:model="referensi" id="referensi" cols="30" rows="5"></textarea>
                                    <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak
                                        refrensi</small>
                                </div>
                                <x-error-message error="refrensi" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-editor px-3">
                        <div class="form-group mb-2">
                            <label for="">Gambar Unggulan</label>
                            <x-form-input name="gambar_tanaman" wire:model="gambar_tanaman" type="file" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Nama Latin</label>
                            <x-form-input type="text" name="nama_latin" class="form-control" wire:model="nama_latin"
                                placeholder="Masukan Nama Latin Tanaman" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Kerajaan</label>
                            <input type="text" class="form-control" wire:model="kerajaan" placeholder="Kerajaan">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Ordo</label>
                            <input type="text" class="form-control" wire:model="ordo" placeholder="Ordo">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Famili</label>
                            <input type="text" class="form-control" wire:model="famili" placeholder="Famili">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Genus</label>
                            <input type="text" class="form-control" wire:model="genus" placeholder="Genus">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Jenis Spesies</label>
                            <input type="text" class="form-control" wire:model="jenis_spesies"
                                placeholder="Jenis spesies">
                        </div>
                        <div class="d-grid text-center">
                            <button class="btn btn-warning d-flex align-items-center justify-content-center gap-1">
                                <i class="ri-save-3-line"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('css')
    <style>
        #manfaat {
            margin-top: 20px !important;
        }

        .tox-editor-header {
            box-shadow: none !important;
            border-bottom: 1px solid #f7f7f7 !important;
        }
    </style>
@endpush
@push('js')
    <script>
        tinymce.init({
            selector: 'textarea#manfaat',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            menubar: false,
            height: 600,
            content_style: "body {font-family: Arial; }",

            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('diskripsi', editor.getContent());
                });
            },
        });

        tinymce.init({
            selector: 'textarea#referensi',
            placeholder: "Masukan referensi disini",
            toolbar: false,
            menubar: false,
            height: 200,
            content_style: "body {font-family: Arial; }",
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('referensi', editor.getContent());
                });
            },
        });
    </script>
@endpush
