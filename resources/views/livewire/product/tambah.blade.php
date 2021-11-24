<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card shadow-sm">
        <div class="card-header bg-white border-bottom border-light">
            <h5>Tambah Produk Baru</h5>
        </div>

        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row justify-content-around">
                    <div class="col-md-9 border border-light p-3">
                        <div class="form-group">
                            <label for="" >Nama Produk</label>
                            <input type="text" class="form-control" wire:model="nama_produk" name="" id="" placeholder="Masukan nama produk">
                            <x-error-message error="nama_produk" />
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Produk</label>
                            <div class="" wire:ignore>
                                <textarea name="" class="form-control" wire:model="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi produk"></textarea>
                            </div>
                            <x-error-message error="deskripsi" />
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" >Produsen</label>
                                <input type="text" class="form-control" wire:model="produsen" name="" id="" placeholder="Nama produsen pembuat">
                                <x-error-message error="produsen" />
                            </div>
                            <div class="col-md-4">
                                <label for="" >Link Toko Online</label>
                                <input type="text" class="form-control" wire:model="link_produk" name="" id="" placeholder="https://">
                                <x-error-message error="link" />
                            </div>
                            <div class="col-md-4">
                                <label for="" >Gambar Product</label>
                                <div class="custom-file">
                                    <input wire:model="gambar_produk" type="file" class="custom-file-input" id="gambar_produk">
                                    <label class="custom-file-label" for="gambar_produk">{{'Pilih Gambar'}}</label>
                                </div>
                                <x-error-message error="gambar_produk" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group border-light border p-3 d-flex flex-column">
                            <label for="">Option</label>
                            <button class="btn btn-primary mb-2">
                                <i class="fas fa-save"></i>
                                Simpan
                            </button>
                            <div class="btn btn btn-danger">
                                Batal
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#deskripsi',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            menubar: true,
            height: 400,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });

                editor.on('change', function (e) {
                @this.set('deskripsi', editor.getContent());
                });
            },
        });

        $('#deskripsi').on('change', function (){
            @this.set('deskripsi', $(this).val())
        })
    </script>
@endpush
