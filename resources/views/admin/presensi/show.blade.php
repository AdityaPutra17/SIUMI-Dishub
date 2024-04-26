@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wraper container">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row my-2 container ">
                <div class="col-1">
                    <a style="font-size: 20px"  class="text-center" href="{{ route('admin.presensi.index') }}"><i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="col-6">
                    <h3 class="RfTitle">Detail Presensi</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content py-3 px-5 d-flex justify-content-center">
        <div class="col-12">
            <div class="container p-3 bg-white rounded shadow p-3 mb-5 bg-body-tertiary">
                <div class="row">
                    <div class="col">
                        <p><strong>Nama</strong></p>
                    </div>
                    <div class="col">
                        <p>: {{$presensi->jadwal->user->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Tanggal </strong></p>
                    </div>
                    <div class="col">
                        <p>: {{$presensi->created_at->format('Y-m-d')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Status </strong></p>
                    </div>
                    <div class="col">
                        <p>: {{$presensi->status_hadir}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><strong>Keterangan </strong></p>
                    </div>
                    <div class="col">
                        <p>: {{$presensi->ket}}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{asset('storage/'. $presensi -> foto_selfie)}}" alt="Bukti Kehadiran"  height="250px">
                        <br>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
