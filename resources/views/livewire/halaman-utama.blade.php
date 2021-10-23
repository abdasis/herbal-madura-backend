<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="jumbotron rounded-lg bg-gray-light border">
        <div class="container">
            <h1 class="display-4 text-bold">Ensiklopedia Herbal</h1>
            <p class="lead">Selamat datang di Ensiklopedia Herbal situs yang menyediakan tentang detail dan khasiat dari tanaman herbal</p>
        </div>
    </div>

    <div class="section">
        <h5 class="text-bold text-quicksand mb-4">Jelajahi Artikel Kami</h5>
        <div class="content-wrap">
            @forelse($semua_tanaman as $tanaman_detail)
                <div class="card shadow-none border-light border mb-2">
                    <div class="card-body">
                        <div class="card-title">
                            <a class="text-orange" href="{{route('tanaman.baca', $tanaman_detail->slug)}}">
                                <h5 class="title-tanaman">{{$tanaman_detail->nama_tanaman}} (Latin: {{$tanaman_detail->nama_latin}})</h5>
                            </a>
                        </div>
                        <div class="card-text diskripsi-singkat-tanaman">
                            <p>
                                {!! Str::limit(strip_tags($tanaman_detail->diskripsi_tanaman), 250) !!}
                            </p>
                        </div>
                        <div class="card-text">
                            <div class="meta-artikel">
                                <div class="badge badge-light p-1">12 Agustus 2021</div>
                                <div class="badge badge-light p-1">Ditinjau oleh: <span>{{$tanaman_detail->diverifikasi->name ?? 'Belum diverifikasi'}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-secondary">
                    Mohon maaf tanaman yang anda cari belum tersedia di database kami, apakah mau menambahkan tentang tanaman ini di data kami?
                    <a href="#">Klik Disini</a>
                </div>
            @endforelse
        </div>
    </div>

</div>
