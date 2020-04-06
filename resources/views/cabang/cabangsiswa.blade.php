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
                        <table id="example" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>No. Ujian</th>
                                    <th>Asal Sekolah</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Asal Rayon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($siswas) === 0)
                                <tr>
                                    <td colspan="7" style="text-align: center;">Tidak ada data siswa</td>
                                </tr>
                                @elseif (count($siswas) > 0) @php($no = 1) @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->name }}</td>
                                    <td>{{ $siswa->no_peserta }}</td>
                                    <td>{{ $siswa->nama_sekolah }}</td>
                                    <td>{{ $siswa->nama_ortu }}</td>
                                    <td>{{ $siswa->nama_rayon }}</td>
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
