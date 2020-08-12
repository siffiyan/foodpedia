@extends('partials.app')

@section('title','Project')

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Project</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>VENDOR</label>
                            <select class="form-control" name="id_user_level" id="user_level_list"></select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>NO SURAT PENUNJUKKAN VENDOR</label>
                            <input type="text" class="form-control" name="nama_user" id="nama_user">
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
                            <select class="form-control" name="id_user_level" id="user_level_list">
                                <option value="">BAJU</option>
                                <option value="">CELANA</option>
                            </select>
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
                    <div class="col-md-2" style="margin-top:32px">
                        <button class="btn btn-success" id="btn_append_termin"> <i class="fa fa-plus-square"></i> &nbsp; Add Termin</button>
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

<script>
    var i=1; 
    $('#btn_append_termin').click(function(){
        $('#append_termin').append(`
        <div class="row mt-3" id="row`+i+`">
                <div class="col-md-2">
                    <label>NO TERMIN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>TANGGAL MULAI</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>TANGGAL SELESAI</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>NOMOR TAGIHAN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-1" style="margin-top:32px">
                    <button type="button" class="btn btn-danger btn-remove" name="remove" id="`+i+`"> <i class="fa fa-trash"></i></button>
                </div>
            </div>
        `);
        i++;
    });

    // $('.btn-remove').click(function(){
    //     console.log('hello');
	// 	var button_id = $(this).attr("id");   
    //     $('#row'+button_id+'').remove();  
    //     i--;
    // })

    $('#append_termin').on('click', '.btn-remove', function(e) {
        e.preventDefault();
        var button_id = $(this).attr("id");   
        $('#row'+button_id+'').remove();  
        i--;
});
    
</script>

@endsection