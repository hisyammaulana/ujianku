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
                        <div class="form-group">
                            <label for="no_ujian">No. Ujian Nasional</label>
                            <input type="text" class="form-control @error('no_ujian') is-invalid @enderror" id="no_ujian" name="no_ujian" autofocus>
                            @error('no_ujian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_ujian">Nama Siswa</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="no_ujian">Mata Pelajaran</label>
                            <select name="mata_pelajaran" class="form-control form-control-sm mb-3">
                                <option selected disabled>-- Pilih Palajaran --</option>
                                <option value="BAHASA INDONESIA">BAHASA INDONESIA</option>
                                <option value="MATEMATIKA">MATEMATIKA</option>
                                <option value="BAHASA INGGRIS">BAHASA INGGRIS</option>
                                <option value="KEJURUAN">KEJURUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_ujian">Hari Ujian</label>
                            <select name="hari" class="form-control form-control-sm mb-3">
                                <option selected disabled>-- Pilih Hari --</option>
                                <option value="PERTAMA">PERTAMA</option>
                                <option value="KEDUA">KEDUA</option>
                                <option value="KETIGA">KETIGA</option>
                                <option value="KEEMPAT">KEEMPAT</option>
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
