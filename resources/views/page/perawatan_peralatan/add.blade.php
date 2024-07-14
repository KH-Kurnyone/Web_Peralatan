@extends('master.index')
<title>Input Perawatan Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1>
            <a href="/perawatan_peralatan" class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
            </a> Input Perawatan Peralatan
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Riwayat Data Perawatan Peralatan</li>
                <li class="breadcrumb-item active">Input Data</li>
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
                                {{-- Masukan Kode Peralatan --}}
                                <label for="kode_peralatan" class="text-dark">Kode Peralatan</label>
                                <input id="kode_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Nama Peralatan" tabindex="1">
                            </div>
                            <div class="col-lg-6">
                                {{-- Masukan Nama Peralatan --}}
                                <label for="nama_peralatan" class="text-dark">Nama Peralatan</label>
                                <input id="nama_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Nama Peralatan" tabindex="2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Masukan Nama Karyawan --}}
                                <label for="nama_karyawan" class="text-dark">Nama Karyawan</label>
                                <input id="nama_karyawan" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Nama Karyawan" tabindex="3">
                            </div>
                            <div class="col-lg-6">
                                {{-- Masukan Ruangan Project --}}
                                <label for="ruangan_project" class="text-dark">Ruangan Project</label>
                                <input id="ruangan_project" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Ruangan Project" tabindex="4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Masukan Keterangan --}}
                                <label for="keterangan" class="text-dark">Keterangan</label>
                                <input id="keterangan" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Keterangan" tabindex="5">
                            </div>
                            <div class="col-lg-6">
                                {{-- Masukan Jumlah Peralatan --}}
                                <label for="jumlah_peralatan" class="text-dark">Jumlah Peralatan</label>
                                <input id="jumlah_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Jumlah Peralatan" tabindex="6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Masukan Status --}}
                                <label for="status" class="text-dark">Status</label>
                                <input id="status" type="text" name="" class="form-control mb-2"
                                    placeholder="Masukan Status" tabindex="7">
                            </div>
                            <div class="col-lg-6">
                                {{-- Masukan Tanggal --}}
                                <label for="tanggal" class="text-dark">Tanggal</label>
                                <input id="tanggal" type="date" name="" class="form-control mb-2"
                                    placeholder="Masukan Tanggal" tabindex="8">
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
