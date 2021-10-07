<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$statistik['hari_ini']}}</h3>
                    <p>Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-area"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$statistik['unique']}}</h3>

                    <p>Unique View</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$statistik['bulan_ini']}}</h3>

                    <p>Bulan Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$statistik['total']}}</h3>

                    <p>Total Pengunjung</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="card-title">
                        <h5>Statisk Pengunjung</h5>
                    </div>
                </div>
                <div class="card-body">
                    <livewire:statistik.table-statistik/>
                </div>
            </div>
        </div>
    </div>

</div>
