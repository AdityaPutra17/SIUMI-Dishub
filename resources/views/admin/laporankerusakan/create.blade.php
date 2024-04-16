@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="RfTitle">Laporan Kerusakan</h3>
                </div>
                <div class="col-sm-6 RfContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Kerusakan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="py-4 px-3">
            <div class="shadow px-5 py-4 mb-4 bg-body-tertiary rounded">
                <form action="{{ route('laporankerusakan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="LKcontent">
                        <input type="hidden" name="id_user" value="{{ Auth::id() }}">
                        <div class="mb-3 ">
                            <label for="nama_brg" class="form-label">Nama Barang</label>
                            <input name="nama_brg" type="text" class="form-control LKcontent" id="nama_brg"
                            placeholder="Masukan nama barang rusak." required>
                        </div>
                        <div class="mb-3">
                            <label for="ket" class="form-label">Keterangan</label>
                            <textarea name="ket" type="text" class="form-control LKcontent" id="ket" rows="3"
                            placeholder="Masukan keterangan." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gmbr_brg" class="form-label ">Upload Foto Kerusakan</label>
                            <input name="gmbr_brg" class="form-control LKcontent" type="file" id="gmbr_brg" >
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary LKcontent">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


@endsection
