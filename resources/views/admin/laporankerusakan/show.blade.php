@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row my-2 container ">
            <div class="col-1">
                <a style="font-size: 20px"  class="text-center" href="{{ route('laporankerusakan.index') }}"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="col-6">
                <h3 class="RfTitle">Detail Laporan Kerusakan</h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content py-3 px-5 d-flex justify-content-center">
        <div class="col-12">
            <div class="container p-3 bg-white rounded shadow p-3 mb-5 bg-body-tertiary">
                <div class="row">
                    <div class="col">
                        <p><strong>Nama Pengaju</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{ $kerusakan->user->name }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Role</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{ $kerusakan->user->role }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Tanggal Pengajuan</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{ $kerusakan->user->created_at }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Nama Barang</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{ $kerusakan->nama_brg }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Keterangan</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{ $kerusakan->ket }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    @if ($kerusakan->gmbr_brg)
                        <img src="{{ asset('storage/'. $kerusakan -> gmbr_brg) }}" alt="Gambar Barang" width="40%">
                        <br>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
