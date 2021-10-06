<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit.prevent="simpan">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" wire:model="nama_tanaman" placeholder="Masukan Nama Tanaman">
                            <x-error-message error="nama_tanaman" />
                        </div>
                        <div class="form-group">
                            <div class="editor-content" wire:ignore>
                                <textarea name="" class="form-control" placeholder="Tulis lengkap diskripsi tanaman" id="manfaat" cols="30" rows="10"></textarea>
                            </div>
                            <x-error-message error="manfaat_tanaman" />
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Refrensi</label>
                            <textarea class="form-control" name="" wire:model="referensi" id="" cols="30" rows="5"></textarea>
                            <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak refrensi</small>
                            <x-error-message error="refrensi" />
                        </div>

                        <div class="form-group">
                            <label for="">Pustaka</label>
                            <textarea class="form-control" name="" wire:model="pustaka" id="" cols="30" rows="5"></textarea>
                            <x-error-message error="pustaka" />

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
                                        <label class="custom-file-label" for="customFile">{{ !empty($gambar_tanaman) ? $gambar_tanaman->temporaryUrl() : 'Pilih gambar'}}</label>
                                    </div>
                                    <x-error-message error="gambar_tanaman" />

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
    {{--<div class="col-md-8">
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
    </div>--}}
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
