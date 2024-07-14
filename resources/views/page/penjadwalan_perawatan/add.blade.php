@extends('master.index')
<title>Input Data Penjadwalan Perawatan</title>
@section('content')
    <div class="pagetitle">
        <h1>
            <a href="/penjadwalan_perawatan" class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
            </a> Input Data Penjadwalan Perawatan
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Riwayat Data Pengajuan Peralatan</li>
                <li class="breadcrumb-item active">Input Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body py-4">
                    <form action="">
                        <div class="col-lg-12">
                            {{-- Masukan Nama Peralatan --}}
                            <label for="nama_peralatan" class="text-dark">Nama Peralatan</label>
                            <input id="nama_peralatan" type="text" name="" class="form-control mb-2"
                                placeholder="Masukan Nama Peralatan" tabindex="1">
                        </div>
                        <div class="col-lg-12">
                            {{-- Masukan Kondisi Peralatan --}}
                            <label for="kondisi_peralatan" class="text-dark">Kondisi Peralatan</label>
                            <select name="" id="" class="form-select mb-2" tabindex="2">
                                <option value="" disabled selected hidden>Baik</option>
                                <option value="">Rusak Ringan</option>
                                <option value="">Rusak Berat</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            {{-- Masukan Jadwal Perawatan --}}
                            <label for="jadwal_perawatan" class="text-dark">Jadwal Perawatan</label>
                            <input id="jadwal_perawatan" type="text" name="" class="form-control mb-2"
                                placeholder="Masukan Nama Ruangan" tabindex="3">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary px-5" tabindex="4">Simpan <i
                                    class="bi bi-check-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
