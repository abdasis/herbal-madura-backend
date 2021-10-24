<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="blur"></div>
    <div class="row justify-content-center" style="min-height: 100vh">

        <div class="col-md-7">
            <h5 class="text-quicksand">Hasil Pencarian</h5>
            <div class="card border-0 shadow-sm rounded-0">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Tanaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jamu</a>
                        </li>

                    </ul>
                    <form>
                        <div class="form-group">
                            <input wire:model="keyword" type="text" class="form-control bg-white border border-warning" placeholder="Masukan nama tanaman yang dicari..." name="" id="">
                        </div>
                    </form>
                    <div class="alert alert-default-info info-hasil-text">
                        <small>Hasil pencarian yang ditemukan total <strong>{{!empty($tanaman) ? $tanaman->count() : 0}}</strong> data tanaman untuk keyword : <strong>{{$keyword}}</strong></small>
                    </div>
                    @if(empty($tanaman))
                        <div class="alert alert-secondary">
                            Mohon maaf tanaman yang anda cari belum tersedia di database kami, apakah mau menambahkan tentang tanaman ini di data kami?
                            <a href="#">Klik Disini</a>
                        </div>
                    @else
                        @forelse($tanaman as $tanaman_detail)
                            <div class="card shadow-none  mb-2">
                                <div class="card-body">
                                    <div class="card-title">
                                        <a href="{{route('tanaman.baca', $tanaman_detail->slug)}}">
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
                    @endif
                </div>
            </div>

        </div>
        <div class="col-md-3" style="margin-top: 34px">

            <div class="list-group shadow-sm list-group-flush">
                <a href="{{route('halaman-utama')}}" class="list-group-item list-group-item-action border-light">
                    <span>🏠</span> Halaman Utama
                </a>
                <a href="{{route('kontributor')}}" class="list-group-item list-group-item-action border-light">
                    <span>👨‍🏫</span> Para Kontributor
                </a>
                <a href="{{route('wiki.tambah-artikel')}}" class="list-group-item list-group-item-action border-light">
                    <span>📝</span> Buat Artikel
                </a>
                <a href="#" class="list-group-item list-group-item-action border-light">
                    <span>❔</span> Bantuan
                </a>
            </div>
        </div>
    </div>
</div>

@push('css')
    <style>
        .title-tanaman{
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 16px;
        }
        .diskripsi-singkat-tanaman{
            font-family: 'Quicksand', sans-serif;
            font-weight: 500;
            font-size: 13px;
        }
        .meta-artikel{
            font-family: 'Quicksand', sans-serif;
        }

        .info-hasil-text{
            font-family: 'Quicksand', sans-serif;
            font-size: 16px;
        }
    </style>
@endpush
