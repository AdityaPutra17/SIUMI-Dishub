<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi PDF</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
        }
        @page {
            size: landscape;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Data Presensi</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Quantity</th>
                <th>Anggaran</th>
                <th>Status</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mamins as $index => $mamin)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$mamin->tanggal}}</td>
                <td>{{$mamin->name}}</td>
                <td>{{$mamin->jenis}}</td>
                <td>{{$mamin->qty}}</td>
                <td>{{$mamin->anggaran}}</td>
                <td>{{$mamin->status}}</td>
                <td>{{$mamin->ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
