@extends('tamplate')
@section('content')
    <div class="container-lg py-5">
        <div class="shadow p-5 my-5 bg-body-tertiary rounded">
            <div class="row justify-content-between">
                <div class="profile col-lg-2 col-md-3 col-sm-3 col-3">
                    {{-- ganti foto --}}
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp"
                        class="profile-img rounded-circle img-fluid shadow-1" alt="woman avatar" width="60%"
                        height="60%" />
                </div>
                <div class="col-nama col-lg-9 col-md-8 col-sm-8 col-8 align-content-center">
                    <h4 class="nama fw-bold">{{ Auth::user()->name }}</h4>
                    <p class="role">{{ Auth::user()->role }}</p>
                </div>
                <form action="/logout" method="POST" class="logout col-lg-1 col-md-1 col-sm-1 col-1">
                    @csrf
                    <button type="submit" href="" class="text-dark fs-3 border-0 bg-light">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </form>
            </div>
            <div class="menu row mt-5 justify-content-between">
                <a href="/presensi"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book fs-4 "></i>
                    <p class="">Presensi</p>
                </a>
                <a href="/home/laporankerusakan"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book fs-4"></i>
                    <p class="">Laporan <br /> Kerusakan</p>
                </a>
                <a href="/lihatpresensi"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book-open fs-4"></i>
                    <p class="">Lihat <br /> Presensi</p>
                </a>
                <a href="/pengajuanizin"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-table-list fs-4"></i>
                    <p class="">Pengajuan <br /> Izin</p>
                </a>
            </div>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="title row justify-content-between my-5  ">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <h3 class="jadwal fw-bold">Jadwal Kerja</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end ">
                <a href="/pergantianshift"
                    class="ganti-shift bg-main-color text-light p-3 rounded-3 text-decoration-none fw-bolder ">Ganti
                    Shift</a>
            </div>
        </div>
        <div class="my-5">
            <table class="table table-striped rounded  ">
                <thead>
                    <tr class="bg-main-color">
                        <th colspan="4" class=" bulan text-center text-light">Maret</th>
                    </tr>
                    <tr class="bg-blue-table text-light">
                        <th class="title-table" scope="col">No.</th>
                        <th class="title-table" scope="col">Tanggal</th>
                        <th class="title-table" scope="col">Shift</th>
                        <th class="title-table" scope="col">Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-yellow-table">
                        <th class="isi-table" scope="row">1</th>
                        <td class="isi-table">Fawaz</td>
                        <td class="isi-table">Pagi</td>
                        <td class="isi-table">06.00 - 18.00</td>
                    </tr>
                    <tr class="bg-blue-table">
                        <th class="isi-table" scope="row">2</th>
                        <td class="isi-table">Jacob</td>
                        <td class="isi-table">Thornton</td>
                        <td class="isi-table">@fat</td>
                    </tr>
                    <tr class="bg-yellow-table">
                        <th class="isi-table" scope="row">3</th>
                        <td class="isi-table">Larry the Bird</td>
                        <td class="isi-table">Pagi</td>
                        <td class="isi-table">@twitter</td>
                    </tr>
                    <tr class="bg-blue-table">
                        <th class="isi-table" scope="row">4</th>
                        <td class="isi-table">Jacob</td>
                        <td class="isi-table">Thornton</td>
                        <td class="isi-table">@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
