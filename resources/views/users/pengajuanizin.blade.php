@extends('tamplate')
@section('content')
    <div class="container">
        <div class="py-4 px-sm-5"> <!-- Menambahkan padding pada div utama -->
            <h3 class="mb-3">Pengajuan Izin</h3>
            <div class="shadow px-4 py-3 py-md-4 mb-4 bg-body-tertiary rounded"> <!-- Menyesuaikan padding pada div form -->
                <form>
                    <div class="row"> <!-- Membungkus elemen dalam satu row -->
                        <div class="col-md-6"> <!-- Menyesuaikan ukuran kolom pada layar besar dan menengah -->
                            <div class="mb-3">
                                <label for="ItemName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="ItemName" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="Date" class="form-label">Mulai</label>
                                <input type="date" class="form-control" id="DateStart">
                            </div>
                            <div class="mb-3">
                                <label for="Date" class="form-label">Selesai</label>
                                <input type="date" class="form-control" id="DateEnd">
                            </div>
                        </div>
                        <div class="col-md-6"> <!-- Menyesuaikan ukuran kolom pada layar besar dan menengah -->
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Bukti Izin</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pilih Keterangan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Sakit</a></li>
                                        <li><a class="dropdown-item" href="#">Izin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
