<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header border-light">
                    Tambah Data Tanaman
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Tanaman</label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Masukan Nama Tanaman">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Latin</label>
                                    <input type="text" class="form-control" name="" id="" placeholder="Nama Latin dari Tanaman">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Bagian Tanaman</label>
                            <textarea name="" class="form-control" id="bagian" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Manfaat</label>
                            <textarea name="" class="form-control" id="manfaat" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Lingkungan Hidup Tanaman</label>
                            <input type="text" class="form-control" name="" id="" placeholder="Nama Latin dari Tanaman">
                        </div>
                        <div class="form-group">
                            <label for="">Cara Pembuatan Obat</label>
                            <textarea name="" class="form-control" id="pembuatan" cols="30" rows="10"></textarea>
                        </div>
                    </form>
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
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Status</label>
                        <select name="" id="" class="custom-select">
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
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endpush
