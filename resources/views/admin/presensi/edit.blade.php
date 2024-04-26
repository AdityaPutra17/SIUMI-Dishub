@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="ShTitle">Edit Presensi</h3>
                </div>
                <div class="col-sm-6 ShContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Presensi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container ">
        <div class="col px-4 py-3 rounded bg-white">
            <form action="{{ route('presensi.update', $presensi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label">Nama</label>
                    <input name="name" type="text" class="form-control form ShContent" id="name" placeholder="Masukkan Nama." value="{{ old('name', $presensi->jadwal->user->name) }}" disabled>
                </div>
                <select class="form-select text-center RfContent" id="id_jadwal" name="id_jadwal" disabled>
                    <option selected disabled>{{$presensi->jadwal->tgl_masuk}}</option>
                </select>
                <div class="dropdown mb-3 ShContent">
                    <label for="status_hadir" class="shift1">Status Hadir</label>
                    <select name="status_hadir">
                        <option selected >Pilih Status kehadiran</option>
                        <option value="izin">Izin</option>
                        <option value="alpa">Alfa</option>
                        <option value="hadir">Hadir</option>
                        <option value="terlambat">Terlambat</option>
                    </select>
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
