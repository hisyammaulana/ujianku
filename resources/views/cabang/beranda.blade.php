@extends('layouts.master')
@section('title', 'Beranda')
@section('page-title', 'Beranda')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-3">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
              <div class="iq-card-body pb-0">
                 <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-government-line"></i></div>
                 <span class="float-right line-height-6">Total Rayon</span>
                 <div class="clearfix"></div>
                 <div class="text-center">
                     @if ($rayon === 0)
                        <h4 class="mb-0"><span class="counter">Data Rayon Belum Ada</span><span></span></h4>
                     @elseif($rayon > 0)
                        <h2 class="mb-0"><span class="counter">{{$rayon}}</span><span></span></h2>
                     @endif
                    <p class="mb-0 text-secondary line-height"><span class="text-success"></span></p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
              <div class="iq-card-body pb-0">
                 <div class="rounded-circle iq-card-icon iq-bg-warning"><i class="ri-home-4-line"></i></div>
                 <span class="float-right line-height-6">Total Sekolah</span>
                 <div class="clearfix"></div>
                 <div class="text-center">
                    <h2 class="mb-0"><span class="counter">{{$sekolah}}</span></h2>
                    <p class="mb-0 text-secondary line-height"><span class="text-success"></span></p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
              <div class="iq-card-body pb-0">
                 <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-group-line"></i></div>
                 <span class="float-right line-height-6">Total Siswa</span>
                 <div class="clearfix"></div>
                 <div class="text-center">
                    <h2 class="mb-0"><span class="counter">{{$siswa}}</span><span></span></h2>
                    <p class="mb-0 text-secondary line-height"><span class="text-success"></span></p>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-lg-3">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
              <div class="iq-card-body pb-0">
                 <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-user-unfollow-line"></i></div>
                 <span class="float-right line-height-6">Tidak Hadir UN</span>
                 <div class="clearfix"></div>
                 <div class="text-center">
                    <h2 class="mb-0"><span class="counter">{{$kehadiran}}</span><span></span></h2>
                    <p class="mb-0 text-secondary line-height"><span class="text-danger"></span></p>
                 </div>
              </div>
              <div ></div>
           </div>
        </div>
     </div>
</div>
@endsection
