<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container my-5" style="margin-top: 100px !important;">
        <div class="row">
            <div class="col-md-9">
                <div class="card shadow-none">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{$tanaman->nama_tanaman}} (latin: {{$tanaman->nama_latin}})</h2>
                        </div>
                        <div class="card-text">
                            <span class="badge badge-light text-indigo p-2">{{$tanaman->jenis_spesies}}</span>
                        </div>

                        <hr>
                        <div class="card-text diskripsi-tanaman">
                            {!! $tanaman->diskripsi_tanaman !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-paker">
                    <div class="card shadow-none border-light border">
                        <div class="card-body">
                            Ditulis Oleh <b>{{Str::title($tanaman->dibuat_oleh)}}</b> Diperbarui pada <strong>{{\Carbon\Carbon::parse($tanaman->updated_at)->format('d/m/Y')}}</strong>
                            dan Ditinjau oleh Pakar Herbal <strong>{{$tanaman->diverifikasi_oleh ?? 'None'}}</strong>
                        </div>
                    </div>
                </div>
                <div id="blogContents">
                    <p class="text-bold">Daftar Isi</p>
                    <ol style="padding-left: 10px" data-toc="div.diskripsi-tanaman" data-toc-headings="h2,h3,h4"></ol>
                </div>
            </div>
        </div>
    </div>
</div>


@push('css')
    <style>
        #blogContents{
            background: #f6f6f6;
            padding: 20px;
            border: 1px solid #f5f5f5;
            border-radius: 10px;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('dist/js/jquery.toc.min.js')}}"></script>
@endpush
