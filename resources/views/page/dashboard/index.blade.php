@extends('master.index')
<title>Dashboard</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-house"></i> Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @can('Karyawan')
        <div class="card">
            <div class="card-body pt-4 my-auto">
                <h2 class="fw-bold text-primary">Selamat Datang {{ auth()->user()->username }}</h2>
                <p class="fw-bold">Di Aplikasi Perawatan Dan Pengajuan Peralatan</p>
            </div>
        </div>
        <div class="card" style="margin-top: -1%;">
            <div class="card-body pt-4 my-auto">
                <img src="/img/Logo-PT-2.png" alt="logo" width="40%">
                <div class="fw-bold fs-3 mt-3">Informasi</div>
                <div>PT. Wahanakarsa Swandiri adalah perusahaan yang bergerak di bidang pengembangan teknologi dan konsultasi
                    bisnis, yang didirikan dengan tujuan membantu perusahaan lain meningkatkan efisiensi operasional dan inovasi
                    melalui solusi teknologi terkini. Dengan tim yang terdiri dari para ahli berpengalaman dalam berbagai
                    disiplin ilmu, PT. Wahanakarsa Swandiri menyediakan layanan konsultasi, implementasi sistem, serta pelatihan
                    yang dirancang khusus untuk memenuhi kebutuhan unik setiap klien. Perusahaan ini berkomitmen untuk mendukung
                    transformasi digital dan pertumbuhan bisnis yang berkelanjutan, serta membangun kemitraan jangka panjang
                    dengan fokus pada kualitas, integritas, dan kepuasan pelanggan.</div>
            </div>
        </div>
    @endcan

    @can('Manajer')
        <div class="card">
            <div class="card-body pt-4 my-auto">
                <img src="/img/Logo-PT-2.png" alt="logo" width="40%">
                <div class="fw-bold fs-3 mt-3">Informasi</div>
                <div>PT. Wahanakarsa Swandiri adalah perusahaan yang bergerak di bidang pengembangan teknologi dan konsultasi
                    bisnis, yang didirikan dengan tujuan membantu perusahaan lain meningkatkan efisiensi operasional dan inovasi
                    melalui solusi teknologi terkini. Dengan tim yang terdiri dari para ahli berpengalaman dalam berbagai
                    disiplin ilmu, PT. Wahanakarsa Swandiri menyediakan layanan konsultasi, implementasi sistem, serta pelatihan
                    yang dirancang khusus untuk memenuhi kebutuhan unik setiap klien. Perusahaan ini berkomitmen untuk mendukung
                    transformasi digital dan pertumbuhan bisnis yang berkelanjutan, serta membangun kemitraan jangka panjang
                    dengan fokus pada kualitas, integritas, dan kepuasan pelanggan.</div>
            </div>
        </div>
    @endcan

    @if (auth()->user()->can('Admin') || auth()->user()->can('Manajer'))
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-header bg-primary" style="padding: 2px"></div>
                    <div class="card info-card sales-card ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Data <span class="text-secondary">| Lorem
                                    1</span>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                                    <i class="bi bi-activity text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-dark">000</h6> <span class="text-muted small pt-2 ps-1">Total
                                        Data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-header bg-primary" style="padding: 2px"></div>
                    <div class="card info-card sales-card ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Data <span class="text-secondary">| Lorem
                                    1</span>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                                    <i class="bi bi-activity text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-dark">000</h6> <span class="text-muted small pt-2 ps-1">Total
                                        Data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-header bg-primary" style="padding: 2px"></div>
                    <div class="card info-card sales-card ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Data <span class="text-secondary">| Lorem
                                    1</span>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                                    <i class="bi bi-activity text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-dark">000</h6> <span class="text-muted small pt-2 ps-1">Total
                                        Data</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
