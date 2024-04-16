@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row my-2 container">
            <div class="col-1">
                <a style="font-size: 20px"  class="text-center" href="/admin/mamins"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="col-6">
                <h3 class="RfTitle">Detail Laporan</h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content py-3 px-5 d-flex justify-content-center">
        <div class="col-12">
            <div class="container p-3 bg-white rounded shadow p-3 mb-5 bg-body-tertiary">
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <p>Tanggal</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->tanggal}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Jenis Makan & Minum</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->jenis}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Nama Barang</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Quantity</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->qty}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Anggaran</p>
                        </div>
                        <div class="col">
                            <p>: Rp. {{$mamin->anggaran}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Status</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->status}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Keterangan</p>
                        </div>
                        <div class="col">
                            <p>: {{$mamin->ket}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
