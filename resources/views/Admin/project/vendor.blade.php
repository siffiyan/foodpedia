@extends('partials.app')

@section('title','Vendor')

@section('content')

<div class="row">
    <div class="col-12">
        <button class="btn btn-primary mb-3" id="btn_modal_add"><i class="fa fa-plus-square"></i> &nbsp; Add Vendor</button>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Vendor</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Vendor</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>PT. Maju Mundur</td>
                <td>Jl. Pahlawan No. 34, Sidoarjo</td>
                <td>Sidoarjo</td>
                <td>Jawa Timur</td>
                <td class="text-center">
                    <button class="btn btn-info" onclick="edit()"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="hapus()"><i class="fa fa-trash"></i></button>
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

<form action="#" method="post">
    <div class="modal fade" id="modal_add">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Add Vendor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>NAMA VENDOR</label>
                            <input type="text" class="form-control" required name="nama_vendor" id="nama_vendor">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>ALAMAT VENDOR</label>
                            <textarea class="form-control" required name="alamat_vendor" id="alamat_vendor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>KOTA VENDOR</label>
                        <input type="text" class="form-control" required name="kota_vendor" id="nama_vendor">
                    </div>
                    <div class="col-sm-6">
                        <label>PROVINSI VENDOR</label>
                        <input type="text" class="form-control" required name="kota_vendor" id="nama_vendor">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>

<div class="modal fade" id="modal_edit">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Modal Edit Vendor</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NAMA VENDOR</label>
                        <input type="text" class="form-control" required name="nama_vendor" id="nama_vendor">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>ALAMAT VENDOR</label>
                        <textarea class="form-control" required name="alamat_vendor" id="alamat_vendor"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>KOTA VENDOR</label>
                    <input type="text" class="form-control" required name="kota_vendor" id="nama_vendor">
                </div>
                <div class="col-sm-6">
                    <label>PROVINSI VENDOR</label>
                    <input type="text" class="form-control" required name="kota_vendor" id="nama_vendor">
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

<div class="modal fade" id="delete_modal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <div class="form-content p-2">
                    <h4 class="modal-title">Delete</h4>
                    <input type="hidden" name="id" id="id_delete">
                    <p class="mb-4">Are you sure want to delete?</p>
                    <button type="submit" class="btn btn-primary">Delete </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

</script>    
@endsection

