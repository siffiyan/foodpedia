@extends('partials.app')

@section('title','Administrator')

@section('content')

<div class="row">
    <div class="col-12">
        <button class="btn btn-primary mb-3" id="btn_modal_add"><i class="fa fa-plus-square"></i> &nbsp; Add User</button>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
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
                    <span class="badge badge-warning" style="cursor:pointer">pending</span>
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

    $('#btn_modal_add').click(function(){
        $('#modal_add').modal('show');
    });

    function edit(){
        $('#modal_edit').modal('show');
    }

    function hapus(){
        $('#delete_modal').modal('show');
    }

    function inactive(){
        $('#inactive_modal').modal('show');
    }
       
    

</script>    
@endsection

