<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <title>{{ config('app.name', 'Herbal Madura') }}</title>
    <!-- Styles -->
    @livewireStyles
    @stack('css')
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="layout-top-nav">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white border-light border-bottom">
        <div class="container">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                <span class="brand-text font-weight-light">WikiHerbal</span>
            </a>
            <button class="navbar-toggler border-0 order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown mr-2">
                    @if(Auth::check())
                        Hallo, {{Str::title(Auth::user()->name)}}
                    @else
                        <a href="{{route('login')}}">
                            <button class="btn btn-outline-secondary btn-sm">Masuk / Mendaftar</button>
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
    <div class="container bg-white mt-5">
        {{$slot}}
    </div>

    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <footer
        class="text-left bg-light text-dark"
        style="background-color: #1c2331"
    >
        <section class="py-2 px-3">
            <div class="container  text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Ensiklopedia Herbal</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #f3f3f3; height: 2px"
                        />
                        <p>
                            Ensiklopedia Herbal adalah sebuah situs layanan penyedia informasi kesehatan dengan bahan herbal, mulai dari suplement kesehatan dan obat-obat penyembuhan
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Menjadi Kontributor</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #f3f3f3; height: 2px"
                        />
                        <p>
                            <a href="{{route('login')}}" class="text-dark">Masuk </a>
                        </p>
                        <p>
                            <a href="{{route('auth.register')}}" class="text-dark">Daftar</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Informasi</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #f3f3f3; height: 2px"
                        />
                        <p>
                            <a href="#!" class="text-dark">Ketentuan Pengguna</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Kebijakan Editorial dan Koreksi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-dark">Panduan Komunitas</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Link Lainnya</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #f3f3f3; height: 2px"
                        />
                        <p>FAQ</p>
                        <p>Tentang</p>
                        <p>Syarat</p>
                        <p>Para Pakar</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="p-3 border-top border-gray">
           <div class="container">
               © 2020 Copyright:
               <a class="text-dark" href="https://herbalmadura.my.id/"
               >Herbal Madura</a
               >
           </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>


<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@livewireScripts
@stack('js')
<link rel="stylesheet" href="@sweetalert2/theme-bootstrap-4/bootstrap-4.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-livewire-alert::scripts />
</body>
</html>
