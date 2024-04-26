@extends('admin.tamplate')
@section('contentadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Presensi Security</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Presensi Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row px-3 pb-3">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="Name" class="col-form-label">Nama :</label>
                    </div>
                    <div class="col-auto d-flex gap-1">
                        <input type="text" id="Name" class="form-control">
                        <button onclick="filterByName()" class="btn btn-secondary ">Search</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('presensi.exportPDF') }}" class="btn btn-primary" target="_blank">Export</a>
            </div>
        </div>

        <div class="col-12" >
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-striped rounded" id="userTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Presensi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($users as $index => $us )
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->role}}</td>
                                <td>
                                    <div class="col-2">
                                        <a href="{{ route('admin.presensi.detail', ['id' => $us->id]) }}"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
