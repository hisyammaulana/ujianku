@extends('layouts.master')
@section('title', 'Daftar Sekolah')
@section('page-title', 'Halaman Daftar Sekolah')
@section('content')
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
                        <table id="example" class="display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Rayon</th>
                                    <th>Kode Sekolah</th>
                                    <th>Nama Sekolah</th>
                                    <th>NPSN</th>
                                    <th>Status Sekolah</th>
                                    <th>Kurikulum</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($sekolahs) === 0)
                                    <tr>
                                        <td colspan="7" style="text-align: center;" >Data tidak ditemukan</td>
                                    </tr>
                                @elseif (count($sekolahs) > 0)
                                    @php($no = 1)
                                    @foreach ($sekolahs as $sekolah)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $sekolah->nama_rayon }}</td>
                                        <td>{{ $sekolah->kode_sekolah }}</td>
                                        <td>{{ $sekolah->name }}</td>
                                        <td>{{ $sekolah->npsn }}</td>
                                        <td>{{ $sekolah->sts_sek }}</td>
                                        <td>{{ $sekolah->kurikulum }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
