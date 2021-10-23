<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-md-9">
                <div class="card shadow-none border-light border">
                    <div class="card-body">
                        <div class="card-title title-tanaman">
                            <h2>{{$tanaman->nama_tanaman}} (latin: {{$tanaman->nama_latin}})</h2>
                        </div>
                        <div class="card-text meta-artikel">
                            <span class="badge badge-light px-3 py-1">{{$tanaman->jenis_spesies}}</span>
                            <span class="badge badge-light px-3 py-1">{{\Carbon\Carbon::now()->format('d F Y H:s')}}</span>
                        </div>

                        <hr>
                        <div class="card-text diskripsi-tanaman">
                            {!! $tanaman->diskripsi_tanaman !!}
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-light border">
                    <div class="card-header border-light">
                        Referensi
                    </div>
                    <div class="card-body">
                        {{$tanaman->refrensi}}
                    </div>
                </div>
                <div class="card shadow-none border-light border">
                    <div class="card-header border-light">
                        Tentang Penulis
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row justify-content-start">
                                <div class="col-2">
                                    <img src="{{asset('dist/img/user.png')}}" class="img-circle img-thumbnail img-penulis" alt="">
                                </div>
                                <div class="col my-auto">
                                    <h5 class="title-penulis">Disusun Oleh</h5>
                                    <h2 class="nama-penulis">{{$tanaman->user->name}} <i class="fas fa-check-circle text-primary"></i> </h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-text diskripsi-penulis mt-2">
                            <p>
                                Artikel ini disusun oleh tim penyunting terlatih dan peneliti yang memastikan keakuratan dan kelengkapannya.

                                Tim Manajemen Konten wikiHow memantau hasil penyuntingan staf kami secara saksama untuk menjamin artikel yang berkualitas tinggi. Artikel ini telah dilihat 141.769 kali.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-pakar">
                    <div class="card shadow-none border-light border">
                        <div class="card-body">
                            <p>
                                Ditulis Oleh <b>{{Str::title($tanaman->user->name)}}</b> Diperbarui pada <strong>{{\Carbon\Carbon::parse($tanaman->updated_at)->format('d/m/Y')}}</strong>
                                dan Ditinjau oleh Pakar Herbal <strong>{{$tanaman->diverifikasi->name ?? 'None'}}</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="blogContents">
                    <p class="text-bold">Daftar Isi</p>
                    <ol style="padding-left: 10px" data-toc="div.diskripsi-tanaman" data-toc-headings="h2,h3,h4"></ol>
                </div>
                <div class="card riwayat-revisi shadow-none border-light border mt-3">
                    <div class="card-header border-bottom border-light">
                        <h5>Riwayat Revisi</h5>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('css')
    <style>
        .riwayat-revisi h5{
            font-weight: bold;
            font-family: 'Quicksand', sans-serif;
            font-size: 18px;
        }
        #blogContents{
            background: #f6f6f6;
            padding: 20px;
            border: 1px solid #f5f5f5;
            border-radius: 10px;
        }
        #blogContents a, ol, li{
            color: #0a001f;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            font-weight: 500;
        }
        .profile-pakar p{
            font-family: 'Quicksand', sans-serif;
            font-size: 12px;
        }
        .diskripsi-tanaman{
            font-family: 'Quicksand', sans-serif;
        }
        .title-tanaman, .title-tanaman p{
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }
        .meta-artikel{
            font-family: 'Quicksand', sans-serif;
        }

        .img-penulis{
            height: 70px;
            object-fit: scale-down;
        }
        .title-penulis{
            font-size: 12px;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }
        .nama-penulis{
            font-size: 18px;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }
        .diskripsi-penulis{
            font-family: 'Quicksand', sans-serif;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('dist/js/jquery.toc.min.js')}}"></script>
@endpush
