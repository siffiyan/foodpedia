@extends('partials.app')

@section('title','Project')

@section('content')

<form action="/admin/manajemen_project" method="post">
    {{csrf_field()}}
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
                            <input type="text" class="form-control" name="no_srt_penunjukan_penyedia_jasa">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>VENDOR</label>
                            <select class="form-control" name="id_vendor">
                                @foreach($vendor as $r)
                                <option value="{{$r->id_vendor}}">{{$r->nama_vendor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>NO KONTRAK</label>
                        <input type="text" class="form-control" name="no_kontrak">
                    </div>
                    <div class="col-md-9">
                        <label>NAMA PROJECT</label>
                        <input type="text" class="form-control" name="nama_project">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label>TANGGAL MULAI</label>
                        <input type="date" class="form-control" name="tgl_mulai">
                    </div>
                    <div class="col-md-3">
                        <label>TANGGAL SELESAI</label>
                        <input type="date" class="form-control" name="tgl_akhir">
                    </div>
                    <div class="col-md-3">
                        <label>NILAI PROJECT &nbsp;<small>(dalam Rupiah)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" id="nilai_project" name="nilai_project">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>JENIS PENGADAAN</label>
                            <input type=" text" class="form-control" name="jenis_pengadaan">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <label>JUMLAH PERIODE</label>
                        <input type="number" class="form-control" id="jumlah_periode" name="jumlah_periode">
                    </div>
                    <div class="col-md-3">
                        <label>NILAI PER PERIODE &nbsp;<small>(dalam Rupiah)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="number" readonly="" class="form-control" id="nilai_per_periode" name="  nilai_per_periode">
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-top:40px">
                        <p>*Nilai per periode adalah <b>hasil dari pembagian Nilai Project dibagi Jumlah Periode</b></p>
                    </div>
                </div>

                <div id="append_termin">
                </div>

                <button class="btn btn-primary btn-block mt-3">Submit</button>
            </div>
            
        </div>
    </div>
</div>
</form>
@endsection

@section('js')

<script type="text/javascript">
    
    $(document).ready(function(){

    $('#jumlah_periode').keyup(function(){

        var j = $(this).val();
        var n = $('#nilai_project').val();
        var r = n/j;
        $('#nilai_per_periode').val(r);

    })

    })
 
</script>

@endsection