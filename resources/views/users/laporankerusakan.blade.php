@extends('tamplate')
@section('content')

<div class="content-wrapper container">

    <!-- Content Header (Page header) -->
    <section class="content-header py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Laporan Kerusakan</h3>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="px-2">
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded">
                <form action="{{ route('storeUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="RfContent">
                        <input type="hidden" name="id_user" value="{{ Auth::id() }}">
                        <div class="mb-3">
                            <label for="nama_brg" class="form-label">Nama Barang</label>
                            <input name="nama_brg" type="text" class="form-control RfContent" id="nama_brg"
                            placeholder="Masukan nama barang rusak." required>
                        </div>
                        <div class="mb-3">
                            <label for="ket" class="form-label">Keterangan</label>
                            <textarea name="ket" type="text" class="form-control RfContent" id="ket" rows="3"
                            placeholder="Masukan keterangan." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gmbr_brg" class="form-label ">Upload Foto Kerusakan</label>
                            <input name="gmbr_brg" class="form-control RfContent" type="file" id="gmbr_brg" >
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-lg-2 col-md-3 col-sm-4 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary RfContent">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


@endsection
