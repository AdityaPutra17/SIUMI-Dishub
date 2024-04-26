<aside class="main-sidebar bg-white elevation-4 position-fixed ">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link bg-main-color">
        <img src="{{asset('assets/image/SIUMI.png')}}" alt="Logo Siumi" width="70px">
        <span class="brand-text fw-bold text-light">SIUMI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-dark">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <hr class="border-2">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Karyawan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/datakaryawan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/datakaryawan?role=Security" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Security</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/datakaryawan?role=OfficeBoy" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>OB</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Jadwal
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/jadwal" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Security</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/gantishift" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Pergantian Shift</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin/presensi" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Presensi

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="/admin/laporankerusakan" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Laporan Kerusakan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/izin" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Laporan pengajuan izin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Mamin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/mamins" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/mamins?jenis=konsumsi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konsumsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/mamins?jenis=natura" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Natura</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <hr class="border-2 ">
                <li class="nav-item">
                    <form action="/logout" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="text-danger  border-0 bg-transparent ">
                            <i class="fa-solid fa-arrow-right-from-bracket">
                            </i>
                            <p class="text-danger ">SignOut</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
