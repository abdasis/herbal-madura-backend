<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light border-bottom border-light shadow-none fixed-top is-sticky" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                <img src="{{asset('assets/images/logo-light.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wallet">Artkel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#marketplace">Kontributor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Tentang</a>
                    </li>
                </ul>

                <div class="">
                    @if(auth()->check())
                        <a href="{{route('profile.show')}}">
                            Hai
                        </a>
                    @else
                        <a href="{{route('auth.register')}}" class="btn d-flex justify-content-center align-items-center btn-soft-success w-md">
                            <em class="ri-user-3-fill me-1"></em>
                            Buat Akun
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </nav>
</div>
