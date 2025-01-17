<div>
    <div class="profile-page container">
        @if (session()->has('pesan'))
            <div class="my-2">
                <div class="alert alert-warning">
                    {{ session()->get('pesan') }}
                </div>
            </div>
        @endif
        <div class="profile-header position-relative border-light border p-4">
            <div class="mb-lg-3 pb-lg-4 mb-4 pt-4">
                <div class="row g-4 justify-content-center justify-content-md-start justify-content-sm-center">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{ file_exists(public_path(auth()->user()->profile_photo_path)) ? asset(auth()->user()->profile_photo_path) : Avatar::create(auth()->user()->name) }}"
                                alt="user-img avatar-lg" height="200px" class="img-thumbnail img-penulis rounded-circle">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="d-flex align-items-center mb-1 gap-1">{{ auth()->user()->name }}
                                <a href="{{ route('auth.sunting', auth()->id()) }}">
                                    <i class="ri-edit-2-line"></i>
                                </a>
                            </h3>
                            <p class="">{{ auth()->user()->email }}</p>
                            <div class="hstack gap-1">
                                <div class="me-2"><i
                                        class="ri-map-pin-user-line fs-16 me-1 align-middle"></i>{{ auth()->user()->alamat ?? '-' }}
                                </div>
                                <div>
                                    <i
                                        class="ri-building-line fs-16 me-1 align-middle"></i>{{ auth()->user()->biodata->pekerjaan ?? '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-lg-0 order-last">
                        <div class="row text text-center">
                            <div class="col-lg-6 col-4 d-flex gap-2">
                                <div class="bg-soft-success text-success border-success rounded border px-5 py-2">
                                    <h4 class="text-success mb-1">{{ $total_kontribusi }}</h4>
                                    <p class="fs-14 mb-0">Publish</p>
                                </div>
                                <div class="bg-soft-warning text-warning border-warning rounded border px-5 py-2">
                                    <h4 class="text-warning mb-1">{{ $total_direview }}</h4>
                                    <p class="fs-14 mb-0">Direview</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
        </div>
        <div class="row px-md-5 px-sm-0 mt-md-n5 mt-sm-5">
            <div class="profile-sidebar col-md-4">
                <div class="card">
                    <h5 class="card-header border-bottom border-white">Tentang</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-nowrap table-borderless mb-0 table">
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">Nama :</th>
                                        <td class="text-muted">{{ auth()->user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Telepon :</th>
                                        <td class="text-muted">{{ auth()->user()->biodata->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">E-mail :</th>
                                        <td class="text-muted">{{ auth()->user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Alamat :</th>
                                        <td class="text-muted">{{ auth()->user()->alamat ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Bergabung :</th>
                                        <td class="text-muted">{{ auth()->user()->created_at->format('d M Y') }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="d-grid my-3">
                                <a href="{{ route('kelaur') }}" class="btn btn-danger btn-sm">
                                    <i class="ri-logout-box-line"></i>
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-body col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-white">
                        <div class="header-start d-flex align-items-center gap-2">
                            <h5 class="mb-0">Kontribusi</h5>
                            <x-form-input name="keyword" wire:model="keyword" placeholder="Judul Tanaman"
                                class="form-control-sm" />
                        </div>

                        <a href="{{ route('wiki.tambah-artikel') }}">
                            <button class="btn btn-sm btn-light">Tambah Kontribusi</button>
                        </a>
                    </div>
                    @if ($data_tanaman->count() < 1)
                        <div class="alert alert-light">
                            Anda belum memiliki satupun kontribusi, <a href="{{ route('wiki.tambah-artikel') }}">Tambah
                                Kontribusi</a>
                        </div>
                    @else
                        @foreach ($data_tanaman as $detail)
                            <div class="card border-top border-top-dashed my-2 shadow-none">
                                <div class="row gy-2 align-items-center">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="{{ route('tanaman.baca', $detail->slug) }}">
                                                <h5 class="card-title text-primary mb-2">{{ $detail->nama_tanaman }}
                                                </h5>
                                            </a>
                                            <p class="card-text text-muted mb-0">
                                                {!! Str::limit(strip_tags($detail->diskripsi_tanaman), 150, '...') !!}
                                            </p>
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="meta-tag-footer d-flex align-items-center gap-2">
                                                <div class="card-text">
                                                    <small class="text-muted d-flex align-items-center gap-1">
                                                        <i class="ri-user-fill"></i>
                                                        {{ Str::title($detail->user->name) }}
                                                    </small>
                                                </div>
                                                |
                                                <div class="card-text">
                                                    <small
                                                        class="text-muted">{{ Carbon::parse($detail->created_at)->format('d, F Y') }}</small>
                                                </div>
                                                @if ($detail->status == 'Direview')
                                                    <span class="badge bg-warning">
                                                        {{ $detail->status }}
                                                    </span>
                                                @else
                                                    <span class="badge bg-success">
                                                        {{ $detail->status }}
                                                    </span>
                                                @endif
                                                <div class="float-right">
                                                    <a href="{{ route('wiki.sunting-artikel', $detail->slug) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="rounded-end img-fluid h-100 gambar-unggulan-tanaman d-none d-md-block"
                                            src="{{ file_exists(public_path($detail->gambar_tanaman)) == true ? asset($detail->gambar_tanaman) : asset('assets/images/tanaman-placeholder.png') }}"
                                            alt="{{ $detail->nama_tanaman }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $data_tanaman->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        Livewire.on('modalUpload', params => {
            $('#modalUploadAvatar').modal('show')
        })

        Livewire.on('closeModal', params => {
            $('#modalUploadAvatar').modal('hide')

        })
    </script>
@endpush
