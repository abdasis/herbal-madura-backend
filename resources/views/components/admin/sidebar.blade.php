<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="40">
            </span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover p-0"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span> Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#tanaman" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="tanaman">
                        <i class="ri-plant-line"></i> <span> Data Danaman</span>
                    </a>
                    <div class="menu-dropdown collapse" id="tanaman">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('tanaman.tambah') }}" class="nav-link"> Tambah Baru </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tanaman.semua') }}" class="nav-link"> Semua Tanaman </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('analityc.index') }}">
                        <i class="ri-bar-chart-2-line"></i><span data-key="t-widgets">Analitycs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('pengguna.semua') }}">
                        <i class="ri-user-6-line"></i> <span data-key="t-widgets">Kontributor</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
