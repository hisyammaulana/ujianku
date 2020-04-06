@extends('layouts.master')
@section('title', 'Pelajaran UNBK')
@section('page-title', 'Halaman Pelajaran UNBK')
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

             @if ($message = Session::get('danger'))
            <div class="alert text-white bg-danger" role="alert">
                <div class="iq-alert-text">Data Berhasil Dihapus!</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
                </button>
            </div>
             @endif

           <div class="card iq-mb-3">
              <div class="card-body">
                 <h4 class="card-title">Tambah Pelajaran UNBK</h4>
                <form action="{{route('admin.pelajaran.post')}}" method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                 <div class="form-group">
                        <input type="text" class="form-control-file" id="exampleFormControlFile1" name="name">
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    </div>
                    {{-- <a href="#" class="btn btn-primary text-center">Unggah File</a> --}}
                    <button type="submit" class="btn btn-primary" >Tambah</button>
                </form>
              </div>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-12">
           <div class="card iq-mb-3">
              <div class="card-body">
                 <h4 class="card-title">Daftar Pelajaran Ujian Nasional</h4>
                 <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                            @if (count($pelajarans) === 0)
                            <tr>
                                <td colspan="3" style="text-align: center;">Tidak ada data siswa</td>
                            </tr>
                            @elseif (count($pelajarans) > 0) @php($no = 1) @foreach ($pelajarans as $pelajaran)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pelajaran->name }}</td>
                                <td>
                                    <form action="{{route('admin.pelajaran.delete', $pelajaran->id)}}" method="POST">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button class="btn btn-danger mb-3"><i class="ri-delete-bin-6-line"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
              </div>
           </div>
        </div>
     </div>
</div>
@endsection
