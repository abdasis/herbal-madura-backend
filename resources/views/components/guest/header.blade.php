<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light border-bottom border-light shadow-none fixed-top is-sticky" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="40">
                <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="40">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link d-flex gap-1" href="{{url('/')}}">
                            <i class="ri-home-3-line"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex gap-1" href="{{route('wiki.hasil-pencarian')}}">
                            <i class="ri-leaf-line"></i>
                            Tanaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tentang')}}">Tentang</a>
                    </li>
                </ul>

                @if(auth()->check())
                    <div class="dropdown nav-profile d-flex align-items-center gap-2">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{file_exists(asset('upload/' . auth()->user()->profile_photo_path)) ? auth()->user()->profile_photo_path : Avatar::create(auth()->user()->name)}}" alt="avatar-circle" class="avatar-xs rounded-circle me-2">
                            <span>Hai, {{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu mt-4 px-2" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item p-1 fs-14 d-flex align-items-center justify-content-start gap-2" href="{{ route('dashboard') }}">
                                    <i class="mdi mdi-account"></i>
                                    Profile
                                </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form method="post" action="{{route('logout')}}">
                                    @csrf
                                    <button class="dropdown-item p-1 fs-14 text-danger d-flex align-items-center justify-content-start gap-2">
                                        <i class="ri-logout-box-line"></i>
                                        Logout
                                    </button>
                                </form></li>
                        </ul>
                    </div>
                @else
                    <a href="{{route('login')}}" class="btn btn-light d-flex justify-content-center align-items-center w-md">
                        <em class="ri-login-circle-line me-1"></em>
                        Masuk
                    </a>
                @endif
            </div>

        </div>
    </nav>
</div>
