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
    <section class="content container ">
        <div class="col px-4 py-3 rounded bg-white">
            <form action="{{route('mamins.store')}}" method="POST" >
                @csrf
                <div class="dropdown mb-3 ShContent">
                    <label for="jenis" class="shift1">Pilih Jenis Mamin</label>
                    <select name="jenis">
                        <option selected>Pilih Jenis Mamin</option>
                        <option value="konsumsi">Konsumsi</option>
                        <option value="natura">Natura</option>
                    </select>
                </div>
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label">Nama Barang</label>
                    <input name="name" type="text" class="form-control form ShContent" id="name" placeholder="Masukkan Nama barang">
                </div>
                <div class="mb-3 ShContent">
                    <label for="qty" class="form-label">qty</label>
                    <input name="qty" id="qty" class="form-control form ShContent" placeholder="Masukkan Jumlah Volume">
                </div>
                <div class="mb-3">
                    <label for="anggaran" class="form-label">Anggaran</label>
                    <div class="input-group">
                        <input name="anggaran" class="form-control" id="anggaran" placeholder="Masukkan Anggaran">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control LKcontent" id="tanggal">
                </div>
                <div class="dropdown mb-3 ShContent">
                    <label for="status" class="shift1">Pilih Status</label>
                    <select name="status">
                        <option selected>Pilih Status</option>
                        <option value="pengadaan">Pengadaan</option>
                        <option value="penggunaan">Penggunaan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ket" class="form-label">Keterangan</label>
                    <div class="input-group">
                        <input name="ket" class="form-control" id="ket" placeholder="Keterangan">
                    </div>
                </div>

                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
