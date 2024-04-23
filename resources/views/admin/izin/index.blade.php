@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Pengajuan Izin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pengajuan Izin</li>
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
                    <h3 class="card-title">Data Laporan Pengajuan Izin</h3>
                    <div class="card-tools px-5">
                        <a href="#" class="btn btn-default bg-success">Add</a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th class="text-center ">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($izins)>0)
                                @foreach ($izins as $index => $izin)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$izin->user->name}}</td>
                                        <td>{{$izin->tgl_mulai}}</td>
                                        <td>{{$izin->tgl_selesai}}</td>
                                        <td class="row justify-content-center ">
                                            <div class="col-3">
                                                <a href="{{ route('izin.show', $izin->id) }}"><i class="fas fa-eye"></i></a>
                                            </div>
                                            <div class="col-3">
                                                <form action="{{ route('izin.destroy', $izin->id) }}" method="POST">
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
                                <td colspan="5" class="text-center text-secondary">Data Tidak Ada</td>
                            </tr>

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
