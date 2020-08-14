@extends('partials.app')

@section('title','Administrator')

@section('content')

<div class="row">
    <div class="col-12">
        <a href="/admin/project/add" class="btn btn-primary mb-3" id="btn_modal_add"><i class="fa fa-plus-square"></i> &nbsp; Add Project</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Project</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-striped projects">
                <thead>
                <tr>
                    <th>Nama Project</th>
                    <th class="text-center">Tanggal Mulai</th>
                    <th class="text-center">Tanggal Selesai</th>
                    <th class="text-center">Nilai Project</th>
                    <th class="text-center">Progess</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <a>
                        Pemasangan AC
                    </a>
                    <br/>
                    <small>
                        No Kontrak.30/20/BA0001
                    </small></td>
                    <td class="text-center">28 Juni 2020</td>
                    <td class="text-center">29 Juli 2020</td>
                    <td class="text-center">Rp. 30.000.000</td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-info text-white" style="cursor:pointer">on progress</span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-info btn-sm" onclick="edit()"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-warning btn-sm" onclick="termin()"><i class="fa fa-handshake text-white"></i></button>
                        <a href="/admin/project/pnpp_vendor" class="btn btn-success btn-sm" ><i class="fa fa-envelope"></i></a>
                        <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="fa fa-trash"></i></button>  
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

<div class="modal fade" id="inactive_modal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content bg-warning text-center">
            <div class="modal-body">
                <div class="form-content p-2">
                    <h4 class="modal-title">Inactive</h4>
                    <input type="hidden" name="id" id="id_delete">
                    <p class="mb-4">Are you sure want to inactive?</p>
                    <button type="submit" class="btn btn-outline-light">INACTIVE</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="active_modal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-success text-center">
            <div class="modal-body">
                <div class="form-content p-2">
                    <h4 class="modal-title">Acivated</h4>
                    <input type="hidden" name="id" id="id_delete">
                    <p class="mb-4">Are you sure want to activatdd?</p>
                    <button type="submit" class="btn btn-outline-light">ACTIVATED</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_termin">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Termin Project</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>No Termin</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Status</th>
                    <th>No Tagihan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>Bulan 1</td>
                    <td>25 Juni 2020</td>
                    <td>25 Juli 2020</td>
                    <td>
                        <span class="badge badge-danger">hello</span>
                    </td>
                    <td>
                        10/02.JUNI/2020
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="edit_termin()"> <i class="fa fa-edit"></i> </button>
                    </td>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NO TERMIN</label>
                        <select class="form-control" name="no_termin" id="no_termin"></select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>TANGGAL MULAI</label>
                        <select class="form-control" name="tgl_mulai" id="tgl_mulai"></select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>TANGGAL AKHIR</label>
                        <select class="form-control" name="tgl_akhir" id="tgl_akhir"></select>
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
                        <select class="form-control" name="no_tagihan" id="no_tagihan"></select>
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
                        <input type="text" class="form-control" name="id_dok_dukungan_tagihan" id="id_dok_dukungan_tagihan"></input>
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
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@section('js')
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
    });   

    function termin(){
        $('#modal_termin').modal('show');
    }

    function edit_termin(){
        $('#modal_termin').modal('hide');
        $('#modal_termin_edit').modal('show');
    }
</script>    
@endsection

