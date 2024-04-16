@extends('tamplate')
@section('content')
    <div class="container py-4">
        <h3 class="Ptitle">Presensi</h3>
        <div class="text-center Pcontent">
            @if (isset($presensi_berhasil) && $presensi_berhasil)
                <img src="/assets/image/success.png" alt="logoapps" width="10%" class="Pimg" />
                <p>Berhasil Melakukan Presensi</p>
            @else
                <img src="/assets/image/gagal.png" alt="logoapps" width="10%" class="Pimg" />
                <p>Gagal Melakukan Presensi</p>
            @endif
            <div class="d-grid gap-2 col-2 mx-auto mt-5">
                <button type="submit" class="btn btn-primary LKcontent">Close</button>
            </div>
        </div>
    </div>
@endsection
