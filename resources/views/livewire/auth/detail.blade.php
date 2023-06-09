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
                        @if (auth()->user()->roles == 'kontributor')
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
                                    <div class="bg-soft-danger text-danger border-danger rounded border px-5 py-2">
                                        <h4 class="text-danger mb-1">{{ $total_ditolak }}</h4>
                                        <p class="fs-14 mb-0">Ditolak</p>
                                    </div>
                                </div>
                            </div>
                        @endif
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
                        <table class="table-borderless mb-0 table">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Nama</th>
                                    <td class="text-muted">: {{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Telepon</th>
                                    <td class="text-muted">: {{ auth()->user()->biodata->telepon }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">E-mail</th>
                                    <td class="text-muted text-truncate">: {{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Alamat</th>
                                    <td class="text-muted">: {{ auth()->user()->alamat ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap ps-0" scope="row">Bergabung</th>
                                    <td class="text-muted">: {{ auth()->user()->created_at->format('d M Y') }}</td>
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
            <div class="profile-body col-md-8">
                <div class="card card-body">
                    <div class="card-header d-flex justify-content-between align-items-center border-white">
                        <div class="header-start d-flex align-items-center gap-2">
                            <h5 class="mb-0">Kontribusi</h5>
                        </div>
                        @if (in_array(auth()->user()->roles, ['admin', 'kontributor']))
                            <a href="{{ route('wiki.tambah-artikel') }}">
                                <button class="btn btn-sm btn-light">Tambah Kontribusi</button>
                            </a>
                        @endif
                    </div>
                    @if (auth()->user()->roles == 'user')
                        @if ($tanaman_disukai->count() < 1)
                            <div class="alert alert-danger m-3">
                                Anda belum menyukai satu tanaman pun.
                            </div>
                        @else
                            <livewire:tabel-bookmark/>
                        @endif
                    @else
                        @if ($data_tanaman->count() < 1)
                            <div class="alert alert-info">
                                Anda belum memiliki satupun kontribusi,
                                <a href="{{ route('wiki.tambah-artikel') }}">
                                    <kbd>+ Tambah</kbd>
                                </a>
                            </div>
                        @else
                            <livewire:tanaman-by-author />
                        @endif
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

@push('css')
    <style>
        * {
            font-family: 'Inter', sans-serif !important;
        }
    </style>
@endpush
