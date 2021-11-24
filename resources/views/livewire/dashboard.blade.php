<div>
    {{-- Be like water. --}}
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Cooming Soon</h3>

                    <p>Data Produk</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{views(\App\Models\Tanaman::class)->count()}}<sup style="font-size: 20px"></sup></h3>

                    <p>Statistik Pembaca</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$semua_kontributor->count()}}</h3>

                    <p>Kontributor</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$semua_tanaman->count()}}</h3>

                    <p>Data Tanaman</p>
                </div>
                <div class="icon">
                    <i class="fas fa fa-leaf"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card card-outline card-orange">
                <div class="card-header">
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
                    Data Kontributor
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kontributor</th>
                            <th>Pendidikan Terakhir</th>
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
