<div>
    <form wire:submit.prevent="simpan">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-none border-0 ">
                    <div class="card-body">
                        <div class="card-title"><h5 class="text-bold mb-3">Tulis Artikel</h5></div>
                        <div class="form-group mb-2">
                            <x-form-input type="text" name="nama_tanaman" class="form-control" wire:model="nama_tanaman" placeholder="Masukan Nama Tanaman" />
                        </div>
                        <div class="form-group mb-2">
                            <div class="editor-content" wire:ignore>
                                <textarea name="" class="form-control" placeholder="Tulis lengkap diskripsi tanaman" id="manfaat" cols="30" rows="10">
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
                                <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak refrensi</small>
                            </div>
                            <x-error-message error="refrensi" />
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Nama Latin</label>
                                    <x-form-input type="text" name="nama_latin" class="form-control" wire:model="nama_latin" placeholder="Masukan Nama Latin Tanaman"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Gambar Unggulan</label>
                                    <x-form-input name="gambar_tanaman" wire:model="gambar_tanaman" type="file" />


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Kerajaan</label>
                                    <input type="text" class="form-control" wire:model="kerajaan" placeholder="Kerajaan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Ordo</label>
                                    <input type="text" class="form-control" wire:model="ordo" placeholder="Ordo">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Famili</label>
                                    <input type="text" class="form-control" wire:model="famili" placeholder="Famili">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Genus</label>
                                    <input type="text" class="form-control" wire:model="genus" placeholder="Genus">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Jenis Spesies</label>
                                    <input type="text" class="form-control" wire:model="jenis_spesies" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <label for="">Status Artikel</label>
                                    <x-form-select name="" wire:model.defer="status" class="custom-select" id="">
                                        <option value="">Pilih status</option>
                                        <option selected value="Direview">Direview</option>
                                        <option value="Diterbitkan">Diterbitkan</option>
                                    </x-form-select>
                                    <x-error-message error="status" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <button class="btn btn-warning">Simpan Tanaman</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('styles')
    <style>
        #manfaat{
            margin-top: 20px !important;
        }
        .tox-editor-header{
            box-shadow: none !important;
            border-bottom: 1px solid #f7f7f7 !important;
        }
    </style>
@endpush
@push('scripts')
    <script>
        tinymce.init({
            selector: 'textarea#manfaat',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            menubar: false,
            height: 600,
            content_style: "body {font-family: Arial; }",

            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set('diskripsi', editor.getContent());
                });
            },
        });

        tinymce.init({
            selector: 'textarea#referensi',
            toolbar: false,
            menubar: false,
            height: 200,
            content_style: "body {font-family: Arial; }",
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                    @this.set('referensi', editor.getContent());
                });
            },
        });

    </script>
@endpush
