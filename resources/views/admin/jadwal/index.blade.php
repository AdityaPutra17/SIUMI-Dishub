@extends('admin.tamplate')
@section('contentadmin')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jadwal Security</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jadwal Security</li>
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
                    <h3 class="card-title">Data Jadwal</h3>
                    <div class="card-tools px-5">
                        <a href="/admin/jadwal/create" class="btn btn-default bg-success">Add</a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>Tanggal Masuk</th>
                                <th>Shift</th>
                                <th class="text-center ">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($jadwals)>0)
                                @php
                                    $prevName = null;
                                @endphp
                                @foreach ($jadwals as $index => $jadwal)
                                    @if ($jadwal->user->name !== $prevName)
                                        <tr>
                                            <td rowspan="{{ $jadwals->where('user.name', $jadwal->user->name)->count() }}">{{ $jadwal->user->name }}</td>
                                            <td>{{ $jadwal->tgl_masuk }}</td>
                                            <td>{{ $jadwal->shift->nama }}</td>
                                            <td class="row justify-content-center ">
                                                <div class="col-2">
                                                    <a href="{{ route('jadwal.show', $jadwal->id) }}"><i class="fas fa-eye"></i></a>
                                                </div>
                                                <div class="col-2">
                                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}"><i class="fa-solid fa-file-pen"></i></a>
                                                </div>
                                                <div class="col-2">
                                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-white">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                            $prevName = $jadwal->user->name;
                                        @endphp
                                    @else
                                        <tr>
                                            <td>{{ $jadwal->tgl_masuk }}</td>
                                            <td>{{ $jadwal->shift->nama }}</td>
                                            <td class="row justify-content-center ">
                                                <div class="col-2">
                                                    <a href="{{ route('jadwal.show', $jadwal->id) }}"><i class="fas fa-eye"></i></a>
                                                </div>
                                                <div class="col-2">
                                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}"><i class="fa-solid fa-file-pen"></i></a>
                                                </div>
                                                <div class="col-2">
                                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-white">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-secondary text-center ">Data tidak ada</td>
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
