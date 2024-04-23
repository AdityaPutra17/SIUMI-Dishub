@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row my-2 container">
            <div class="col-1">
                <a style="font-size: 20px"  class="text-center" href="/admin/izin"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="col-6">
                <h3 class="RfTitle">Detail Pengajuan Izin</h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content py-3 px-5 d-flex justify-content-center">
        <div class="col-12">
            <div class="container p-3 bg-white rounded shadow p-3 mb-5 bg-body-tertiary">
                <div class="row">
                    <div class="col">
                        <p>Nama</p>
                    </div>
                    <div class="col">
                        <p>: {{$izin->user->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Tanggal Mulai</p>
                    </div>
                    <div class="col">
                        <p>: {{$izin->tgl_mulai}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Tanggal Selesai</p>
                    </div>
                    <div class="col">
                        <p>: {{$izin->tgl_selesai}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Keterangan</p>
                    </div>
                    <div class="col">
                        <p>: {{$izin->keterangan}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Lampiran</p>
                    </div>
                    <div class="col-md-auto d-flex justify-content-end">
                        @if ($izin->lampiran)
                            <img src="{{ asset('storage/'. $izin -> lampiran) }}" alt="Gambar Barang" width="40%">
                            <br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
