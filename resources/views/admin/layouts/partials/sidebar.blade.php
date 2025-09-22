<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link d-flex justify-content-center">
        <span class="brand-text font-weight-bold">Vibes Lombok</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" 
                       type="search" 
                       placeholder="Search" 
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>  
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" 
                data-widget="treeview" 
                role="menu" 
                data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Master Data -->
                <li class="nav-header">Master</li>
                <li class="nav-item {{ Request::routeIs('daftar_user','tambah_user','edit_user','daftar_mobil','tambah_mobil','edit_mobil','daftar_wisata','tambah_wisata','edit_wisata','daftar_blog','tambah_blog','edit_blog','daftar_faq','tambah_faq','edit_faq') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('daftar_user','tambah_user','edit_user','daftar_mobil','tambah_mobil','edit_mobil','daftar_wisata','tambah_wisata','edit_wisata','daftar_blog','tambah_blog','edit_blog','daftar_faq','tambah_faq','edit_faq') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('daftar_user') }}" class="nav-link {{ Request::routeIs('daftar_user','tambah_user','edit_user') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_mobil') }}" class="nav-link {{ Request::routeIs('daftar_mobil','tambah_mobil','edit_mobil') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Mobil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_wisata') }}" class="nav-link {{ Request::routeIs('daftar_wisata','tambah_wisata','edit_wisata') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Paket Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_blog') }}" class="nav-link {{ Request::routeIs('daftar_blog','tambah_blog','edit_blog') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_faq') }}" class="nav-link {{ Request::routeIs('daftar_faq','tambah_faq','edit_faq') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Laporan -->
                <li class="nav-header">Laporan</li>
                <li class="nav-item {{ Request::routeIs('laporan*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::routeIs('laporan*') ? 'active' : '' }}">
                        <i class="fas fa-mail-bulk nav-icon"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::routeIs('laporan_penjualan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Penjualan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Setting -->
                <li class="nav-header">Setting</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Keluar</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>






{{-- 
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="{{ url('/admin') }}" class="brand-link d-flex justify-content-center">
        <span class="brand-text font-weight-bold">Vibes Lombok</span>
    </a>

    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" 
                       type="search" 
                       placeholder="Search" 
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" 
                data-widget="treeview" 
                role="menu" 
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link active">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">Master</li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('daftar_user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_mobil') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Mobil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_wisata') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Paket Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_blog') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('daftar_faq') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Laporan</li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-mail-bulk nav-icon"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Penjualan</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="nav-header">Setting</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Keluar</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside> --}}
