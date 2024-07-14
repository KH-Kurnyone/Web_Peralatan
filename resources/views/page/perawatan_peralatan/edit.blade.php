@extends('master.index')
<title>Edit Data Perawatan Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1>
            <a href="/perawatan_peralatan" class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
            </a> Edit Data Perawatan Peralatan
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Riwayat Data Perawatan Peralatan</li>
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
                                {{-- Edit Kode Peralatan --}}
                                <label for="kode_peralatan" class="text-dark">Kode Peralatan</label>
                                <input id="kode_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Peralatan" tabindex="1">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Nama Peralatan --}}
                                <label for="nama_peralatan" class="text-dark">Nama Peralatan</label>
                                <input id="nama_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Peralatan" tabindex="2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Edit Nama Pemilik --}}
                                <label for="nama_pemilik" class="text-dark">Nama Pemilik</label>
                                <input id="nama_pemilik" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Pemilik" tabindex="3">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Nama Ruangan --}}
                                <label for="nama_ruangan" class="text-dark">Nama Ruangan</label>
                                <input id="nama_ruangan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Nama Ruangan" tabindex="4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- Edit Keterangan --}}
                                <label for="keterangan" class="text-dark">Keterangan</label>
                                <input id="keterangan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Keterangan" tabindex="5">
                            </div>
                            <div class="col-lg-6">
                                {{-- Edit Jumlah Peralatan --}}
                                <label for="jumlah_peralatan" class="text-dark">Jumlah Peralatan</label>
                                <input id="jumlah_peralatan" type="text" name="" class="form-control mb-2"
                                    placeholder="Edit Jumlah Peralatan" tabindex="6">
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
