@extends('admin.tamplate')
@section('contentadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Presensi Detail</h1>
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
                        <label for="Date" class="col-form-label">Tanggal :</label>
                    </div>
                    <div class="col-auto d-flex gap-1">
                        <input type="date" id="SearchDate" class="form-control" >
                        <button onclick="filterByDate()" class="btn btn-secondary ">search</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-striped rounded" id="presensiTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th class="text-center">action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($presensis as $index =>$presensi )
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$presensi->jadwal->user->name}}</td>
                                <td>{{$presensi->created_at->format('Y-m-d')}}</td>
                                <td><span class="tag tag-success">{{$presensi->status_hadir}}</span></td>
                                <td>{{$presensi->ket}}</td>
                                <td class="row justify-content-center ">
                                    <div class="col-2">
                                        <a href="{{ route('presensi.show', $presensi->id) }}"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('presensi.edit', $presensi->id) }}"><i class="fa-solid fa-file-pen"></i></a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ route('presensi.destroy', $presensi->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-white">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
