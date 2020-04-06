<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td>No.</td>
                    <td>KD RAYON</td>
                    <td>KD SEKOLAH</td>
                    <td>KD PES SEKOLAH</td>
                    <td>KD PESERTA</td>
                    <td>NISN</td>
                    <td>NO INDUK</td>
                    <td>NAMA SISWA</td>
                    <td>JENIS KELAMIN</td>
                    <td>NAMA ORTU</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->kode_rayon }}</td>
                    <td>{{ $item->kode_sekolah }}</td>
                    <td>{{ $item->kode_peserta_sekolah }}</td>
                    <td>{{ $item->no_peserta }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->no_induk }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->nama_ortu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
