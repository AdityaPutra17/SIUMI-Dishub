@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Makan & Minum</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Makan & Minum</li>
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
                <h3 class="card-title">Data Laporan Makan & Minum</h3>
                <div class="card-tools px-5">
                    <a href="/admin/mamins/create" class="btn btn-default bg-success">Add</a>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Quantity</th>
                            <th>Anggaran</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th class="text-center ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($mamins) > 0)
                            @foreach ($mamins as $index => $mamin )
                            <tr>
                                <td>{{$index + 1}}</td>

                                <td>{{$mamin->tanggal}}</td>
                                <td>{{$mamin->name}}</td>
                                <td>{{$mamin->jenis}}</td>
                                <td>{{$mamin->qty}}</td>
                                <td>{{$mamin->anggaran}}</td>
                                <td>{{$mamin->status}}</td>
                                <td>{{$mamin->ket}}</td>{{-- g bisa long text (berantakan kalo long text) --}}
                                <td class="row justify-content-center ">
                                    <div class="col-3">
                                        <a href="{{ route('mamins.show', $mamin->id) }}"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div class="col-3">
                                        <form action="{{ route('mamins.destroy', $mamin->id) }}" method="POST">
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
                                <td colspan="9"  class="text-secondary text-center">Tidak ada Data</td>
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
