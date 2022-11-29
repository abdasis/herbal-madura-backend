<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="blur"></div>
    <div class="container mt-5">
        <div class="row justify-content-center" style="min-height: 100vh">

            <div class="col-md-7">
                <h5 class="text-quicksand">Hasil Pencarian</h5>
                <div class="card border-0 shadow-sm rounded-0">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-5">
                            <li class="nav-item">
                                <a wire:click.prevent="$set('kategori', 'semua')" class="nav-link {{$kategori == 'semua' ? 'active' : ''}}" aria-current="page" href="#">Semua</a>
                            </li>
                            <li class="nav-item">
                                <a wire:click.prevent="$set('kategori', 'tanaman')" class="nav-link {{$kategori == 'tanaman' ? 'active' : ''}} "  href="#">Tanaman</a>
                            </li>
                            <li class="nav-item">
                                <a wire:click.prevent="$set('kategori', 'jamu')" class="nav-link {{$kategori == 'jamu' ? 'active' : ''}}" href="#">Jamu</a>
                            </li>

                        </ul>
                        <form>
                            <div class="form-group">
                                <input wire:model="keyword" type="text" class="form-control bg-white border border-warning" name="" id="">
                            </div>
                        </form>
                        <div class="alert alert-default-info info-hasil-text">

                            <small>Hasil pencarian yang ditemukan total
                                @if($kategori == 'semua')
                                    <strong>{{$tanaman->count() + $produk->count()}}</strong>
                                @elseif($kategori == 'jamu')
                                    <strong>{{$produk->count()}}</strong>
                                @else
                                    <strong>{{$tanaman->count()}}</strong>
                                @endif
                                data
                                @if($kategori == 'semua')
                                    <strong>Tanaman dan Jamu</strong>
                                @elseif($kategori == 'jamu')
                                    <strong>Jamu</strong>
                                @else
                                    <strong>Tanaman</strong>
                                @endif
                                untuk keyword : <strong>{{$keyword}}</strong></small>
                        </div>
                        @if(empty($tanaman))
                            <div class="alert alert-light">
                                Mohon maaf tanaman yang anda cari belum tersedia di database kami, apakah mau menambahkan tentang tanaman ini di data kami?
                                <a href="#">Klik Disini</a>
                            </div>
                        @else
                            @if($kategori == 'tanaman')
                                @forelse($tanaman as $tanaman_detail)
                                    <div class="card shadow-none mb-2 border-bottom border-bottom-dashed">
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
                                                    <div class="badge bg-soft-light p-1">{{\Carbon\Carbon::parse($tanaman_detail->created_at)->format('d F Y')}}</div>
                                                    <div class="badge bg-soft-secondary p-1">Ditinjau oleh: <span>{{$tanaman_detail->diverifikasi->name ?? 'Belum diverifikasi'}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-light">
                                        Mohon maaf tanaman yang anda cari belum tersedia di database kami, apakah mau menambahkan tentang tanaman ini di data kami?
                                        <a href="{{route('wiki.tambah-artikel')}}">Klik Disini</a>
                                    </div>
                                @endforelse
                            @elseif($kategori == 'jamu')
                                @forelse($produk as $detail_produk)
                                    <div class="card shadow-none mb-2 border-bottom-dashed">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <a href="{{route('produk.baca', $detail_produk->slug)}}">
                                                    <h5 class="title-tanaman">{{$detail_produk->nama_produk}}</h5>
                                                </a>
                                            </div>
                                            <div class="card-text diskripsi-singkat-tanaman">
                                                <p>
                                                    {!! Str::limit(strip_tags($detail_produk->deskripsi), 250) !!}
                                                </p>
                                            </div>
                                            <div class="card-text">
                                                <div class="meta-artikel">
                                                    <div class="badge badge-light p-1">{{\Carbon\Carbon::parse($detail_produk->created_at)->format('d F Y')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-light">
                                        Mohon maaf produk yang anda cari belum tersedia di database kami, silahkan masukan kata pencarian lainnya?
                                    </div>
                                @endforelse
                            @else
                                @forelse($tanaman as $tanaman_detail)
                                    <div class="card shadow-none mb-2 border-bottom-dashed">
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
                                                    <div class="badge badge-light p-1">{{\Carbon\Carbon::parse($tanaman_detail->created_at)->format('d F Y')}}</div>
                                                    <div class="badge badge-light p-1">Ditinjau oleh: <span>{{$tanaman_detail->diverifikasi->name ?? 'Belum diverifikasi'}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty

                                @endforelse

                                @forelse($produk as $detail_produk)
                                    <div class="card shadow-none mb-2 border-bottom-dashed">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <a href="{{route('produk.baca', $detail_produk->slug)}}">
                                                    <h5 class="title-tanaman">{{$detail_produk->nama_produk}}</h5>
                                                </a>
                                            </div>
                                            <div class="card-text diskripsi-singkat-tanaman">
                                                <p>
                                                    {!! Str::limit(strip_tags($detail_produk->deskripsi), 250) !!}
                                                </p>
                                            </div>
                                            <div class="card-text">
                                                <div class="meta-artikel">
                                                    <div class="badge badge-soft-warning p-1">{{\Carbon\Carbon::parse($tanaman_detail->created_at)->format('d F Y')}}</div>
                                                    <div class="badge badge-soft-secondary p-1">Ditinjau oleh: <span>{{$tanaman_detail->diverifikasi->name ?? 'Belum diverifikasi'}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty

                                @endforelse

                            @endif
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-md-3" style="margin-top: 34px">

                <div class="list-group shadow-sm list-group-flush">
                    <a href="{{route('kontributor')}}" class="list-group-item list-group-item-action border-light">
                        <span>👨‍🏫</span> Para Kontributor
                    </a>
                    <a href="{{route('wiki.tambah-artikel')}}" class="list-group-item list-group-item-action border-light">
                        <span>📝</span> Buat Artikel
                    </a>
                    {{--<a href="#" class="list-group-item list-group-item-action border-light">
                        <span>❔</span> Bantuan
                    </a>--}}
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
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

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: white !important;
            border-bottom: 3px solid orange !important;
        }
    </style>
@endpush
