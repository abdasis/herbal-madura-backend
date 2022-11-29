<div>
    <div class="container profile-page">
        <div class="profile-header border position-relative border-light p-4">
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-lg">
                            <img src="{{auth()->user()->profile_photo_path}}" alt="user-img avatar-lg" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="mb-1 d-flex align-items-center gap-1">{{auth()->user()->name}} <a href=""><i class="ri-edit-2-line"></i></a></h3>
                            <p class="">{{auth()->user()->email}}</p>
                            <div class="hstack gap-1">
                                <div class="me-2"><i class="ri-map-pin-user-line me-1 fs-16 align-middle"></i>{{auth()->user()->alamat ?? '-'}}</div>
                                <div>
                                    <i class="ri-building-line me-1 fs-16 align-middle"></i>{{auth()->user()->tempat_bekerja ?? '-'}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-lg-auto order-last order-lg-0">
                        <div class="row text text-center">
                            <div class="col-lg-6 col-4">
                                <div class="p-2">
                                    <h4 class="mb-1">24.3K</h4>
                                    <p class="fs-14 mb-0">Like</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-4">
                                <div class="p-2">
                                    <h4 class=" mb-1">{{$total_kontribusi}}</h4>
                                    <p class="fs-14 mb-0">Kontribusi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
        </div>
        <div class="row px-5 mt-n5">
            <div class="profile-sidebar col-md-4">
                <div class="card">
                    <h5 class="card-header border-bottom border-white">Tentang</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-nowrap table-borderless mb-0">
                                <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Nama :</th>
                                    <td class="text-muted">{{auth()->user()->name}}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Telepon :</th>
                                    <td class="text-muted">{{auth()->user()->telepon ?? '-'}}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">E-mail :</th>
                                    <td class="text-muted">{{auth()->user()->email}}</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Alamat :</th>
                                    <td class="text-muted">{{auth()->user()->alamat ?? '-'}}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Bergabung :</th>
                                    <td class="text-muted">{{auth()->user()->created_at->format('d M Y')}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-body col-md-8">
                <div class="card">
                    <h5 class="card-header border-white">
                        Kontribusi
                    </h5>
                    <div class="card-body">
                        Halaman Kontribusi
                    </div>
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
