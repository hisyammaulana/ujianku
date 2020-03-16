@extends('layouts.master')
@section('title', 'Daftar Siswa')
@section('page-title', 'Halaman Daftar Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Daftar Siswa </h4>
                    </div>

                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($siswa) === 0)
                                <tr>
                                    <td colspan="6" style="text-align: center;">Tidak ada data siswa</td>
                                </tr>
                                @elseif (count($siswa) > 0) @php($no = 1) @foreach ($siswa as $siswas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswas->nisn }}</td>
                                    <td>{{ $siswas->name }}</td>
                                    <td>{{ $siswas->jenis_kelamin }}</td>
                                    <td>{{ $siswas->nama_sekolah }}</td>
                                    <td>{{ $siswas->alamat }}</td>
                                </tr>
                                @endforeach @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
