@extends('layouts.master')
@section('title', 'Tambah Siswa Tidak Ujian')
@section('page-title', 'Halaman Tambah Siswa Tidak Ujian')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            @if ($message = Session::get('success'))
            <div class="alert text-white bg-success" role="alert">
                <div class="iq-alert-text">Data Berhasil Disimpam!</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
                </button>
            </div>
             @endif
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Siswa Tidak Mengikuti Ujian</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{route('sekolah.kehadiran.input')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="sekolah_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="kode_rayon" value="{{Auth::user()->kode_rayon}}">
                        <div class="form-group">
                            <label for="name">Nama Siswa</label>
                            <select name="siswa_id" id="name" class="form-control select2"></select>
                        </div>
                        <div class="form-group">
                            <label for="mata_pelajaran">Mata Pelajaran</label>
                            <select name="pelajaran" class="form-control form-control-sm mb-3">
                                <option selected disabled>-- Pilih Palajaran --</option>
                                @foreach ($pelajarans as $pelajaran)
                                <option value="{{ $pelajaran->name }}">{{ $pelajaran->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Keterangan</label>
                            <textarea type="text" name="keterangan" class="form-control" id="keterangan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
