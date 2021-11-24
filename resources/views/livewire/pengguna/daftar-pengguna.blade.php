<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="blur"></div>
    <div class="container">
        <h5 class="text-bold text-quicksand mb-4">DAFTAR KONTRIBUTOR KAMI</h5>
        <div class="row" style="min-height: 100vh">
            @forelse($semua_pengguna as $pengguna)
                <div class="col-md-3">
                    <div class="card card-widget widget-user shadow-sm">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-gradient-orange">
                            <h3 class="widget-user-username text-white">{{$pengguna->name}}</h3>
                            <h5 class="widget-user-desc text-light">{{$pengguna->roles}}</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-1" src="{{asset('upload' . '/' . $pengguna->profile_photo_path) ?? asset('dist/img/user.png')}}" alt="User Avatar">
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{$pengguna->alamat_website}}" class="text-orange">
                                🔗 {{$pengguna->alamat_website}}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="alert alert-default-info">
                        Belum ada kontributor yang bergabung saat ini
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
