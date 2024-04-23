@extends('tamplate')
@section('content')

<div class="container content-wraper">

    <!-- Content Header (Page header) -->
    <section class="content-header px-3 py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Pengajuan Izin</h3>
        </div>
    </section>

    <section class="content">
        <div class="py-4 px-3">
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded">
                <form action="{{route('izin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ Auth::id() }}">
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="Date" name="tgl_mulai" class="form-control RfContent" id="tgl_mulai" required>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="date" name="tgl_selesai" class="form-control RfContent" id="tgl_selesai">
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="lampiran" class="form-label">Lampiran</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <input name="lampiran" class="form-control RfContent" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="status">Status</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <select name="status" id="id_shift" class="text-center form-select RfContent text-capitalize" required>
                                <option selected disabled>Pilih Status</option>
                                <option value="izin" class="text-capitalize">Izin</option>
                                <option value="sakit" class="text-capitalize">Sakit</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="keterangan" class="form-label">Keterangan</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <textarea name="keterangan" type="text" class="form-control form" id="keterangan" rows="3" placeholder="Masukan keterangan."></textarea>
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
