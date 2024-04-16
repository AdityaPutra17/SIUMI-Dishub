@extends('tamplate')
@section('content')
    <div class="py-4 container">
        <h3 class="mb-3 LPtitle">Lihat Presensi</h3>
        <div class="shadow px-3 py-3 mb-3 bg-body-tertiary rounded">
            <h6 class="pb-3 LPcontent">Nama : Nagasa Anandes</h6>
            <div class="table-responsive rounded">
                <table class="table table-striped rounded">
                    <thead>
                        <tr class="bg-main-color text-light LPcontent">
                            <th class="text-center rounded-top" colspan="5">Data Presensi</th>
                        </tr>
                        <tr class="bg-blue-table text-light text-center LPcontent">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Presensi Masuk</th>
                            <th scope="col">Presensi Pulang</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider text-center LPcontent">
                        <tr class="">
                            <th scope="row">1</th>
                            <td>01/01/2024</td>
                            <td>07:30</td>
                            <td>15:00</td>
                            <td>Hadir</td>
                        </tr>
                        <tr class="">
                            <th scope="row">2</th>
                            <td>02/01/2024</td>
                            <td>08:30</td>
                            <td>15:00</td>
                            <td>Terlambat</td>
                        </tr>
                        <tr class="">
                            <th scope="row">3</th>
                            <td>03/01/2024</td>
                            <td>00:00</td>
                            <td>00:00</td>
                            <td>Izin</td>
                        </tr>
                        <tr class="table-danger">
                            <th scope="row">4</th>
                            <td>04/01/2024</td>
                            <td>00:00</td>
                            <td>00:00</td>
                            <td>Alfa</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">5</th>
                            <td>05/01/2024</td>
                            <td>00:00</td>
                            <td>00:00</td>
                            <td>Sakit</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-group-divider ">
                        <tr class="bg-main-color">
                            <th class="rounded-bottom" colspan="5"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="LPcontent row align-items-center text-center">
                <div class="col">
                    <p>Hadir : 2</p>
                </div>
                <div class="col">
                    <p>Alfa : 1</p>
                </div>
                <div class="col">
                    <p>Izin : 2</p>
                </div>
            </div>

        </div>
    </div>
@endsection
