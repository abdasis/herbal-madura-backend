<div>
    <div class="container" style="margin-top: 100px">
        <form wire:submit.prevent="simpan">
            <div class="row">
                <div class="col-md-9">
                    <div class="card border-0 shadow-none">
                        <div class="card-body border-bottom">
                            <div class="form-group mb-2">
                                <x-form-input id="nama_tanaman" :show-errors="false" autocomplete="off" type="text"
                                    name="nama_tanaman" class="form-control form-control-lg border-0 px-0"
                                    wire:model="nama_tanaman" autofocus placeholder="Masukan Nama Tanaman" />
                            </div>
                            <div class="form-group mb-2">
                                <div class="editor-content border-0 shadow-none" wire:ignore>
                                    <div id="manfaat">
                                        <h2>Tentang Tanaman</h2>
                                        <p></p>
                                        <h2>Kandungan</h2>
                                        <p></p>
                                        <h2>Manfaat</h2>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2>Referensi</h2>
                            <div class="form-group mb-2">
                                <div wire:ignore>
                                    <textarea class="form-control" name="" wire:model="referensi" id="referensi"></textarea>
                                    <small class="text-muted">Pisahkan dengan koma (,) jika memiliki banyak
                                        refrensi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-editor px-3">
                        <div class="form-group mb-2">
                            <label for="">Gambar Unggulan</label>
                            <div class="box-img text-end">
                                @if ($gambar_tanaman)
                                    <img src="{{ $gambar_tanaman->temporaryUrl() }}" class="img-fluid rounded-3"
                                        alt="">
                                    <button wire:click.prevent="resetImage" class="btn btn-danger btn-sm my-3">Hapus
                                    </button>
                                @else
                                    <x-form-input :show-errors="false" name="gambar_tanaman" wire:model="gambar_tanaman"
                                        type="file" />
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Nama Latin</label>
                            <x-form-input :show-errors="false" type="text" name="nama_latin" class="form-control"
                                wire:model="nama_latin" placeholder="Masukan Nama Latin Tanaman" />
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Jenis Spesies</label>
                            <x-form-input :show-errors="false" name="jenis_spesies" type="text" class="form-control"
                                wire:model="jenis_spesies" placeholder="Jenis spesies" />
                        </div>
                        <div class="d-grid my-3 text-center">
                            <button class="btn btn-warning d-flex align-items-center justify-content-center gap-1">
                                <i class="ri-save-3-line"></i>
                                Simpan
                            </button>
                        </div>
                        <div class="my-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ol class="mb-0 px-2">
                                        @foreach ($errors->all() as $error)
                                            <li class="fs-12 fw-normal">{{ $error }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('css')
    <style>
        h2 {
            font-family: 'Calistoga', cursive;
        }

        #manfaat {
            margin-top: 20px !important;
        }

        body {
            background: #ffffff !important;
        }

        #nama_tanaman {
            font-size: 48px;
            font-family: 'Calistoga', cursive;
            line-height: 70px;
        }

        #manfaat {
            background: #ffffff;
            min-height: calc(75vh - 60px);
            max-height: 100%;
            border: none;
            font-size: 18px;
            line-height: 28px;
        }

        div#manfaat:focus-visible {
            border: none !important;
        }

        .tox.tox-tinymce-inline .tox-editor-header {
            background-color: #fff;
            border: none !important;
            border-radius: 10px;
            box-shadow: none;
            overflow: hidden;
        }

        .tox-tinymce {
            border: none !important;
        }

        .mce-edit-focus {
            border: none !important;
        }

        #manfaat:focus,
        #manfaat:hover,
        #manfaat:active,
        #manfaat:focus-visible {
            outline: none !important;
        }

        .tox-editor-header {
            box-shadow: none !important;
            border-bottom: 1px solid #f7f7f7 !important;
        }
    </style>
@endpush
@push('js')
    <script>
        Livewire.onLoad(() => {
            tinymce.init({
                selector: '#manfaat',
                plugins: ['advlist', 'paste', 'autolink', 'lists', 'link', 'preview', 'wordcount',
                    'autosave',
                    'autoresize',
                    'code'
                ],
                paste_word_valid_elements: 'p,b,strong,i,em,h1,h2',
                placeholder: 'Tulis Tentang Tanaman',
                inline: true,
                menubar: false,
                autosave_ask_before_unload: true,
                toolbar_persist: true,
                fixed_toolbar_container: '#toolbar-tiny',
                autosave_interval: '20s',
                toolbar: ' | blocks formatselect | ' +
                    'bold italic |bullist | preview code',
                block_formats: 'Paragraph=p; Subheading=h2;',
                content_style: "body {font-family: Arial}",
                paste_as_text: false,
                setup: function(editor) {
                    editor.on('change', function(e) {
                        editor.save();
                        @this.
                        set('diskripsi', editor.getContent());
                    });
                },
            });

            tinymce.init({
                selector: 'textarea#referensi',
                toolbar: false,
                placeholder: 'Tulis referensi disini',
                menubar: false,
                height: 200,
                content_style: "body {font-family: Arial; }",
                setup: function(editor) {
                    editor.on('init change', function() {
                        editor.setContent(@this.referensi);
                    });
                    editor.on('change', function(e) {
                        @this.
                        set('referensi', editor.getContent());
                    });
                },
            });
        })
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
@endpush
