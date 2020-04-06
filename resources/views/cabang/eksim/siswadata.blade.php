@extends('layouts.master')
@section('title', 'Data Siswa')
@section('page-title', 'Halaman Data Siswa')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card iq-mb-3">
            <div class="card-body">
                <h4 class="card-title">Eksport data dari Excel</h4>
                <form action="{{route('cabang.siswa.export.rayon')}}" method="GET" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <select class="form-control" name="rayon" id="rayon" data-dependent="sekolah">
                                <option value="" selected disabled>--Pilih Rayon--</option>
                                @foreach ($rayons as $rayon)
                                    <option value="{{ $rayon->kd_rayon }}" >{{ $rayon->nama_rayon }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" name="sekolah" id="sekolah" style="display: none">
                                @foreach ($sekolahs as $sekolah)
                            <option id="kode-sekolah" data-rayon="{{$sekolah->kode_rayon}}" value="{{$sekolah->kode_sekolah}}">{{$sekolah->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>
                    <button type="submit" class="btn btn-success">Unduh Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const rayon = document.querySelector('#rayon');
    const sekolah = document.querySelector('#sekolah');
    const kodeSekolah = document.querySelectorAll('#kode-sekolah');

    rayon.addEventListener('change', async function(){
        sekolah.style.display = '';
        const results = await [...kodeSekolah].map(k => k).filter(k => k.dataset.rayon.includes(this.value));
        let data = ``;
        results.map(r => data += `<option value="${r.value}">${r.innerText}</option>`)
        sekolah.innerHTML = data
    })
</script>
@endsection
