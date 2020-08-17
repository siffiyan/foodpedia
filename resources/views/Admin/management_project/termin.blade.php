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
                        <th class="text-center">Action</th>
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
                        <td>{{$item->no_tagihan}}</td>
                        <td class="text-center">
                            <button class="btn btn-info btn-sm" onclick="edit_termin({{$item->id_termin}})"> <i class="fa fa-edit"></i> </button>
                        </td>
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

<div class="modal fade" id="modal_termin_edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit Termin</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="#">
        <div class="modal-body">
            <input type="hidden" name="id_termin" id="id">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NO TERMIN</label>
                        <input type="text" class="form-control" name="no_termin" id="no_termin">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>TANGGAL MULAI</label>
                        <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>TANGGAL AKHIR</label>
                        <input type="date" class="form-control" name="tgl_akhir" id="tgl_akhir">
                    </div>
                </div>
                <div class="col-sm-2" style="margin-top:32px">
                    <div class="form-group">
                        <span class="btn btn-danger center" style="padding-right:30px;padding-left:30px" disabled>Inactive</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> NO TAGIHAN</label>
                        <input type="text" class="form-control" name="no_tagihan" id="no_tagihan">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NILAI TAGIHAN</label>
                        <input type="text" class="form-control" name="nilai_tagihan" id="nilai_tagihan">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NO DUKUNGAN TAGIHAN</label>
                        <input type="text" class="form-control" name="id_dok_dukungan_tagihan" id="id_dok_dukungan_tagihan">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NILAI TAGIHAN</label>
                        <input type="text" class="form-control" name="id_detail_tagihan" id="id_detail_tagihan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NILAI KODE LOKASI</label>
                        <input type="text" class="form-control" name="nilai_per_kode_lokasi" id="nilai_per_kode_lokasi">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>KODE LOKASI</label>
                        <input type="text" class="form-control" name="kode_lokasi" id="kode_lokasi">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NILAI URAIAN</label>
                        <input type="text" class="form-control" name="nilai_uraian" id="nilai_uraian">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NAMA URAIAN</label>
                        <input type="text" class="form-control" name="nama_uraian" id="nama_uraian">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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

    function edit_termin(id){
        $.ajax({
            url:'/admin/termin/' + id +'/edit',
            type:'get',
            dataType:'json',
            success:function(response){
                console.log(response);
                $('#no_termin').val(response.termin.no_termin);
                $('#tgl_mulai').val(response.termin.tgl_mulai);
                $('#tgl_akhir').val(response.termin.tgl_akhir);
                $('#modal_termin_edit').modal('show');
            },
            error:function(){
                alert('error');
            }
        })
    }
</script>

@endsection