@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="RfTitle">Jadwal Security</h3>
                </div>
                <div class="col-sm-6 RfContent">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Jadwal Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-12 px-4 py-3 rounded bg-white">
            <form>
                <div class="mb-3 ShContent">
                    <label for="name" class="form-label ">Nama</label>
                    <input type="text" class="form-control form ShContent" id="name" placeholder="Masukan Nama."></input>
                </div>
                <div class="mb-3 ShContent">
                    <label for="Date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control form ShContent" id="Date">
                </div>
                <div aria-rowcount="" class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3 text-center">
                    <p><strong>Pilih Shift</strong></p>
                    <div class="input-group RfContent">
                        <select class="form-select text-center RfContent" id="PilihJadwal">
                            <option selected disabled>Shift</option>
                            <option value="1">06.00 - 18.00</option>
                            <option value="2">18.00 - 06.00</option>
                        </select>
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
