@extends('tamplate')
@section('content')
    <div class="container">
        <div class="py-5 px-sm-4"> <!-- Added px-sm-4 for horizontal padding adjustment for small screens -->
            <h3 class="mb-3 shift">Pengajuan Pergantian Shift</h3>
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded">
                <!-- Added p-sm-4 for padding adjustment on small screens -->
                <form>
                    <div class="mb-3 shift1">
                        <label for="Description" class="form-label">Nama</label>
                        <textarea type="text" class="form-control form" id="Description" rows="1" placeholder="Masukan Nama."></textarea>
                    </div>
                    <div class="mb-3 shift1">
                        <label for="Date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control form" id="ItemName">
                    </div>
                    <div class="dropdown mb-3 shift1">
                        <h3 class="shift1">Pilih Shift</h3>
                        <button class="btn btn-secondary dropdown-toggle form" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Shift
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item form" href="#">Pagi</a></li>
                            <li><a class="dropdown-item form" href="#">Malam</a></li>
                        </ul>
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
