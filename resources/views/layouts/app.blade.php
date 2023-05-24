<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <title>Planty | Aplikasi Kamus Tanaman Herbal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Karla:ital,wght@0,500;0,600;0,700;0,800;1,500;1,600;1,700;1,800&family=Pacifico&family=Vesper+Libre:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @stack('styles')
</head>

<body>

<div id="layout-wrapper">
    <x-admin.header/>
    <x-admin.sidebar/>
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                {{$slot}}
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        {{now()->format('Y')}} © Kamus Herbal.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Abdul Aziz
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
@livewireScripts
@livewireChartsScripts
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/sweetalerts.init.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts/>
@stack('scripts')
</body>

</html>
