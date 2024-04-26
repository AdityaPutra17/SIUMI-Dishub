@extends('tamplate')
@section('content')
    <div class="py-4 container py-5">
        <div class="d-flex">
            <div class="col-1">
                <a style="font-size: 3vw"  class="text-center" href="{{ route('home') }}"><i class="fa-solid fa-angle-left"></i></a>
            </div>
            <h3 class="mb-3 LPtitle">Lihat Presensi</h3>
        </div>
        <div class="shadow px-3 py-3 mb-3 bg-body-tertiary rounded">
            <h6 class="pb-3 LPcontent">Nama : {{ Auth::user()->name }}</h6>
            <div class="table-responsive rounded">
                <table class="table table-striped rounded">
                    <thead>
                        <tr class="bg-main-color text-light LPcontent">
                            <th class="text-center rounded-top" colspan="5">Data Presensi</th>
                        </tr>
                        <tr class="bg-blue-table text-light text-center LPcontent">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Presensi Masuk</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider text-center LPcontent">
                        @foreach ($presensis as $index => $p)
                            <tr class="{{ $p->status_hadir === 'terlambat' ? 'bg-yellow-table' : ($p->status_hadir === 'alpa' ? 'bg-danger' : '') }}">
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$p->created_at->format('Y-m-d')}}</td>
                                <td>{{$p->ket}}</td>
                                <td>{{$p->created_at->format('H:i:s') }}</td>
                                <td>{{$p->status_hadir}}</td>
                            </tr>
                        @endforeach
                    <tfoot class="table-group-divider ">
                        <tr class="bg-main-color">
                            <th class="rounded-bottom" colspan="5"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="LPcontent row align-items-center text-center">
                <div class="col">
                    <p>Hadir : {{$hadir}}</p>
                </div>
                <div class="col">
                    <p>Terlambat : {{$terlambat}}</p>
                </div>
                <div class="col">
                    <p>Alfa : {{$alfa}}</p>
                </div>
                <div class="col">
                    <p>Izin : {{$izin}}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
