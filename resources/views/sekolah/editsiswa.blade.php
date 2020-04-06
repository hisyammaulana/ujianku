@extends('layouts.master')
@section('title', 'Edit Data Siswa')
@section('page-title', 'Halaman Edit Data Siswa')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            @if ($message = Session::get('warning'))
            <div class="alert text-white bg-warning" role="alert">
                <div class="iq-alert-text">Data Berhasil Perbaharui!</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
                </button>
            </div>
             @endif
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Edit Data Siswa</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <input type="hidden" name="sekolah_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="kode_rayon" value="{{Auth::user()->kode_rayon}}">
                        <input type="hidden" name="kode_sekolah" value="{{Auth::user()->kode_sekolah}}">
                        <div class="form-group">
                            <label for="email">No. Studi</label>
                            <input type="text" class="form-control" name="kode_studi" value="{{ $siswa->kode_studi }}" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">No. Peserta Sekolah</label>
                            <input type="text" class="form-control" name="kode_peserta_sekolah" value="{{ $siswa->kode_peserta_sekolah }}">
                        </div>
                        <div class="form-group">
                            <label for="email">No. Peserta</label>
                            <input type="text" class="form-control" name="no_peserta" value="{{ $siswa->no_peserta }}">
                        </div>
                        <div class="form-group">
                            <label for="email">NISN</label>
                            <input type="text" class="form-control" name="nisn" value="{{ $siswa->nisn }}">
                        </div>
                        <div class="form-group">
                            <label for="email">No. Induk</label>
                            <input type="text" class="form-control" name="no_induk" value="{{ $siswa->no_induk }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Nama Siswa</label>
                            <input type="text" class="form-control" name="name" value="{{ $siswa->name }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control form-control-sm mb-3">
                                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option {{old('jenis_kelamin',$siswa->jenis_kelamin)=="L"? 'selected':''}} value="L">Laki-Laki</option>
                                <option {{old('jenis_kelamin',$siswa->jenis_kelamin)=="P"? 'selected':''}} value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" value="{{ $siswa->nama_ortu }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
