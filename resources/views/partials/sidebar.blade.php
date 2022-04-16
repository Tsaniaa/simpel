<div class="container-fluid">
    <div class="row flex-grow-0">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show text-decoration-none">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start ">
                        <a href="/" class="list-group-item border-end-0 d-inline-block text-truncate {{ ($title === "graphic") ? 'active' : '' }}" data-bs-parent="#sidebar"><i class="fa-solid fa-house me-2"></i><span class="ms-1 d-none d-sm-inline">Beranda</span></a>
                        <a href="/data" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa fa-th-list me-2"></i><span class="ms-1 d-none d-sm-inline">Data Penelitian</span></a>
                        <a href="/pengumuman" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa fa-bullhorn me-2"></i><span class="ms-1 d-none d-sm-inline">Pengumuman</span></a>
                        <a href="#submenu1" data-bs-toggle="collapse" class="list-group-item border-end-0 d-inline-block text-truncate">
                            <i class="fa fa-user me-2"></i><span class="ms-1 d-none d-sm-inline">Akun</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link"> <span class="d-none d-sm-inline">Lihat Profile</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link"> <span class="d-none d-sm-inline">Edit Profile</span></a>
                                </li>
                            </ul>
                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa fa-sign-out me-2"></i><span class="ms-1 d-none d-sm-inline">Keluar</span></a>
                       </div>
                </div>
            </div>
            <div class="col">
              <div class="row">
                    <div class="page-header pt-4">
                        <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none"><i class="fa fa-bars"></i> menu</a>
                    </div>
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>