@extends('layouts.master') @section('title', 'Kehadiran') @section('page-title', 'Halaman Ketidakhadiran Siswa') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @if ($message = Session::get('danger'))
            <div class="alert text-white bg-danger" role="alert">
                <div class="iq-alert-text">Data Berhasil Dihaspus!</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
                </button>
            </div>
             @endif
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Siswa yang Tidak Mengikuti Ujian Nasional</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                        <div class="custom-control custom-switch custom-switch-text custom-control-inline">
                            <div class="custom-switch-inner">
                                <a href="{{route('sekolah.kehadiran.tambah')}}" type="button" class="btn btn-success mb-3">Tambah Absensi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Peserta</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($kehadirans) === 0)
                                    <tr>
                                        <td style="text-align: center;" colspan="6">Tidak ada siswa yang tidak berangkat</td>
                                    </tr>
                                @elseif (count($kehadirans) > 0)

                                @php($no = 1)
                                @foreach ($kehadirans as $kehadiran)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <th>{{ $kehadiran->no_peserta }}</th>
                                    <th>{{ $kehadiran->name }}</th>
                                    <th>{{ $kehadiran->nama_sekolah }}</th>
                                    <th>{{ $kehadiran->keterangan }}</th>
                                    <th>
                                        <a href="{{route('sekolah.kehadiran.edit', $kehadiran->id)}}" class="btn btn-warning mb-3"><i class="ri-edit-fill pr-0"></i></a>
                                        <form action="{{route('sekolah.kehadiran.hapus', $kehadiran->id)}}" method="POST" >
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger mb-3" ><i class="ri-delete-bin-6-line"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                                @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
