<div>
    <div class="header-post border-bottom border-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{$tanaman->nama_tanaman}}</h1>
                    <ul class="list-unstyled p-0 m-0">
                        <li class="d-flex meta-artikel align-items-center gap-2 p-0 m-0">
                            <i class="ri-calendar-2-line"></i>
                            Diterbitkan pada {{$tanaman->created_at->format('d F Y')}}
                        </li>
                        <li class="d-flex meta-artikel align-items-center gap-2 p-0 m-0">
                            <i class="ri-calendar-2-line"></i>
                            Ditulis Oleh pada {{$tanaman->created_at->format('d F Y')}}
                        </li>
                        <li class="d-flex meta-artikel align-items-center gap-2 p-0 m-0">
                            <i class="ri-calendar-2-line"></i>
                            Nama Latin {{$tanaman->created_at->format('d F Y')}}
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-4">
                <div>
                    <h5 class="text-bold text-quicksand">DAFTAR ISI</h5>
                    <ol style="padding-left: 10px" data-toc="div.diskripsi-tanaman" data-toc-headings="h2,h3,h4"></ol>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card box-content">
                    <div class="card-body bg-transparent">
                        <div class="card-text meta-artikel">

                        </div>
                        <div class="card-text diskripsi-tanaman">
                            {!! $tanaman->diskripsi_tanaman !!}
                        </div>
                        <div class="biografi-penulis">
                            <div class="card-text">
                                <div class="row justify-content-center">
                                    <div class="col d-grid text-center">
                                        <img
                                            src="{{ file_exists('upload' . '/' . $tanaman->user->profile_photo_path) ? asset('upload' . '/' . $tanaman->user->profile_photo_path) : asset('assets/images/avatar.jpg')}}"
                                            class="rounded-circle img-penulis mx-auto">
                                        <h5 class="title-penulis">Disusun Oleh</h5>
                                        <h2 class="nama-penulis">{{$tanaman->user->name ?? 'None'}} <i
                                                class="fas fa-check-circle text-primary"></i></h2>
                                        <div class="card-text diskripsi-penulis mt-2">
                                            <p>
                                                Artikel ini disusun oleh tim penyunting terlatih dan peneliti yang memastikan keakuratan
                                                dan kelengkapannya.

                                                Tim Manajemen Konten wikiHow memantau hasil penyuntingan staf kami secara saksama untuk
                                                menjamin artikel yang berkualitas tinggi. Artikel ini telah dilihat 141.769 kali.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none border-light border">
                    <div class="card-header border-light">
                        Referensi
                    </div>
                    <div class="card-body">
                        {!! $tanaman->refrensi !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile-pakar">
                    <div class="card shadow-none border-light border">
                        <div class="card-body">
                            <p>
                                Ditulis Oleh <b>{{Str::title($tanaman->user->name ?? 'None')}}</b> Diperbarui pada
                                <strong>{{\Carbon\Carbon::parse($tanaman->updated_at)->format('d/m/Y')}}</strong>
                                dan Ditinjau oleh Pakar Herbal
                                <strong>{{$tanaman->diverifikasi->name ?? 'None'}}</strong>
                            </p>
                        </div>
                    </div>
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
        body{
            background-color: #F8FAFC !important;
        }

        .header-post{
            margin-top: 50px;
            min-height: 400px;
            background: rgb(245,253,255);
            background: linear-gradient(90deg, rgba(245,253,255,1) 0%, rgba(255,255,255,1) 100%);
            max-width: 100%;
            align-items: center;
            display: flex;
            z-index: 999;
        }
        .header-post h1{
            font-family: 'Inter', sans-serif;
            color: #0F172A;
        }

        .box-content{
            background: #fff !important;
            position: relative;
            top: -15px;
            z-index: -1;
            padding: 70px 20px;
        }

        .biografi-penulis{
            margin-top: 70px;
        }



        .riwayat-revisi h5 {
            font-weight: bold;
            font-family: 'Quicksand', sans-serif;
            font-size: 18px;
        }

        #blogContents {
            background: #f6f6f6;
            padding: 20px;
            border: 1px solid #f5f5f5;
            border-radius: 10px;
        }

        #blogContents a, ol, li {
            color: #cd6133;
            font-family: 'Quicksand', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin-left: 10px;
        }

        .profile-pakar p {
            font-family: 'Quicksand', sans-serif;
            font-size: 12px;
        }

        .diskripsi-tanaman {
            font-family: 'Quicksand', sans-serif;
        }

        .title-tanaman, .title-tanaman p {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }

        .meta-artikel {
            font-family: 'Quicksand', sans-serif;
        }

        .img-penulis {
            height: 70px;
            object-fit: scale-down;
        }

        .title-penulis {
            font-size: 12px;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }

        .nama-penulis {
            font-size: 18px;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }

        .diskripsi-penulis {
            font-family: 'Quicksand', sans-serif;
        }

        ol a {
            color: #cd6133;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('dist/js/jquery.toc.min.js')}}"></script>
@endpush
