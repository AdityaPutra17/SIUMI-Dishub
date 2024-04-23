@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengajuan Ganti Shift</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pergantian Shift Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pergantian Shift</h3>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Nama Pengganti</th>
                                <th>Shift</th>
                                <th>Keterangan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($gantiShifts)>0)
                                @foreach ($gantiShifts as $index => $gs)
                                    <tr>

                                        <th>{{$index + 1}}</th>
                                        <td>{{$gs->jadwal->tgl_masuk}}</td>
                                        <td>{{$gs->uploader->name}}</td>
                                        <td>{{$gs->user->name}}</td>
                                        <td>{{$gs->shift->nama}}</td>
                                        <td>{{$gs->ket}}</td>
                                        <td class="row justify-content-center ">
                                            <div class="col-3">
                                                <a href="{{ route('gantishift.show', $gs->id) }}"><i class="fas fa-eye"></i></a>
                                            </div>
                                            <div class="col-3">
                                                <form action="{{ route('gantishift.destroy', $gs->id) }}" method="POST">
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
                            @else
                                <tr>
                                    <td colspan="7" class="text-center text-secondary">Data Tidak Ada</td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


@endsection
