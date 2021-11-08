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

    <title>Ensiklopedia Herbal | Situs web penyedia informasi lengkap tentang tanaman herbal</title>
    <!-- Styles -->
    @livewireStyles
    @stack('css')
    <style>
        [x-cloak] { display: none !important; }
        .text-quicksand {
            font-family: 'Quicksand', sans-serif;
        }

        body{
            background: #f9f9f9;
        }

        .blur {
            background: url('https://image.freepik.com/free-photo/blurred-background-coffee-shop-garden-blur-background-with-bokeh-vintage-filtered-image_1253-1442.jpg') no-repeat center center fixed;
            background-size: cover;
            overflow: hidden;
            filter: blur(40px);
            position: absolute;
            height: 100vh;
            top: -50px;
            left: -50px;
            right: -50px;
            bottom: -50px;
            width: 100%;
            opacity: 0.3;

        }

        .shadow-md{
            box-shadow: rgba(0, 0, 0, 0.15) 0.9px 0.1px 4px;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="layout-top-nav">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar bg-transparent navbar-expand-md border-light bg-white navbar-light shadow-md navbar-white">
        <div class="container-fluid py-2">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('dist/img/logo.png')}}" alt="Ensiklopedia Herbal" class="brand-image img-circle elevation-1" style="opacity: .8">
                <span class="brand-text font-weight-light">infoherbalmadura.com</span>
            </a>
            <button class="navbar-toggler border-0 order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown mr-2">
                    @if(Auth::check())
                        Hallo, <a class="text-orange" href="{{route('auth.detail', Auth::id())}}">{{Str::title(Auth::user()->name)}}</a>
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
    <div class="container-fluid my-3">
        {{$slot}}
    </div>

    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <div class="img-boder"></div>
    <footer
        class="text-left bg-white text-dark px-0 border-top border-gray shadow-sm"
        style="background-color: #1c2331"
    >
        <section class="py-2">
            <div class="container mt-5">
                <!-- Grid row -->
                <div class="row justify-center mt-3 px-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase text-bold text-quicksand">Info Herbal Madura</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #f3f3f3; height: 2px"
                        />
                        <p class="text-quicksand">
                            Info Herbal Madura adalah sebuah situs layanan penyedian informasi kesehatan dengan bahan herbal dan produk dari jamu Madura. Terdapat <i>open access</i> bagi kontributor untuk membagi ilmu seputar kesehatan dengan bahan herbal dan produk Jamu Madura
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase text-bold text-quicksand text-nowrap">Menjadi Kontributor</h6>
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
                        <h6 class="text-uppercase text-bold text-quicksand">Informasi</h6>
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
                        <h6 class="text-uppercase text-bold text-quicksand">Link Lainnya</h6>
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
        <div class="p-3 border-top border-light bg-white">
           <div class="container">
               © 2020 Copyright:
               <a class="text-dark" href="https://infoherbalmadura.com/"
               >Info Herbal Madura</a
               >
           </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>


<!-- ./wrapper -->
<style>
    .img-boder{
        background: url(/dist/img/floral-repeat.png);
        height: 60px;
        width: 100%;
        background-size: contain;
    }
</style>
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
