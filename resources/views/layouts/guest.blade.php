<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
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
<body class="layout-top-nav layout-navbar-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white border-light border">
        <div class="container">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                <span class="brand-text font-weight-light">SKRIPSI</span>
            </a>

            <button class="navbar-toggler order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse order-3 collapse" id="navbarCollapse" style="">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Konsultasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">Suplement </a></li>
                            <li><a href="#" class="dropdown-item">Obat Herbal</a></li>

                        </ul>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar bg-light" type="search" placeholder="Cari product herbal" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown mr-2">
                    <a href="#">
                        <button class="btn btn-light btn-sm">Daftar</button>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a href="#">
                        <button class="btn btn-sm text-light btn-warning">Masuk</button>

                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper bg-white mt-5">
        {{$slot}}
    </div>

    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <footer
        class="text-left text-lg-start text-white"
        style="background-color: #1c2331"
    >
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-between p-4 bg-warning"
        >
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white mx-2">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container  text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Herbal Madura</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            Herbal Madura adalah sebuah situs layanan penyedia informasi kesehatan dengan bahan herbal, mulai dari suplement kesehatan dan obat-obat penyembuhan
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Products</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            <a href="#!" class="text-white">Obat Sariawan Herbal </a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Herbal Jantung Sehat</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Informasi</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            <a href="#!" class="text-white">Ketentuan Pengguna</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Kebijakan Editorial dan Koreksi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Panduan Komunitas</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p><i class="fas fa-home mr-3"></i> Bangkalan, Madura, Jawa Timur</p>
                        <p><i class="fas fa-envelope mr-3"></i>info@maduraherbal.my.id</p>
                        <p><i class="fas fa-phone mr-3"></i> +6281944999994</p>
                        <p><i class="fas fa-print mr-3"></i> +6281944999993</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div
            class=" p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
        >
           <div class="container">
               © 2020 Copyright:
               <a class="text-white" href="https://herbalmadura.my.id/"
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
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/themes@5.0.5/material-ui/material-ui.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<x-livewire-alert::scripts />

</body>
</html>
