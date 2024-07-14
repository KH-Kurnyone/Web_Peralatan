@extends('master.index')
<title>Data Stok Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1> <i class="bi bi-folder"></i> Data Stok Peralatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Stok Peralatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="d-lg-flex mb-3">
            <div class="mt-4 mb-2">
                <a href="/stok_peralatan/add" class="btn btn-primary px-5"><i class="bi bi-plus-lg"></i> Tambah</a>
            </div>
            <div class="col-lg-3 mx-lg-3 mb-2">
                <label for="dari_tanggal">Dari Tanggal</label>
                <input id="dari_tanggal" type="date" class="form-control" name="">
            </div>
            <div class="col-lg-3 mb-2">
                <label for="sampai_tanggal">Sampai Tanggal</label>
                <div class="input-group">
                    <input id="sampai_tanggal" type="date" class="form-control" name="">
                    <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card py-3">
                    <div class="card-body table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col">Nama Peralatan</th>
                                    <th scope="col">Merek Peralatan</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1.</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td class="text-center">
                                        <a href="/stok_peralatan/edit" class="btn btn-warning"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#stok_peralatan"><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal Delete -->
                                <div class="modal fade" id="stok_peralatan" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-bold text-danger" id="exampleModalLabel">
                                                    <i class="bi bi-info-circle"></i> Informasi
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">Apakah anda yakin akan menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-danger px-5">Konfirmasi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
