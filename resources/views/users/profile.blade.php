@extends('tamplate')
@section('content')
    <div class="row justify-content-end">
        <div class="profile col-lg-2 col-md-3 col-sm-3 col-3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20%2810%29.webp"
                class="profile-img rounded-circle img-fluid shadow-1" alt="woman avatar" width="30%" height="30%" />
        </div>
    </div>
    <div class="container">
        <div class="py-4 px-sm-4"> <!-- Menambahkan padding pada div utama -->
            <h3 class="mb-3">PROFILE</h3>
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded"> <!-- Menambahkan padding pada div form -->
                <form>
                    <div class="row"> <!-- Membuat row untuk mengelompokkan elemen -->
                        <div class="col-md-6"> <!-- Kolom pertama untuk bagian kiri form -->
                            <div class="mb-3">
                                <label for="ItemName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="ItemName"
                                    placeholder="Masukan nama lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Email</label>
                                <textarea type="text" class="form-control" id="Description" rows="1" placeholder="Masukan email anda"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6"> <!-- Kolom kedua untuk bagian kanan form -->
                            <div class="mb-3">
                                <label for="PersonalData" class="form-label">Nomor Telpon</label>
                                <input type="number" class="form-control" id="PersonalData" aria-describedby="PersonalData"
                                    plac eholder="Masukan nomor telpon anda">
                            </div>
                           <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="Password"
                                        placeholder="Masukan password anda">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="showPassword">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        document.getElementById('showPassword').addEventListener('change', function () {
            var passwordField = document.getElementById('Password');
            if (this.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
@endsection
