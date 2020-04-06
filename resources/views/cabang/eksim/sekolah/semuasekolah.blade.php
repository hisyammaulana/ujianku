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
                    <td rowspan="2" >No.</td>
                    <td rowspan="2" >KD RAYON</td>
                    <td rowspan="2" >NAMA RAYON</td>
                    <td rowspan="2" >KD SEKOLAH</td>
                    <td rowspan="2" >NAMA SEKOLAH</td>
                    <td rowspan="2" >NPSN</td>
                    <td rowspan="2" >STS SEK</td>
                    <td rowspan="2" >KURIKULUM</td>
                    <td rowspan="2" >IKUT UN</td>
                    <td rowspan="2" >JML PESERTA</td>
                    <td colspan="2" >JENIS KELAMIN</td>
                </tr>
                <tr>
                    <td>L</td>
                    <td>P</td>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->kode_rayon }}</td>
                    <td>{{ $item->nama_rayon }}</td>
                    <td>{{ $item->kode_sekolah }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->npsn }}</td>
                    <td>{{ $item->sts_sek }}</td>
                    <td>{{ $item->kurikulum }}</td>
                    <td>{{ $item->ikut_un }}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
