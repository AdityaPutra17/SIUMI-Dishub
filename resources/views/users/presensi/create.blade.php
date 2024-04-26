@extends('tamplate')
@section('content')

<div class="content-wraper container">

    <!-- Content Header (Page header) -->
    <section class="content-header py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <a style="font-size: 3vw"  class="text-center" href="{{ route('home') }}"><i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="col-3">
                    <h3 class="RfTitle text-center">Presensi</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="px-3">
            <div class="shadow p-4 mb-4 bg-body-tertiary rounded text-center">
                <form action="{{route('presensi.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Input file untuk unggah foto -->
                    <div class="custom-file justify-content-center align-items-center">
                        <label for="foto_selfie" class="custom-file border rounded">
                            <!-- Icon sebelum input file -->
                            <i class="fa-regular fa-square-plus fs-1 text-primary" id="uploadIcon"></i>
                            <input type="file" class="custom-file-input" id="foto_selfie" name="foto_selfie" onchange="previewImage(this)">
                            <div class="custom-file-preview justify-content-center align-items-center" id="customFilePreview">
                            </div>
                        </label>
                    </div>
                    <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                        <select class="form-select text-center RfContent" id="id_jadwal" name="id_jadwal">
                            <option selected disabled>Pilih Jadwal</option>
                            @foreach($jadwals as $jadwal)
                                @if($jadwal->tgl_masuk->format('Y-m-d') == $today->format('Y-m-d'))
                                    <option value="{{$jadwal->id}}">
                                        @if (Auth::user()->role === "OfficeBoy")
                                            Senin - Jumat
                                        @else
                                            {{$jadwal->tgl_masuk}} - {{$jadwal->shift->nama}}
                                        @endif
                                    </option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                    <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                        <div class="input-group RfContent">
                            <select class="form-select text-center RfContent" id="ket" name="ket">
                                <option selected disabled>Pilih Waktu</option>
                                <option value="datang">Datang</option>
                                <option value="pulang">Pulang</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-6 col-6 col-md-2 mx-auto mt-3">
                        <button type="submit" class="btn btn-primary RfContent">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</div>

@endsection
