<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="blur"></div>
    <div class="banner-pencarian d-flex justify-content-center align-items-center">
        <div class="col-md-6 col-sm-12">
            <div class="form-group w-100">
                <input wire:model="keyword" placeholder="Pencarian" type="text" class="form-control form-control-lg rounded-pill mx-auto bg-white border border-warning" name="" id="">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center" style="min-height: 100vh">
            <div class="col-md-8">
                <div class="card-body">
                    @if($keyword)
                        <div class="alert alert-secondary info-hasil-text">
                            <small>Hasil pencarian yang ditemukan total
                                <strong>{{$tanaman->total()}}</strong>
                                untuk keyword : <strong>{{$keyword}}</strong></small>
                        </div>
                    @endif
                    @if(empty($tanaman))
                        <div class="alert alert-light">
                            Mohon maaf tanaman yang anda cari belum tersedia di database kami, apakah mau menambahkan tentang tanaman ini di data kami?
                            <a href="#">Klik Disini</a>
                        </div>
                    @else
                        @foreach($tanaman as $detail)
                            <a href="{{route('tanaman.baca', $detail->slug)}}">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title mb-2">{{$detail->nama_tanaman}}</h5>
                                                <p class="card-text text-muted mb-0">
                                                    {!! Str::limit(strip_tags($detail->diskripsi_tanaman),150, '...') !!}
                                                </p>
                                            </div>
                                            <div class="card-footer border-top-dashed">
                                                <div class="meta-tag-footer d-flex align-items-center gap-2">
                                                    <div class="card-text">
                                                        <small class="text-muted d-flex align-items-center gap-1">
                                                            <i class="ri-user-fill"></i>
                                                            {{Str::title($detail->user->name)}}
                                                        </small>
                                                    </div>
                                                    |
                                                    <div class="card-text">
                                                        <small class="text-muted">{{Carbon::parse($detail->created_at)->format('d, F Y')}}</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img class="rounded-end img-fluid h-100 object-cover" src="{{file_exists(public_path($detail->gambar_tanaman)) == true ? asset($detail->gambar_tanaman) : asset('assets/images/tanaman-placeholder.png')}}" alt="Card image">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {{$tanaman->links()}}
                    @endif
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 34px">

                <div class="list-group shadow-sm list-group-flush">
                    <a href="{{route('kontributor')}}" class="list-group-item list-group-item-action border-light">
                        <span>👨‍🏫</span> Lihat Kontributor
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
