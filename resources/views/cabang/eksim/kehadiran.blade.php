@extends('layouts.master')
@section('title', 'Data Tidak Hadir UN')
@section('page-title', 'Halaman Data Tidak Hadir UN')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
           <div class="card iq-mb-3">
              <div class="card-body">
                 <h4 class="card-title">Eksport data dari Excel</h4>
                 <form action="" method="GET" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select class="form-control" name="kode_rayon">
                            <option selected disabled>--Pilih Rayon--</option>
                            {{-- @foreach ($rayons as $rayon)
                                <option value="{{ $rayon->kd_rayon }}">{{ $rayon->nama_rayon }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" >Unduh Data</button>
                    <a href="{{route('cabang.sekolah.export.all')}}" class="btn btn-danger" >Unduh Semua Ketidakhadiran</a>
                </form>
              </div>
           </div>
        </div>
     </div>
</div>
@endsection
