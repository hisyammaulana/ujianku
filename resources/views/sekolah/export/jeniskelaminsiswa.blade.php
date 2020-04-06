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
                    <td style="text-align: center;" >No.</td>
                    <td style="text-align: center;" >NISN</td>
                    <td style="text-align: center;" >NAMA SISWA</td>
                    <td style="text-align: center;" >NO INDUK</td>
                    <td style="text-align: center;" >JENIS KELAMIN</td>
                    <td style="text-align: center;" >NAMA ORANG TUA</td>
                    <td style="text-align: center;" >NO PESERTA</td>
                    <td style="text-align: center;" >NO PES SEKOLAH</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($data as $item)
                <tr>
                    <td style="text-align: center;" >{{ $no++ }}</td>
                    <td style="text-align: center;" >{{ $item->nisn }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="text-align: center;" >{{ $item->no_induk }}</td>
                    <td style="text-align: center;" >{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->nama_ortu }}</td>
                    <td style="text-align: center;" >{{ $item->no_peserta }}</td>
                    <td style="text-align: center;" >{{ $item->kode_peserta_sekolah}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
