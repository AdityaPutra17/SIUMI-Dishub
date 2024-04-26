@extends('admin.tamplate')
@section('contentadmin')
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Selamat Datang Admin...</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row w-100 ">
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$karyawanHadir}}</h3>
                                <p>Karyawan Hadir</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$karyawanTidakHadir}}</h3>
                                <p>Karyawan Tidak Hadir</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$totalKaryawan}}</h3>
                                <p>Total Karyawan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>


                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cara penggunaan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        Selamat datang di SIUMI (Sistem Informasi Umum dan Makan Minum)...👋👋
                        <br>
                        <br>
                        SIUMI adalah sebuah plaform atau aplikasi berbasis web yang dibuat untuk mempermudah dalam melakukan manajemen umum dan karyawan, dalam hal ini adalah Security, Officeboy dan Laporan Mamin.
                        <br>
                        Pada bagian Side-bar terdapat beberapa fitur :
                        <ol>
                            <li>Data Karyawan</li>
                            <p>Data karyawan merupakan Fitur untuk menambahkan akun karyawan agar bisa melakukan presensi</p>
                            <li>Jadwal</li>
                            <p>Pada menu Jadwal Admin bisa mengatur jadwal karyawan sesuai yang ditentukan</p>
                            <li>Presensi</li>
                            <p>Pada menu presensi, Admin bisa melihat dan mencetak hasil rekap presensi karyawan</p>
                            <li>Laporan Kerusakan</li>
                            <p>Bagian ini digunakan jika ada kerusakan barang, Admin dan karyawan lainnya bisa melaporkan kerusakan</p>
                            <li>Laporan Pengajuan Izin</li>
                            <p>Pada Fitur pengajuan izin, karyawan diharuskan melakukan upload data sesuai dengan form yang telah tertera. Admin bisa melihat dan melakukan perubahan presensi pada karyawan yang mengajukan izin</p>
                            <li>Mamin : Konsumsi dan Natura</li>
                            <p>Bagian Konsumsi diperuntukan untuk melaporkan pengadaan dan penggunaan jenis nasi box/snackbox dll.</p>
                            <p>pada bagian natura diperuntukan untuk laporan seperti pangadaan dan penggunaan galon</p>
                        </ol>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Selamat Berkerja
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
@endsection
