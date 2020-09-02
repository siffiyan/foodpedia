@extends('partials.app')

@section('title','Dashboard')

@section('content')

@if ($message = Session::get('msg'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$total_material_pemb}}</h3>
            <p>Request Tagihan Diterbitkan Pembayaran</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3 class="text-white">{{$total_tagihan_terbayar}}</h3>
            <p class="text-white">Request Tagihan Terbayar</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
</div>

@endsection

@section('js')
    
@endsection