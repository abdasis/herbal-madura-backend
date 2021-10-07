<div>
    {{-- In work, do what you enjoy. --}}
    <div class="jumbotron jumbotron-fluid" >
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="font-weight-bold">Solusi Kesehatan Terlengkap</h3>
                        <p class="lead">Chat dokter, kunjungi rumah sakit, beli obat, cek lab dan update informasi seputar kesehatan, semua bisa di Halodoc!</p>
                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <div class="card shadow-sm border-none p-1">
                                    <img src="https://www.halodoc.com/assets/img/home-v2/webp/chat-doctor-v2.webp" class="card-img-top mx-auto w-75 p-3" alt="">
                                    <div class="card-body p-0 text-center">
                                        <p class="text-bold">Konsultasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card shadow-sm border-none p-1">
                                    <img src="https://www.halodoc.com/assets/img/home-v2/webp/health-store-v2.webp" class="card-img-top mx-auto w-75 p-3" alt="">
                                    <div class="card-body p-0 text-center">
                                        <p class="text-bold">Toko Herbal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card shadow-sm border-none p-1">
                                    <img src="https://www.halodoc.com/assets/img/home-v2/webp/visit-hospital-v2.webp" class="card-img-top mx-auto w-75 p-3" alt="">
                                    <div class="card-body p-0 text-center">
                                        <p class="text-bold">Konsultasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card shadow-sm border-none p-1">
                                    <img src="https://www.halodoc.com/assets/img/home-v2/webp/donation.webp" class="card-img-top mx-auto w-75 p-3" alt="">
                                    <div class="card-body p-0 text-center">
                                        <p class="text-bold">Donasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="content-herbal">
            <div class="title-section">
                <h5 class="text-bold mb-3">
                    Tanaman Herbal
                </h5>
            </div>
            <div class="content-section">
                <div class="row">
                    @foreach($semua_tanaman as $tanaman)
                        <div class="col-md-3">
                            <div class="card shadow-sm border-light mb-2">
                                <img src="{{asset('gambar-tanaman') . '/' . $tanaman->gambar_tanaman}}" class="card-img-top rounded gambar-tanaman" alt="">
                                <div class="card-body">
                                    <h5 class="text-bold p-0 m-0">
                                        {{$tanaman->nama_tanaman}}
                                    </h5>

                                    <div class="meta d-flex flex-row justify-content-between">
                                        <span class="badge badge-danger">{{$tanaman->nama_latin}}</span>
                                        <span class="badge"><i class="fas fa-bookmark"></i></span>
                                    </div>

                                    <a href="{{route('tanaman.baca', $tanaman->slug)}}">
                                        <button class="btn btn-warning btn-sm btn-block text-light" style="margin-bottom: -30px; margin-top: 20px">Selengkapnya</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <section class="pakar bg-light py-5">
        <div class="container my-5">
            <div class="content-herbal">
                <div class="title-section">
                    <h5 class="text-bold mb-3">
                        Pakar Herbal Madura
                    </h5>
                </div>
                <div class="content-section">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card shadow-none d-flex flex-row border border-light p-2">
                                            <div class="px-0">
                                                <img src="{{asset('dist/img/user8-128x128.jpg')}}" class="elevation-1 w-75 img-circle" alt="">
                                            </div>
                                            <div class="w-auto my-auto">
                                                <h5 class="text-bold p-0 m-0">
                                                    dr. Abdul Aziz, SpOG
                                                </h5>
                                                <p class="text-muted p-0">
                                                    Spesialis Obat Herbal
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none d-flex flex-row border border-light p-2">
                                            <div class="px-0">
                                                <img src="{{asset('dist/img/user8-128x128.jpg')}}" class="elevation-1 w-75 img-circle" alt="">
                                            </div>
                                            <div class="w-auto my-auto">
                                                <h5 class="text-bold p-0 m-0">
                                                    dr. Abdul Aziz, SpOG
                                                </h5>
                                                <p class="text-muted p-0">
                                                    Spesialis Obat Herbal
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none d-flex flex-row border border-light p-2">
                                            <div class="px-0">
                                                <img src="{{asset('dist/img/user8-128x128.jpg')}}" class="elevation-1 w-75 img-circle" alt="">
                                            </div>
                                            <div class="w-auto my-auto">
                                                <h5 class="text-bold p-0 m-0">
                                                    dr. Abdul Aziz, SpOG
                                                </h5>
                                                <p class="text-muted p-0">
                                                    Spesialis Obat Herbal
                                                </p>
                                            </div>
                                        </div>
                                    </div> <div class="col-md-6">
                                        <div class="card shadow-none d-flex flex-row border border-light p-2">
                                            <div class="px-0">
                                                <img src="{{asset('dist/img/user8-128x128.jpg')}}" class="elevation-1 w-75 img-circle" alt="">
                                            </div>
                                            <div class="w-auto my-auto">
                                                <h5 class="text-bold p-0 m-0">
                                                    dr. Abdul Aziz, SpOG
                                                </h5>
                                                <p class="text-muted p-0">
                                                    Spesialis Obat Herbal
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-white shadow-none rounded-xl">
                                <div class="card-body">
                                    <div class="card-text">
                                        Semua konten Herbal Madura dibuat berdasarkan masukan dari pakar medis, spesialis, dan pekerja kesehatan profesional sesuai bidangnya masing-masing. Mereka memastikan seluruh konten ditulis secara akurat dari sisi medis dan non-medis. Mereka juga memastikan konten tersebut berasal dari sumber terpercaya, merujuk pada riset terkini dan teruji secara ilmiah.
                                    </div>
                                    <button class="btn btn-warning text-white btn-block mt-2">
                                        Lihat Semuanya
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('css')
    <style>
        .gambar-tanaman{
            min-height: 180px;
            max-height: 180px;
            width: auto;
            object-fit: cover;
        }
        .jumbotron.jumbotron-fluid {
            background: url(https://herbalmadura.my.id/dist/img/herbal-ayurvda.png);
            background-color: #F6F8FC;
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: contain;
        }

    </style>
@endpush
