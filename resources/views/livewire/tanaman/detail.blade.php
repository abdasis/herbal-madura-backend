<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container py-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-title mb-4">
                    <h1>{{$tanaman->nama_tanaman}}</h1>
                </div>
                <div class="card-text diskripsi-tanaman">
                    {!! $tanaman->diskripsi_tanaman !!}
                </div>
                <div class="alert alert-warning">
                    Arsip tanaman ini ditulis oleh {{$tanaman->user->name}} pada {{\Carbon\Carbon::parse($tanaman->created_at)->format('d-m-Y H:i')}}
                </div>
            </div>
        </div>
    </div>
</div>

@push('css')
    <style>
        #blogContents{
            background: #f6f6f6;
            float: right;
            padding: 20px;
            border: 1px solid #f5f5f5;
            border-radius: 10px;
            margin-left: 20px;
        }
    </style>
@endpush
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
        </script>
        <script src="{{asset('dist/js/jquery.toc.min.js')}}"></script>
@endpush
