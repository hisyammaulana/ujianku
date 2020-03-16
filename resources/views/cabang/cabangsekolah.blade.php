@extends('layouts.master') @section('title', 'Daftar Sekolah') @section('page-title', 'Halaman Daftar Sekolah') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Daftar Sekolah </h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                        <div class="custom-control custom-switch custom-switch-text custom-control-inline">
                            <div class="custom-switch-inner">
                                </br>
                                <a href="{{route('cabang.tambah')}}" type="button" class="btn btn-success mb-3">Tambah Sekolah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Sekolah</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($sekolahs) === 0)
                                <tr>
                                    <td colspan="5" style="text-align: center;">Tidak ada data siswa</td>
                                </tr>
                                @elseif (count($sekolahs) > 0) @php($no = 1) @foreach ($sekolahs as $sekolah)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $sekolah->name }}</td>
                                    <td>{{ $sekolah->email }}</td>
                                    <td>{{ $sekolah->username }}</td>
                                    <td>
                                        <a href="{{route('cabang.sekolah.edit', $sekolah->id)}}" class="btn btn-warning mb-3"><i class="ri-edit-fill pr-0"></i></a>

                                        <form action="{{route('cabang.sekolah.delete', $sekolah->id)}}" method="POST">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <button class="btn btn-danger mb-3"><i class="ri-delete-bin-6-line"></i></button>
                                        </form>
                                    </td>
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
