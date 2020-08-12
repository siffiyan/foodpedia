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
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No Kontrak</th>
                <th>Nama Project</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Nilai Project</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>30/20/BA0001</td>
                <td>Pemasangan AC</td>
                <td>28 Juni 2020</td>
                <td>29 Juli 2020</td>
                <td>Rp. 30.000.000</td>
                <td class="text-center">
                    <span class="badge badge-info text-white" style="cursor:pointer">on progress</span>
                </td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="edit()"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-success btn-sm" onclick="edit()"><i class="fa fa-handshake"></i></button>
                    <button class="btn btn-success btn-sm" onclick="edit()"><i class="fa fa-envelope"></i></button>
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

@endsection

@section('js')
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
    });   

</script>    
@endsection

