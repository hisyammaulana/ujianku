@extends('layouts.master')
@section('title', 'Tambah Siswa')
@section('page-title', 'Halaman Tambah Siswa')
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
                        <h4 class="card-title">Tambah Siswa</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="POST" action="{{ route('siswa.input') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="sekolah_id" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <label for="email">NISN</label>
                            <input type="number" class="form-control" name="nisn" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">No. Ujian</label>
                            <input type="number" class="form-control" name="no_ujian">
                        </div>
                        <div class="form-group">
                            <label for="email">Nama Siswa</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control form-control-sm mb-3">
                                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" type="text" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
