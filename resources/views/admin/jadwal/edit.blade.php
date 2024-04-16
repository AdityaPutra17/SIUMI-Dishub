@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="ShTitle">Jadwal Security</h3>
                </div>
                <div class="col-sm-6 ShContent">
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
                <div class="dropdown mb-3 ShContent">
                    <p class="shift1">Pilih Shift</p>
                    <button class="btn btn-secondary dropdown-toggle form ShContent" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shift
                    </button>
                    <ul class="dropdown-menu ShContent">
                        <li><a class="dropdown-item form" href="#">Pagi</a></li>
                        <li><a class="dropdown-item form" href="#">Malam</a></li>
                    </ul>
                </div>

                <div class="d-grid gap-2 col-3 mx-auto mt-5">
                    <button type="submit" class="btn btn-primary ShContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
