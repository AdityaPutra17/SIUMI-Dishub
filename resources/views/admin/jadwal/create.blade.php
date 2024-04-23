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
        <div class="py-4 px-3">
            <div class="shadow px-3 py-4 mb-4 bg-body-tertiary rounded">
                @if ($errors->any())
                <div>
                    <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                    <div>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{route('jadwal.store')}}" method="POST">
                    @csrf
                    <div class="row pb-2">
                        <div class="col-2">
                            <label for="id_user" class="align-middle">Nama Karyawan</label><br>
                        </div>
                        <div class="col-10">
                            <select name="id_user" id="id_user" class="text-center form-select RfContent text-capitalize" value={{old('id_user')}} required>
                                <option selected disabled>Pilih Nama karyawan</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" class="text-capitalize">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-2">
                            <label for="id_shift" class="align-middle">Shift</label>
                        </div>
                        <div class="col-10">
                            <select name="id_shift" id="id_shift" class="text-center form-select RfContent text-capitalize" value={{old('id_shift')}} required>
                                <option selected disabled>Pilih shift</option>
                                @foreach ($shifts as $shift)
                                    <option value="{{ $shift->id }}" class="text-capitalize">{{ $shift->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-2">
                            <label for="tgl_masuk" class="align-middle">Tanggal Masuk</label>
                        </div>
                        <div class="col-10">
                            <input type="date" name="tgl_masuk" id="tgl_masuk" class="text-center text-uppercase form-control RfContent" value={{old('tgl_masuk')}} required>
                        </div>
                    </div>
                    <div class="mx-auto justify-content-center py-3 text-center">
                        <button type="submit" class="btn btn-primary RfContent">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

@endsection
