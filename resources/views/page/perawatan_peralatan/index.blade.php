@extends('master.index')
<title>Riwayat Data Perawatan Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-tools"></i> Riwayat Data Perawatan Peralatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Riwayat Data Perawatan Peralatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        @can('Karyawan')
            <a href="/perawatan_peralatan/add" class="btn btn-primary px-5 mb-3"><i class="bi bi-plus-lg"></i> Tambah</a>
        @endcan
        @if (auth()->user()->can('Admin') || auth()->user()->can('Manajer'))
            <a href="#" class="btn btn-primary px-5 mb-3"><i class="bi bi-printer-fill"></i> Cetak</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card py-3">
                    <div class="card-body table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col">Kode Peralatan</th>
                                    <th scope="col">Nama Peralatan</th>
                                    <th scope="col">Pemilik</th>
                                    <th scope="col">Ruangan</th>
                                    <th scope="col">Keterangan</th>
                                    @can('Karyawan')
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal</th>
                                    @endcan
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1.</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    @can('Karyawan')
                                        <td>-</td>
                                        <td>-</td>
                                    @endcan
                                    <td>-</td>
                                    <td class="text-center">
                                        <a href="/perawatan_peralatan/edit" class="btn btn-warning"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#perawatan_peralatan"><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal Delete -->
                                <div class="modal fade" id="perawatan_peralatan" tabindex="-1"
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
