@extends('layouts.master')
@section('title', 'Tambah Sekolah')
@section('page-title', 'Halaman Tambah Sekolah')

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
                        <h4 class="card-title">Tambah Sekolah</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form method="POST" action="{{ route('cabang.tambah.input') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="role_id" value="4">
                        <div class="form-group">
                            <label for="email">Nama Sekolah</label>
                            <input type="text" class="form-control" name="name" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
