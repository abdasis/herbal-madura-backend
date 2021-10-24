<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="blur"></div>
    <form wire:submit.prevent="simpan">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-none border-0">
                    <div class="card-body">
                        <div class="card-title"><h5 class="text-bold mb-3">Tulis Artikel</h5></div>
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="nama_tanaman" placeholder="Masukan Nama Tanaman">
                            <x-error-message error="nama_tanaman" />
                        </div>
                        <div class="form-group">
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

                        <div class="form-group">
                            <label for="">Referensi</label>
                            <div class="" wire:ignore>
                                <textarea class="form-control" name="" wire:model="referensi" id="referensi" cols="30" rows="5"></textarea>
                                <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak refrensi</small>
                            </div>
                            <x-error-message error="refrensi" />
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Latin</label>
                                    <input type="text" class="form-control" wire:model="nama_latin" placeholder="Masukan Nama Latin Tanaman">
                                    <x-error-message error="nama_latin" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Unggulan</label>
                                    <div class="custom-file">
                                        <input wire:model="gambar_tanaman" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">{{ !empty($gambar_tanaman) ? $gambar_tanaman->getClientOriginalName() : 'Pilih gambar'}}</label>
                                    </div>
                                    <x-error-message error="gambar_tanaman" />

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kerajaan</label>
                                    <input type="text" class="form-control" wire:model="kerajaan" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ordo</label>
                                    <input type="text" class="form-control" wire:model="ordo" placeholder="Jenis spesies">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Famili</label>
                                    <input type="text" class="form-control" wire:model="famili" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Genus</label>
                                    <input type="text" class="form-control" wire:model="genus" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Spesies</label>
                                    <input type="text" class="form-control" wire:model="jenis_spesies" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status Artikel</label>
                                    <select name="" wire:model="status" disabled class="custom-select" id="">
                                        <option value="">Pilih status</option>
                                        <option selected value="Direview">Direview</option>
                                        <option value="Diterbitkan">Diterbitkan</option>
                                    </select>
                                    <x-error-message error="status" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-warning">Simpan Tanaman</button>
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
            selector: 'textarea#manfaat',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            menubar: true,
            height: 600,
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
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak list',
            toolbar_mode: 'floating',
            menubar: true,
            height: 300,
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
