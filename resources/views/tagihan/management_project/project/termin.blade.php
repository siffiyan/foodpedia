@extends('partials.app')

@section('title','Termin')

@section('content')   

<div class="row">
    <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-white">
            <h3 class="widget-user-desc"><b>{{$project->nama_project}}</b></h3>
            <h6>{{date('d F Y', strtotime($project->tgl_mulai))}} - {{date('d F Y', strtotime($project->tgl_akhir))}}</h6>
            <small>{{$project->no_kontrak}} | {{$project->jenis_pengadaan}} | {{"Rp " . number_format($project->nilai_project,2,',','.')}} | {{$project->no_srt_penunjukan_penyedia_jasa}}</small>
        </div>
        </div>
        <!-- /.widget-user -->
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Termin</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table-termin" class="table table-bordered table-striped projects">
                <thead>
                    <tr>
                        <th>No Termin</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th class="text-center">Status</th>
                        <th>No Tagihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($termin as $item)
                    <tr>
                        <td>{{"Bulan " . $item->no_termin}}</td>
                        <td>{{date('d F Y', strtotime($item->tgl_mulai))}}</td>
                        <td>{{date('d F Y', strtotime($item->tgl_akhir))}}</td>
                        <td class="text-center">
                            <span class="badge badge-danger">Jatuh Tempo</span>
                        </td>
                        <td><a href="#" onclick="detail({{$item->tagihan_id}})">{{$item->tagihan_id}}</a></td>
                    </tr>  
                    @endforeach 
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

<div class="modal fade" id="modal_detail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Termin</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/tagihan/termin_tagihan/detail_tagihan" method="post">
            @csrf
            <input type="hidden" name="tagihan_id" id="tagihan_id">
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="tagihan_id" id="tagihan_id">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>KODE LOKASI</label>
                            <select name="kode_lokasi[]" class="form-control">
                                <option value="BDG">Bandung</option>
                                <option value="SBY">Surabaya</option>
                                <option value="SDA">Sidoarjo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>ANGGARAN</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-rupee-sign"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" name="nilai_per_kode_lokasi[]">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 32px">
                        <button class="btn btn-danger btn-block" id="btn_append_detail0">Add Detail Tagihan</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>NILAI URAIAN</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-rupee-sign"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" name="nilai_uraian[0][]">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>KETERANGAN</label>
                        <input type="text" class="form-control" name="nama_uraian[0][]">
                    </div>
                    <div class="col-md-1" style="margin-top: 32px">
                        <button type="button" class="btn btn-info btn-block" id="btn_append_uraian0"><i class="fa fa-plus-square"></i></button>
                    </div>
                </div>

                <div id="append_uraian0"></div>

                <div id="append_detail"></div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection

@section('js')



<script>

    $(function () {
        $("#table-termin").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
    });  

    function detail(id){
        $('#tagihan_id').val(id);
        $('#modal_detail').modal('show');
    }

    var i=1;
    var j=1;

    function tes(x){
        $('#btn_append_uraian'+x).click(function(e){
            e.preventDefault();
            $('#append_uraian'+x).append(`
                <div class="row" id="row`+i+`">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>NILAI URAIAN</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-rupee-sign"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" name="nilai_uraian[${i}][]">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>KETERANGAN</label>
                        <input type="text" class="form-control" name="nama_uraian[${i}][]">
                    </div>
                    <div class="col-md-1" style="margin-top: 32px">
                        <button type="button" class="btn btn-danger btn-block btn-remove" name="remove" id="`+i+`"> <i class="fa fa-trash"></i></button>
                    </div>
                </div>
            `);
            i++;
        });  

        $('#btn_delete_detail'+x).click(function(e){
            e.preventDefault();
            $('#row_detail'+x).remove();
        });

        $('#append_uraian'+x).on('click', '.btn-remove', function(e) {
            e.preventDefault();
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
            i--;
        });
    }

    $('#btn_append_uraian0').click(function(e){
        e.preventDefault();
        $('#append_uraian0').append(`
             <div class="row" id="row`+i+`">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>NILAI URAIAN`+i+`</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" name="nilai_uraian[0][]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="nama_uraian[0][]">
                </div>
                <div class="col-md-1" style="margin-top: 32px">
                    <button type="button" class="btn btn-danger btn-block btn-remove" name="remove" id="`+i+`"> <i class="fa fa-trash"></i></button>
                </div>
            </div>
        `);
        i++;
    });

    $('#append_uraian0').on('click', '.btn-remove', function(e) {
        e.preventDefault();
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
        i--;
    });

    $('#btn_append_detail0').click(function(e){
        e.preventDefault();
       $('#append_detail').append(`
       <div id="row_detail`+j+`">
           <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>KODE LOKASI</label>
                        <select name="kode_lokasi[]" class="form-control">
                            <option value="BDG">Bandung</option>
                            <option value="SBY">Surabaya</option>
                            <option value="SDA">Sidoarjo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>ANGGARAN</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" name="nilai_per_kode_lokasi[]">
                        </div>
                    </div>
                </div>
                <div class="col-md-1" style="margin-top: 32px">
                    <button type="button" class="btn btn-danger btn-block" id="btn_delete_detail${j}"><i class="fa fa-trash"></i></button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>NILAI URAIAN</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control" name="nilai_uraian[${j}][]">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="nama_uraian[${j}][]">
                </div>
                <div class="col-md-1" style="margin-top: 32px">
                    <button type="button" class="btn btn-info btn-block" id="btn_append_uraian${j}"><i class="fa fa-plus-square"></i></button>
                </div>
            </div>

            <div id="append_uraian${j}"></div>
        </div>
            `);
          tes(j);
       j++;
    });

    $('#append_uraian0').on('click', '.btn-remove', function(e) {
        e.preventDefault();
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
        i--;
    });
    
</script>

@endsection