@can('Admin')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('dashboard*') ? '' : 'collapsed' }}" href="/dashboard">
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('mentoring_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('mentoring_peralatan*') ? '' : 'collapsed' }}" href="/mentoring_peralatan">
                    <i class="bi bi-arrow-repeat"></i>
                    <span>Mentoring Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('data_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('data_peralatan*') ? '' : 'collapsed' }}" href="/data_peralatan">
                    <i class="bi bi-pc-display-horizontal"></i>
                    <span>Data Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('data_ruangan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('data_ruangan*') ? '' : 'collapsed' }}" href="/data_ruangan">
                    <i class="bi bi-building"></i>
                    <span>Data Ruangan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('perawatan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('perawatan_peralatan*') ? '' : 'collapsed' }}"
                    href="/perawatan_peralatan">
                    <i class="bi bi-tools"></i>
                    <span>Perawatan Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('pengajuan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('pengajuan_peralatan*') ? '' : 'collapsed' }}"
                    href="/pengajuan_peralatan">
                    <i class="bi bi-activity"></i>
                    <span>Pengajuan Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('penjadwalan_perawatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('penjadwalan_perawatan*') ? '' : 'collapsed' }}"
                    href="/penjadwalan_perawatan">
                    <i class="bi bi-calendar-week"></i>
                    <span>Penjadwalan Perawatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('penambahan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('penambahan_peralatan*') ? '' : 'collapsed' }}"
                    href="/penambahan_peralatan">
                    <i class="bi bi-plus-circle"></i>
                    <span>Penambahan Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('stok_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('stok_peralatan*') ? '' : 'collapsed' }}" href="/stok_peralatan">
                    <i class="bi bi-folder"></i>
                    <span>Stok Peralatan</span>
                </a>
            </li>
            <li
                class="nav-item {{ Request::is('laporan_perawatan_peralatan*', 'laporan_pengajuan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('laporan_perawatan_peralatan*', 'laporan_pengajuan_peralatan*') ? '' : 'collapsed' }}"
                    data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-pdf"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav"
                    class="nav-content {{ Request::is('laporan_perawatan_peralatan*', 'laporan_pengajuan_peralatan*') ? 'show' : 'collapse' }}"
                    data-bs-parent="#sidebar-nav">
                    <li class="nav-item {{ Request::is('laporan_perawatan_peralatan*') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('laporan_perawatan_peralatan*') ? 'text-primary' : 'collapsed' }}"
                            href="/laporan_perawatan_peralatan">
                            <i class="bi bi-circle"></i><span>Laporan Perawatan Peralatan</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('laporan_pengajuan_peralatan*') ? 'active' : '' }}">
                        <a class="nav-link {{ Request::is('laporan_pengajuan_peralatan*') ? 'text-primary' : 'collapsed' }}"
                            href="/laporan_pengajuan_peralatan">
                            <i class="bi bi-circle"></i><span>Laporan Pengajuan Peralatan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="modal" data-bs-target="#logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>

    </aside>
    <!-- Modal -->
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/logoutwebsite" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold text-danger" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Apakah anda yakin akan keluar dari website ini?</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger px-5">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Sidebar-->
@endcan

@can('Manajer')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('dashboard*') ? '' : 'collapsed' }}" href="/dashboard">
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('penambahan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('penambahan_peralatan*') ? '' : 'collapsed' }}"
                    href="/penambahan_peralatan">
                    <i class="bi bi-plus-circle"></i>
                    <span>Penambahan Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('stok_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('stok_peralatan*') ? '' : 'collapsed' }}" href="/stok_peralatan">
                    <i class="bi bi-folder"></i>
                    <span>Stok Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('laporan_penambahan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('laporan_penambahan_peralatan*') ? '' : 'collapsed' }}"
                    href="/laporan_penambahan_peralatan">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="modal" data-bs-target="#logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>

    </aside>
    <!-- Modal -->
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/logoutwebsite" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold text-danger" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Apakah anda yakin akan keluar dari website ini?</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger px-5">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Sidebar-->
@endcan

@can('Karyawan')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('dashboard*') ? '' : 'collapsed' }}" href="/dashboard">
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('perawatan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('perawatan_peralatan*') ? '' : 'collapsed' }}"
                    href="/perawatan_peralatan">
                    <i class="bi bi-tools"></i>
                    <span>Perawatan Peralatan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('pengajuan_peralatan*') ? 'active' : '' }}">
                <a class="nav-link {{ Request::is('pengajuan_peralatan*') ? '' : 'collapsed' }}"
                    href="/pengajuan_peralatan">
                    <i class="bi bi-activity"></i>
                    <span>Pengajuan Peralatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-bs-toggle="modal" data-bs-target="#logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- Modal -->
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/logoutwebsite" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold text-danger" id="exampleModalLabel">Informasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Apakah anda yakin akan keluar dari website ini?</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger px-5">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Sidebar-->
@endcan
