@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="ShTitle">Form Konsumsi</h3>
                </div>
                <div class="col-sm-6 ShContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Konsumsi Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-12 px-4 py-3 rounded bg-white">
            <form>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal</label>
                    <input name="tgl_lahir" type="date" class="form-control LKcontent" id="tgl_lahir">
                </div>
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label">Nama Barang</label>
                    <input name="name" type="text" class="form-control form ShContent" id="name" placeholder="Masukkan Nama Barang.">
                </div>
                <div class="mb-3 ShContent">
                    <label for="Date" class="form-label">Quantity</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Quantity">
                </div>
                <div class="mb-3 ShContent">
                    <label for="Date" class="form-label">Anggaran</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Jumlah Anggaran">
                </div>
                <div class="dropdown mb-3 ShContent">
                    <label for="role" class="shift1">Status</label>
                    <select name="role">
                        <option selected disabled>Pilih Status</option>
                        <option value="OfficeBoy">Pengadaan</option>
                        <option value="Security">Penggunaan</option>
                     </select>
                </div>
                <div class="mb-3 ShContent">
                    <label for="Date" class="form-label">Keterangan</label>
                    <input name="email" type="email" class="form-control form ShContent" placeholder="Masukkan Keterangan">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
