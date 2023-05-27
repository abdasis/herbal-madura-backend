<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! SEO::generate() !!}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/aos.css') }}">
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @livewireStyles
    @stack('css')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-white">
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light border-bottom border-light fixed-top is-sticky shadow-none"
            id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('auth.detail') }}">
                    <h2 class="mb-0">
                        <i class="ri-home-8-line"></i>
                    </h2>
                </a>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mt-lg-0 me-auto" id="toolbar-tiny"></div>
                    <div class="dropdown nav-profile d-flex align-items-center gap-2">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ file_exists(asset('upload/' . auth()->user()->profile_photo_path)) ? auth()->user()->profile_photo_path : Avatar::create(auth()->user()->name) }}"
                                alt="avatar-circle" class="avatar-xs rounded-circle me-2">
                            <span class="fw-bold">Hai, {{ Str::title(auth()->user()->name) }}</span>
                        </a>
                        <ul class="dropdown-menu border-light mt-4 px-2 shadow-sm" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-14 d-flex align-items-center justify-content-start gap-2 p-1"
                                    href="{{ route('dashboard') }}">
                                    <i class="mdi mdi-account"></i>
                                    Profile
                                </a></li>
                            <li>
                                <hr class="dropdown-divider border-light">
                            </li>
                            <li>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        class="dropdown-item fs-14 text-danger d-flex align-items-center justify-content-start gap-2 p-1">
                                        <i class="ri-logout-box-line"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        {{ $slot }}
    </div>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/pages/animation-aos.init.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    @stack('js')
</body>

</html>
