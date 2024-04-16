@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row my-2 container">
            <div class="col-1">
                <a style="font-size: 20px"  class="text-center" href="/admin/datakaryawan"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <div class="col-6">
                <h3 class="RfTitle">Detail Karyawan</h3>
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
                                <p>: {{$user->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Email</p>
                            </div>
                            <div class="col">
                                <p>: {{$user->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Tanggal Lahir</p>
                            </div>
                            <div class="col">
                                <p>: {{$user->tgl_lahir}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Jabatan</p>
                            </div>
                            <div class="col">
                                <p>: {{$user->role}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-end">
                        @if ($user->foto)
                            <img src="{{ asset('storage/'. $user -> foto) }}" alt="Foto Profil" width="300px">
                            <br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
