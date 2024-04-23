@extends('tamplate')
@section('content')

<div class="content-wraper container">

    <!-- Content Header (Page header) -->
    <section class="content-header px-3 py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Pengajuan Pergantian Shift</h3>
        </div>
    </section>

     <!-- Main content -->
    <section class="content">
        <div class="py-4 px-3">
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded">
                <form action="{{route('gantishift.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_user_uploader" value="{{ Auth::id() }}">
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="id_user" class="form-label RfContent">Nama Pengganti</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <select name="id_user" id="id_user" class="text-center form-select RfContent text-capitalize" required>
                                <option selected disabled>Pilih Nama Karyawan</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" class="text-capitalize">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="id_jadwal" class="form-label">Tanggal</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <select name="id_jadwal" id="id_jadwal" class="text-center form-select RfContent text-capitalize" required>
                                <option selected disabled>Pilih Tanggal</option>
                                @foreach ($jadwals as $jadwal)
                                    <option value="{{ $jadwal->id }}" class="text-capitalize">{{ $jadwal->tgl_masuk }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label class="shift1" for="id_shift">Pilih Shift</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <select name="id_shift" id="id_shift" class="text-center form-select RfContent text-capitalize" required>
                                <option selected disabled>Pilih Shift</option>
                                @foreach ($shifts as $shift)
                                    <option value="{{ $shift->id }}" class="text-capitalize">{{ $shift->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pb-3 row-cols-1 row-cols-sm-2">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label for="ket" class="form-label">Keterangan</label>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8">
                            <textarea name="ket" type="text" class="form-control form" id="ket" rows="3" placeholder="Masukan keterangan."></textarea>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-lg-2 col-md-3 col-sm-4 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary RfContent">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
