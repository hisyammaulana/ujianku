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
                                    <th>No. Peserta</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>No. Induk</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($siswas) === 0)
                                <tr>
                                    <td colspan="8" style="text-align: center;">Tidak ada data siswa</td>
                                </tr>
                                @elseif (count($siswas) > 0) @php($no = 1) @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $siswa->no_peserta }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nam_siswa }}</td>
                                    <td>{{ $siswa->no_induk }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->nama_ortu }}</td>
                                    <td>
                                        <a href="{{route('siswa.edit', $siswa->id)}}" class="btn btn-warning mb-3"><i class="ri-edit-fill pr-0"></i></a>
                                        <form action="{{route('siswa.delete', $siswa->id)}}" method="POST">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <button class="btn btn-danger mb-3"><i class="ri-delete-bin-6-line"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
