@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row my-2 container">
            <div class="col-1">
                <a style="font-size: 20px"  class="text-center" href="/admin/gantishift"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="col-6">
                <h3 class="RfTitle">Detail Pergantian Shift</h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content py-3 px-5 d-flex justify-content-center">
        <div class="col-12">
            <div class="container p-3 bg-white rounded shadow p-3 mb-5 bg-body-tertiary">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>Nama</p>
                            </div>
                            <div class="col">
                                <p>: {{$gantiShift->uploader->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Nama Pengganti</p>
                            </div>
                            <div class="col">
                                <p>: {{$gantiShift->user->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Tanggal</p>
                            </div>
                            <div class="col">
                                <p>: {{$gantiShift->jadwal->tgl_masuk}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Shift</p>
                            </div>
                            <div class="col">
                                <p>: {{$gantiShift->shift->nama}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Keterangan</p>
                            </div>
                            <div class="col">
                                <p>: {{$gantiShift->ket}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
