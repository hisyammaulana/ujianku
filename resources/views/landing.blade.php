<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('kemendikbud.png')}}">
    <title>Kehadiran UN Jawa Tengah 2020</title>

    <link href="{{asset('landing/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('landing/css/colors/blue.css')}}" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border logo-left">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('landing')}}">
                        <b>
                            <img src="{{asset('kemendikbud.png')}}" alt="homepage" class="dark-logo" style="width: 90px; height: 70px;" />
                            <img src="{{asset('kemendikbud.png')}}" alt="homepage" class="light-logo" style="width: 90px; height: 70px;" />
                        </b>

                        <span>
                         <h3  class="dark-logo" >Kehadiran Siswa UN Jawa Tengah</h3>
                         <h3  class="light-logo" >Kehadiran Siswa UN Jawa Tengah</h3>
                        </span> </a>
                </div>
            </nav>
        </header>

        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h3 class="box-title m-b-20">Masuk Administrasi</h3>
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control @error('kode_sekolah') is-invalid @enderror" type="text" name="kode_sekolah" required autofocus placeholder="Username"> @error('kode_sekolah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Password"> @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group text-center m-t-20">
                                        <div class="col-xs-12">
                                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                    <div class="form-group m-b-0">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Kehadiran Siswa Ujian Nasional</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Nama Siswa</th>
                                                <th>Nomor Ujian</th>
                                                <th>Asal Sekolah</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Hari Ke </th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @if (count($datas) === 0)
                                            <tr>
                                                <td style="text-align: center;" colspan="7">Semua siswa pada hari ini mengikuti ujian.</td>
                                            </tr>
                                            @elseif (count($datas) > 0) @php($no = 1) @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->no_peserta }}</td>
                                                <td>{{ $data->nama_sekolah }}</td>
                                                <td>{{ $data->pelajaran }}</td>
                                                <td>{{ $data->hari }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                            </tr>
                                            @endforeach @endif --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                © {{ date('Y') }} Made With <i class="fa fa-heart"></i> Dinas
            </footer>
        </div>
    </div>

    <script src="{{asset('landing/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('landing/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('landing/js/waves.js')}}"></script>
    <script src="{{asset('landing/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('landing/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('landing/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('landing/js/custom.min.js')}}"></script>
    <script src="{{asset('landing/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <script src="{{asset('landing/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
</body>

</html>
