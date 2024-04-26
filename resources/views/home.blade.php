@extends('tamplate')
@section('content')
    <div class="container-lg">
        <div class="shadow p-5 my-5 bg-body-tertiary rounded">
            {{-- Profile --}}
            <div class="row justify-content-between">
                {{-- Photo Profile --}}
                <div class="profile col-lg-2 col-md-3 col-sm-3 col-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp"
                        class="profile-img rounded-circle img-fluid shadow-1" alt="woman avatar" width="60%"
                        height="60%" />
                </div>
                {{-- User Identity --}}
                <div class="col-nama col-lg-9 col-md-8 col-sm-8 col-8 align-content-center">
                    {{-- Name --}}
                    <h4 class="RfTitle text-capitalize fw-bold">{{ Auth::user()->name }}</h4>
                    {{-- Role --}}
                    <p class="RfContent role">{{ Auth::user()->role }}</p>
                </div>
                {{-- Sign Out --}}
                <form action="/logout" method="POST" class="logout col-lg-1 col-md-1 col-sm-1 col-1">
                    @csrf
                    <button type="submit" href="" class="text-dark fs-3 border-0 bg-white">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </form>
            </div>

            {{-- Menu --}}
            <div class="menu row mt-5 justify-content-between">
                {{-- Button Presensi --}}
                <a href="/home/presensi"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book fs-4 "></i>
                    <p class="">Presensi</p>
                </a>
                {{-- Button Laporan Kerusakan --}}
                <a href="/home/laporankerusakan"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book fs-4"></i>
                    <p class="">Laporan <br /> Kerusakan</p>
                </a>
                {{-- Button Lihat Presensi --}}
                <a href="/home/lihatpresensi"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-book-open fs-4"></i>
                    <p class="">Lihat <br /> Presensi</p>
                </a>
                {{-- Button Pengajuan Izin --}}
                <a href="/home/izin"
                    class="col-lg-2 col-md-2 col-sm-3 col-5 bg-main-color rounded yellow-color p-2 text-center align-content-center text-decoration-none">
                    <i class="icon fa-solid fa-table-list fs-4"></i>
                    <p class="">Pengajuan <br /> Izin</p>
                </a>
            </div>
        </div>

        {{-- View Table Jadwal Shift --}}
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="title row justify-content-between my-5  ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <h3 class="RfTitle fw-bold">Jadwal Kerja</h3>
                </div>
                {{-- Button Ganti Shift Security --}}
                @if (Auth::user()->role === 'Security')
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end ">
                        <a href="/home/gantishift" class="RfContent bg-main-color text-light p-3 rounded-3 text-decoration-none fw-bolder ">Ganti Shift</a>
                    </div>
                @endif
            </div>
            {{-- Table Jadwal Security --}}
            <div class="my-5">
                <table class="table table-striped rounded RfContent">
                    <thead>
                        <tr class="bg-main-color text-light">
                            <th class="title-table" scope="col">No.</th>
                            <th class="title-table" scope="col">Tanggal</th>
                            <th class="title-table" scope="col">Shift</th>
                            <th class="title-table" scope="col">Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Auth::user()->role === 'Security')
                            @if (count($jadwals)>0)
                                @foreach ($jadwals as $index => $jadwal)
                                    <tr class="{{ $index % 2 == 0 ? 'bg-yellow-table RfContent' : 'bg-blue-table' }}">
                                        <th class="isi-table" scope="row">{{$index + 1}}</th>
                                        <td>{{$jadwal->tgl_masuk}}</td>
                                        <td class="isi-table">{{ $jadwal->shift->nama }}</td>
                                        <td class="isi-table">{{$jadwal->shift->jam_masuk}} - {{$jadwal->shift->jam_keluar}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="bg-yellow-table">
                                    <td colspan="4" class="isi-table text-center fw-bold text-secondary ">Data Tidak Ada</td>
                                </tr>
                            @endif
                        @else
                            <tr class="bg-yellow-table">
                                <td colspan="4" class="isi-table text-center fw-bold text-secondary ">Senin - Jumat</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
