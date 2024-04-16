@extends('tamplate')
@section('content')

<div class="content-wraper">

    <!-- Content Header (Page header) -->
    <section class="content-header px-3 py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Presensi</h3>
        </div>
    </section>

    <!-- Main content -->
    <section class="content p-3">
        <div class="text-center pb-5">
            <div class="">
                <div class="input-group">
                    <input type="file" class="form-control" id="UploadKehadiran">
                </div>
            </div>
            <div class="dropdown-center RfContent">
                <div aria-rowcount="" class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                    <p>Pilih Jadwal</p>
                    <div class="input-group RfContent">
                        <select class="form-select text-center RfContent" id="PilihJadwal">
                            <option selected disabled>Pilih Waktu</option>
                            <option value="1">06.00 - 18.00</option>
                            <option value="2">18.00 - 06.00</option>
                            <option value="3">07.30 - 16.00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                <button type="submit" class="btn btn-primary RfContent">Submit</button>
            </div>
        </div>
    </section>
</div>
@endsection
