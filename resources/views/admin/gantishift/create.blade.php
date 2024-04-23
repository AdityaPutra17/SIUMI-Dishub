@extends('admin.tamplate')
@section('contentadmin')

<div class="container">
        <div class="py-5 px-sm-4">
            <h3 class="mb-3 shift">Pengajuan Pergantian Shift</h3>
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded">
                <form>
                    <div class="mb-3 shift1">
                        <label for="id_user">Nama Karyawan:</label>
                        <select name="id_user" id="id_user" required>
                            <option selected disabled>Pilih Nama Karyawan</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 shift1">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control form" name="tanggal" id="tanggal">
                    </div>
                    <div class="dropdown mb-3 shift1">
                        <label for="id_shift">Shift:</label>
                        <select name="id_shift" id="id_shift" required>
                            <option selected disabled>Pilih Shift</option>
                            @foreach ($shifts as $shift)
                                <option value="{{ $shift->id }}">{{ $shift->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 shift1">
                        <label for="Description" class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control form" id="Description" rows="3" placeholder="Masukan keterangan."></textarea>
                    </div>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto mt-5">
                <button type="submit" class="btn btn-primary LKcontent">Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>

@endsection
