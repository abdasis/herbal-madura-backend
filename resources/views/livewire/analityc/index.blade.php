<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row h-100">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-calendar-check-fill align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Minggu Ini</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$popular_perminggu->count()}}">{{$popular_perminggu->count()}}</span></h4>
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
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-calendar-check-fill align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Bulan Ini</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$popular_perbulan->count()}}">{{$popular_perbulan->count()}}</span></h4>
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
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-calendar-check-fill align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Sepanjang Masa</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$popular_perbulan->count()}}">{{$popular_perbulan->count()}}</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Data Analityc Pengunjung</h5>
        </div>
        <div class="card-body">
            <table class="table table-card table-sm">
                <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Ditulis Oleh</th>
                    <th>Tgl Ditulis</th>
                    <th>Terakhir Update</th>
                    <th>Total Pengunjung</th>
                </tr>
                </thead>
                <tbody>
                @foreach($keseluruhan as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama_tanaman}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($item->updated_at)->format('d/m/Y H:i')}}</td>
                        <td>{{$item->visit_count_total}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
