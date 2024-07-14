@extends('master.index')
<title>Riwayat Data Pengajuan Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-activity"></i> Riwayat Data Pengajuan Peralatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Riwayat Data Pengajuan Peralatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="d-lg-flex mb-3">
            @can('Karyawan')
                <a href="/pengajuan_peralatan/add" class="btn btn-primary px-5"><i class="bi bi-plus-lg"></i> Tambah</a>
            @endcan
            @if (auth()->user()->can('Admin') || auth()->user()->can('Manajer'))
                <div class="col-lg-3 mb-1">
                    <label for="dari_tanggal">Dari Tanggal</label>
                    <input id="dari_tanggal" type="date" class="form-control" name="">
                </div>
                <div class="col-lg-3 mx-lg-3 mb-1">
                    <label for="sampai_tanggal">Sampai Tanggal</label>
                    <div class="input-group">
                        <input id="sampai_tanggal" type="date" class="form-control" name="">
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary px-5"><i class="bi bi-printer-fill"></i> Cetak</a>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card py-3">
                    <div class="card-body table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    {{-- <th scope="col">Kode Pengajuan</th> --}}
                                    <th scope="col">Kode Peralatan</th>
                                    <th scope="col">Nama Peralatan</th>
                                    @if (auth()->user()->can('Admin') || auth()->user()->can('Manajer'))
                                        <th scope="col">Nama Pengaju</th>
                                    @endif
                                    @can('Karyawan')
                                        <th scope="col">Nama Karyawan</th>
                                    @endcan
                                    <th scope="col">Ruangan</th>
                                    @can('Karyawan')
                                        <th scope="col">Keterangan</th>
                                    @endcan
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal</th>
                                    @can('Karyawan')
                                        <th scope="col">Status</th>
                                        <th scope="col">No. Whatsapp</th>
                                    @endcan
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1.</th>
                                    {{-- <td>-</td> --}}
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    @can('Karyawan')
                                        <td>-</td>
                                    @endcan
                                    <td>-</td>
                                    <td>-</td>
                                    @can('Karyawan')
                                        <td>-</td>
                                        <td>-</td>
                                    @endcan
                                    <td class="text-center">
                                        <a href="/pengajuan_peralatan/edit" class="btn btn-warning"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#pengajuan_peralatan"><i class="bi bi-trash3-fill"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal Delete -->
                                <div class="modal fade" id="pengajuan_peralatan" tabindex="-1"
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
