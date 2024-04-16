@extends('admin.tamplate')
@section('contentadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Presensi Security</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Presensi Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row px-3 pb-3">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="Date" class="col-form-label">Tanggal :</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="Date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="Name" class="col-form-label">Nama :</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="Name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" type="button">Export</button>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-striped rounded">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>1-4-2024</td>
                                <td><span class="tag tag-success">Hadir</span></td>
                                <td>foto awal</td>
                                <td>foto akhir</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
