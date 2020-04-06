@extends('layouts.master')
@section('title', 'Data Sekolah')
@section('page-title', 'Halaman Data Sekolah')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                @if ($message = Session::get('success'))
                <div class="alert text-white bg-success" role="alert">
                    <div class="iq-alert-text">Data Berhasil Disimpam!</div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ri-close-line"></i>
                    </button>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert text-white bg-danger" role="alert">
                    <div class="iq-alert-text">Ada Masalah Pada File!</div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ri-close-line"></i>
                    </button>
                </div>
                @endif
               <div class="card iq-mb-3">
                  <div class="card-body">
                     <h4 class="card-title">Import data dari Excel</h4>
                    <form action="{{route('cabang.data.sekolah.import')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Pilih file format xls,xlsx,csv</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            <p class="text-danger">{{ $errors->first('file') }}</p>
                        </div>
                        {{-- <a href="#" class="btn btn-primary text-center">Unggah File</a> --}}
                        <button type="submit" class="btn btn-primary" >Unggah File</button>
                    </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <div class="card iq-mb-3">
                  <div class="card-body">
                     <h4 class="card-title">Eksport data dari Excel</h4>
                     <form action="{{route('cabang.sekolah.export.rayon')}}" method="GET" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select class="form-control" name="kode_rayon">
                                <option selected disabled>--Pilih Rayon--</option>
                                @foreach ($rayons as $rayon)
                                    <option value="{{ $rayon->kd_rayon }}">{{ $rayon->nama_rayon }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" >Unduh Data</button>
                        <a href="{{route('cabang.sekolah.export.all')}}" class="btn btn-danger" >Unduh Semua Sekolah</a>
                    </form>
                  </div>
               </div>
            </div>
         </div>
    </div>
@endsection
