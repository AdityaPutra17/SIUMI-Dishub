@extends('tamplate')
@section('content')

<div class="content-wraper container">

    <!-- Content Header (Page header) -->
    <section class="content-header py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Presensi</h3>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="px-3">
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded text-center">
                <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Input file untuk unggah foto -->
                    <div class="custom-file justify-content-center align-items-center">
                        <label for="UploadPresensi" class="custom-file border rounded">
                            <!-- Icon sebelum input file -->
                            <i class="fa-regular fa-square-plus fs-1 text-primary" id="uploadIcon"></i>
                            <input type="file" class="custom-file-input" id="UploadPresensi" name="foto" onchange="previewImage()">
                            <div class="custom-file-preview justify-content-center align-items-center" id="customFilePreview">
                            </div>
                        </label>
                    </div>
                    <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
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
                    <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                        <button type="submit" class="btn btn-primary RfContent">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</div>

@endsection
