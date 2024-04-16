@extends('tamplate')
@section('content')

<div class="content-wraper">

    <!-- Content Header (Page header) -->
    <section class="content-header px-3 py-3">
        <div class="container-fluid">
            <h3 class="RfTitle">Presensi</h3>
        </div>
    </section>

    <!-- Main content -->
    <section class="content p-3">
        <div class="text-center pb-5">
            <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Input file untuk unggah foto -->
                <div class="custom-file justify-content-center align-items-center">
                    <label for="UploadPresensi" class="custom-file border rounded">
                        <i class="fa-regular fa-square-plus text-center fs-1 " id="uploadIcon"></i> <!-- Icon sebelum input file -->
                        <input type="file" class="custom-file-input" id="UploadPresensi" name="foto" onchange="previewImage()">
                        <div class="custom-file-preview" id="customFilePreview" style="width: 200px; height: 350px; background-size: cover;">
                        </div>
                    </label>
                </div>
                <div aria-rowcount="" class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                    <p>Pilih Jadwal</p>
                    <div class="input-group RfContent">
                        <select class="form-select text-center RfContent" id="PilihJadwal">
                            <option selected disabled>Pilih Waktu</option>
                            <option value="1">06.00 - 18.00</option>
                            <option value="2">18.00 - 06.00</option>
                            <option value="3">07.30 - 16.00</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                    <button type="submit" class="btn btn-primary RfContent">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    // Fungsi untuk menampilkan preview foto saat dipilih
    function previewImage() {
        var fileInput = document.getElementById('UploadPresensi');
        var customFilePreview = document.getElementById('customFilePreview');
        var uploadIcon = document.getElementById('uploadIcon');

        // Sembunyikan ikon upload setelah gambar dipilih
        uploadIcon.style.display = 'none';

        // Membuat objek FileReader
        var reader = new FileReader();

        // Mengatur fungsi onload untuk dijalankan ketika proses pembacaan selesai
        reader.onload = function(e) {
            customFilePreview.style.backgroundImage = "url('" + e.target.result + "')";
        };

        // Membaca file yang dipilih sebagai URL data
        reader.readAsDataURL(fileInput.files[0]);
    }
</script>
@endsection
