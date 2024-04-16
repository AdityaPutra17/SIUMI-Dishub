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

    <h2>Create Jadwal</h2>

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
        <div>
            <label for="id_user">Nama Karyawan:</label>
            <select name="id_user" id="id_user" required>
                <option selected disabled>Pilih Nama Karyawan</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="id_shift">Shift:</label>
            <select name="id_shift" id="id_shift" required>
                <option selected disabled>Pilih Shift</option>
                @foreach ($shifts as $shift)
                    <option value="{{ $shift->id }}">{{ $shift->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tgl_masuk">Tanggal Masuk:</label>
            <input type="date" name="tgl_masuk" id="tgl_masuk" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
