@extends('partials.app')

@section('title','Project')

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
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
        <div class="card">
            <div class="card-header">
                <h5>Add Project</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>NO SURAT PENUNJUKKAN VENDOR</label>
                            <input type="text" class="form-control" name="nama_user" id="nama_user">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>VENDOR</label>
                            <select class="form-control" name="id_user_level" id="user_level_list"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>NO KONTRAK</label>
                        <input type="text" class="form-control" name="nama_user" id="nama_user">
                    </div>
                    <div class="col-md-9">
                        <label>NAMA PROJECT</label>
                        <input type="text" class="form-control" name="nama_user" id="nama_user">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>TANGGAL MULAI</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>TANGGAL SELESAI</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>NILAI PROJECT &nbsp;<small>(dalam Rupiah)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>JENIS PENGADAAN</label>
                            <input type=" text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <label>JUMLAH PERIODE</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label>NILAI PER PERIODE &nbsp;<small>(dalam Rupiah)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top:40px">
                        <p>*Nilai per periode adalah <b>hasil dari pembagian Nilai Project dibagi Jumlah Periode</b></p>
                    </div>
                </div>
                <div id="append_termin">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection