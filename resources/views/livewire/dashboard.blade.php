<div>
    <div class="row h-100">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span
                                class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-plant-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Data Tanaman</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_tanama}}">1</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span
                                class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-4-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Pengguna</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_pengguna}}">1</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span
                                class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-eye-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Total Pembaca</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_pengunjung}}">1</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> {{-- Be like water. --}}
    <div class="row">
        <div class="col-md-7">
            <div class="card card-outline card-orange">
                <div class="card-header card-title">
                    Data Produk Terbaru
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Tanaman</th>
                            <th>Nama Latin</th>
                            <th>Dibuat Pada</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($semua_tanaman as $tanaman)
                            <tr>
                                <td>{{$tanaman->id}}</td>
                                <td>{{$tanaman->nama_tanaman}}</td>
                                <td>{{$tanaman->nama_latin}}</td>
                                <td>{{\Carbon\Carbon::parse($tanaman->created_at)->format('d F Y')}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-outline card-orange">
                <div class="card-header">
                    Kontributor Terbaru
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pengguna</th>
                            <th>Pendidikan</th>
                            <th>Bergabung Pada</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($semua_kontributor as $kontributor)
                            <tr>
                                <td>{{$kontributor->id}}</td>
                                <td>{{$kontributor->name}}</td>
                                <td>{{$kontributor->email}}</td>
                                <td>{{\Carbon\Carbon::parse($kontributor->created_at)->format('d F Y')}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
