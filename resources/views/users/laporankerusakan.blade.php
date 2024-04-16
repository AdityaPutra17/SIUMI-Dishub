@extends('tamplate')
@section('content')

<div class="content-wrapper my-5">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 text-center ">
                <div class="col-sm-6">
                    <h1>Laporan Kerusakan</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container py-4">
            <div class="shadow px-5 py-4 mb-4 bg-body-tertiary rounded">
                <form action="{{ route('storeUser') }}" method="POST" enctype="multipart/form-data">
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
