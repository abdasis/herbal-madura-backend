<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit.prevent="simpan">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="nama_tanaman" placeholder="Masukan Nama Tanaman">
                        </div>
                        <div class="form-group">
                            <div class="editor-content" wire:ignore>
                                <textarea name="" class="form-control" wire:model="diskripsi" placeholder="Tulis lengkap diskripsi tanaman" id="manfaat" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Refrensi</label>
                            <textarea class="form-control" name="" wire:model="referensi" id="" cols="30" rows="5"></textarea>
                            <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak refrensi</small>
                        </div>

                        <div class="form-group">
                            <label for="">Pustaka</label>
                            <textarea class="form-control" name="" wire:model="pustaka" id="" cols="30" rows="5"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Latin</label>
                                    <input type="text" class="form-control" wire:model="nama_latin" placeholder="Masukan Nama Latin Tanaman">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Unggulan</label>
                                    <div class="custom-file">
                                        <input wire:model="gambar_tanaman" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Spesies</label>
                                    <input type="text" class="form-control" wire:model="jenis_spesies" placeholder="Jenis spesies">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status Tanaman</label>
                                    <select name="" wire:model="status" class="custom-select" id="">
                                        <option value="">Pilih status</option>
                                        <option value="Direview">Direview</option>
                                        <option value="Diterbitkan">Diterbitkan</option>
                                    </select>

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
            menubar: false,
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

    </script>
@endpush
