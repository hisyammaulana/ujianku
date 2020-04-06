@extends('layouts.master')
@section('title', 'Daftar Siswa')
@section('page-title', 'Halaman Daftar Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
           <div class="card iq-mb-3">
              <div class="card-body">
                 <h4 class="card-title">Siswa Yang Tidak Hadir Hari Ini</h4>
              </div>
              <div class="iq-card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Peserta</th>
                                <th>Nama Siswa</th>
                                <th>Pelajaran</th>
                                <th>Asal Sekolah</th>
                                <th>Asal Rayon</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($kehadiranTodays) === 0)
                                <tr>
                                    <td style="text-align: center;" colspan="7">Tidak ada siswa yang tidak berangkat</td>
                                </tr>
                            @elseif (count($kehadiranTodays) > 0)

                            @php($no = 1)
                            @foreach ($kehadiranTodays as $kehadiran)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <th>{{ $kehadiran->no_peserta }}</th>
                                <th>{{ $kehadiran->name }}</th>
                                <th>{{ $kehadiran->pelajaran }}</th>
                                <th>{{ $kehadiran->nama_sekolah }}</th>
                                <th>{{ $kehadiran->nama_rayon }}</th>
                                <th>{{ $kehadiran->keterangan }}</th>
                            </tr>
                            @endforeach
                            @endif
                    </table>
                </div>
            </div>
           </div>
        </div>
     </div>

    <div class="row">
        <div class="col-sm-12">
           <div class="card iq-mb-3">
              <div class="card-body">
                 <h4 class="card-title">Semua Siswa Yang Tidak Hadir</h4>
              </div>
              <div class="iq-card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Peserta</th>
                                <th>Nama Siswa</th>
                                <th>Pelajaran</th>
                                <th>Tanggal</th>
                                <th>Asal Sekolah</th>
                                <th>Asal Rayon</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($kehadiranAlls) === 0)
                                <tr>
                                    <td style="text-align: center;" colspan="8">Tidak ada siswa yang tidak berangkat</td>
                                </tr>
                            @elseif (count($kehadiranAlls) > 0)

                            @php($no = 1)
                            @foreach ($kehadiranAlls as $hadir)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <th>{{ $hadir->no_peserta }}</th>
                                <th>{{ $hadir->name }}</th>
                                <th>{{ $hadir->pelajaran }}</th>
                                <th>{{ Carbon\Carbon::parse($hadir->waktu_absen)->format('d-m-Y') }}</th>
                                <th>{{ $hadir->nama_sekolah }}</th>
                                <th>{{ $hadir->nama_rayon }}</th>
                                <th>{{ $hadir->keterangan }}</th>
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
