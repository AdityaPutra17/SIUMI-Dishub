@extends('admin.tamplate')
@section('contentadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Karyawan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Karyawan</li>
                    </ol>
                </div>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Karyawan</h3>
                    <div class="card-tools px-3">
                        <a href="/admin/jadwal/create" class="btn btn-default bg-success">Add</a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama</th>
                                <th>Tanggal</th>
                            </tr>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ( $users as $index => $user ) --}}
                            <tr>
                                <td>1</td>
                                <td>Ujank</td>
                                <td>22/4</td>
                                <td>23/4</td>
                                <td>25/4</td>
                            </tr>
                            {{-- @endforeach --}}
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
