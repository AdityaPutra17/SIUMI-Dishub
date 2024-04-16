@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="ShTitle">Registrasi Karyawan</h3>
                </div>
                <div class="col-sm-6 ShContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Registrasi Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container ">

        <div class="col px-4 py-3 rounded bg-white">
            <form action="{{route('datakaryawan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label">Nama</label>
                    <input name="name" type="text" class="form-control form ShContent" id="name" placeholder="Masukkan Nama." value={{old('name')}}>
                </div>
                <div class="mb-3 ShContent">
                    <label for="Date" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan password anda">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control LKcontent" id="tgl_lahir">
                </div>
                <div class="dropdown mb-3 ShContent">
                    <label for="role" class="shift1">Pilih Role</label>
                    <select name="role">
                        <option selected>Pilih Role</option>
                        <option value="OfficeBoy">Office Boy</option>
                        <option value="Security">Security</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Upload Foto Profil</label>
                    <input name="foto" class="form-control LKcontent" type="file" id="foto">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
