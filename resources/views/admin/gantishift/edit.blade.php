@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="ShTitle">Edit Pergantian Shift</h3>
                </div>
                <div class="col-sm-6 ShContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pergantian Shift</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container ">

        <div class="col px-4 py-3 rounded bg-white">
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label">Nama</label>
                    <input name="name" type="text" class="form-control form ShContent" id="name" placeholder="Masukkan Nama." value="{{ old('name', $user->name) }}">
                </div>
                <div class="mb-3 ShContent">
                    <label for="email" class="form-label">Nama Pengganti</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Nama Pengganti" value="{{ old('nama_pengganti', $user->nama_pengganti) }}">
                </div>
                <div class="mb-3 ">
                    <label for="tgl_lahir" class="form-label">Tanggal</label>
                    <input name="tgl_lahir" type="date" class="form-control LKcontent" id="tgl_lahir" value="{{ old('tg;', $user->tgl) }}">
                </div>
                <div class="dropdown mb-3 ShContent">
                    <label for="role" class="shift1">Pilih Shift</label>
                    <select name="role">
                        <option selected>Pilih Shift</option>
                        <option value="OfficeBoy">Pagi</option>
                        <option value="Security">Malam</option>
                    </select>
                </div>
                <div class="mb-3 ShContent">
                    <label for="email" class="form-label">Keterangan</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Keterangan" value="{{ old('keterangan', $user->keterangan) }}">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
