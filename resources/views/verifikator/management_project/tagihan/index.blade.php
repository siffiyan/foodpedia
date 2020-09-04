@extends('partials.app')

@section('title','List Tagihan')

@section('content')
    
<section class="content">

    <!-- Default box -->
    @if($tagihan->count()>0)
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">
          @foreach ($tagihan as $item)
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-light">
              <div class="card-header text-muted border-bottom-0">
                {{$item->no_kontrak}}
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$item->nama_project}}</b></h2>
                    <p class="text-muted text-sm">{{$item->jenis_pengadaan}}</p>
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>{{$item->nama_vendor}}</li>
                      <li class="small mt-3"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>{{$item->alamat_vendor}}</li>
                    </ul>
                    <br>
                    <h6>Tagihan Ke {{$item->no_termin}}</h6>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{asset('template/img/logo.png')}}" alt="" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="/verifikator/checklist/{{$item->id}}" class="btn btn-sm btn-primary">
                    <i class="fa fa-check"></i> &nbsp; Setujui Tagihan
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @else
    <div style="border:2px dashed black;padding: 25px;text-align: center;">
      Belum ada data
    </div>
    @endif
    <!-- /.card -->

  </section>

@endsection