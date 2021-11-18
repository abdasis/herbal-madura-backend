<nav class="main-header navbar navbar-expand navbar-white navbar-light border-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Notifications Dropdown Menu -->


        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}" target="_blank"><i class="fas fa-globe"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a href="{{route('login')}}">
                <a class="nav-link dropdown-toggle" id="userDopdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-orange" href="#">Halo!, {{Str::title(Auth::user()->name)}}</a>
            </a>
            <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="userDopdown">
                <a  class="dropdown-item" href="{{route('pengguna.detail', Auth::id())}}">Profile</a>
                <a class="dropdown-item text-danger" href="{{route('kelaur')}}">Logout</a>
            </div>
        </li>
    </ul>
</nav>
