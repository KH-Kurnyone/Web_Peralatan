@extends('master.index')
<title>Edit Data Penjadwalan Perawatan</title>
@section('content')
    <div class="pagetitle">
        <h1>
            <a href="/penjadwalan_perawatan" class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
            </a> Edit Data Penjadwalan Perawatan
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Riwayat Data Penjadwalan Perawatan</li>
                <li class="breadcrumb-item active">Edit Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body py-4">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Edit Nama Peralatan --}}
                                <label for="nama_peralatan" class="text-dark">Nama Peralatan</label>
                                <input id="nama_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Peralatan" tabindex="1">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Jenis Penjadwalan --}}
                                <label for="jenis_penjadwalan" class="text-dark">Jenis Penjadwalan</label>
                                <input id="jenis_penjadwalan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Peralatan" tabindex="2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Edit Nama Ruangan --}}
                                <label for="nama_ruangan" class="text-dark">Nama Ruangan</label>
                                <input id="nama_ruangan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Ruangan" tabindex="3">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Jumlah Peralatan --}}
                                <label for="jumlah_peralatan" class="text-dark">Jumlah Peralatan</label>
                                <input id="jumlah_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Jumlah Peralatan" tabindex="4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Edit Status --}}
                                <label for="status" class="text-dark">Status</label>
                                <input id="status" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Status" tabindex="7">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Tanggal --}}
                                <label for="tanggal" class="text-dark">Tanggal</label>
                                <input id="tanggal" type="date" name="" class="form-control mb-2"
                                    placeholder="Edit Tanggal" tabindex="8">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary px-5" tabindex="9">Simpan <i
                                    class="bi bi-check-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
