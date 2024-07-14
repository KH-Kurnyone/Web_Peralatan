@extends('master.index')
<title>Riwayat Data Laporan Perawatan Peralatan</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-file-earmark-pdf"></i> Riwayat Data Laporan Perawatan Peralatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Riwayat Data Laporan Perawatan Peralatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="mb-3">
            <a href="#" class="btn btn-primary"><i class="bi bi-download"></i> Unduh</a>
            <a href="#" class="btn btn-primary"><i class="bi bi-printer"></i> Print</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card py-3">
                    <div class="card-body table-responsive">
                        <h4 class="text-center mb-3 fw-bold">Laporan Data Perawatan Peralatan</h4>
                        <table class="table table-hover table-bordered">
                            <thead class="table-secondary text-center">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kode Peralatan</th>
                                    <th scope="col">Nama Peralatan</th>
                                    <th scope="col">Nama Pemilik</th>
                                    <th scope="col">Ruangan</th>
                                    <th scope="col">Keterangan</th>
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
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <div class="text-center">
                                <p class="mb-5">Duri, Kamis 19 Juni 2023</p>
                                <p>Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
