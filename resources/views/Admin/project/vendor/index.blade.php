@extends('partials.app')

@section('title','Vendor')

@section('content')

<div class="row">
    <div class="col-12">
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
            @foreach($vendor as $r)
             <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$r->nama_vendor}}</td>
                <td>{{$r->alamat_vendor}}</td>
                <td>{{$r->kota_vendor}}</td>
                <td>{{$r->provinsi_vendor}}</td>
                <td class="text-center">
                    <button class="btn btn-info" onclick="edit({{$r->id_vendor}})"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="hapus({{$r->id_vendor}})"><i class="fa fa-trash"></i></button>
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

<form action="/admin/project/vendor" method="post">
    {{csrf_field()}}
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
                        <input type="text" class="form-control" required name="kota_vendor" id="kota_vendor">
                    </div>
                    <div class="col-sm-6">
                        <label>PROVINSI VENDOR</label>
                        <input type="text" class="form-control" required name="provinsi_vendor" id="provinsi_vendor">
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

<form action="/admin/project/vendor/edit_action" method="post">
    <input type="hidden" name="_method" value="put">
    {{csrf_field()}}
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
                <input type="hidden" name="id_vendor_edit" id="id_vendor_edit">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NAMA VENDOR</label>
                        <input type="text" class="form-control" required name="nama_vendor" id="nama_vendor_edit">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>ALAMAT VENDOR</label>
                        <textarea class="form-control" required name="alamat_vendor" id="alamat_vendor_edit"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>KOTA VENDOR</label>
                    <input type="text" class="form-control" required name="kota_vendor" id="kota_vendor_edit">
                </div>
                <div class="col-sm-6">
                    <label>PROVINSI VENDOR</label>
                    <input type="text" class="form-control" required name="provinsi_vendor" id="provinsi_vendor_edit">
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

<form action="/admin/project/vendor/destroy" method="post">
{{csrf_field()}}
<input type="hidden" name="_method" value="delete">
<div class="modal fade" id="delete_modal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <div class="form-content p-2">
                    <h4 class="modal-title">Delete</h4>
                    <input type="hidden" name="id" id="id_vendor_delete">
                    <p class="mb-4">Are you sure want to delete?</p>
                    <button type="submit" class="btn btn-primary">Delete </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

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

    function edit(id){
        $.ajax({
            url : '/admin/project/vendor/'+id+'/edit',
            type:'get',
            dataType:'json',
            success:function(response){
                console.log(response);
                $('#id_vendor_edit').val(id);
                $('#nama_vendor_edit').val(response.nama_vendor);
                $('#alamat_vendor_edit').val(response.alamat_vendor);
                $('#kota_vendor_edit').val(response.kota_vendor);
                $('#provinsi_vendor_edit').val(response.provinsi_vendor);
                $('#modal_edit').modal('show');
            },
            error:function(){
                alert('terjadi error');
            }
        })
        
    }

    function hapus(id){
        $('#id_vendor_delete').val(id);
        $('#delete_modal').modal('show');
    }

</script>    
@endsection

