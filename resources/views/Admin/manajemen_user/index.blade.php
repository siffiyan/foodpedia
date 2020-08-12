@extends('partials.app')

@section('title','Administrator')

@section('content')

<div class="row">
    <div class="col-12">

@if ($message = Session::get('msg'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
                <th>Username</th>
                <th class="text-center">Status</th>
                <th class="text-center">User Level</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($user as $r)
                <tr>
                    <td>{{$r->nama_user}}</td>
                    <td class="text-center">
                        @if($r->isactive == 1)
                            <span class="badge badge-success" onclick="inactive()">active</span>
                        @else
                            <span class="badge badge-warning" onclick="active()">active</span>
                        @endif
                    </td>
                    <td class="text-center">{{$r->id_user_level}}</td>
                     <td class="text-center">
                    <button class="btn btn-info" onclick="edit()"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" onclick="hapus()"><i class="fa fa-trash"></i></button>
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

<form action="/admin/manajemen_user/store" method="post">
    {{csrf_field()}}
<div class="modal fade" id="modal_add">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Modal Add User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>USER LEVEL</label>
                        <select class="form-control" name="id_user_level" id="user_level_list">
                            @foreach($level as $r)
                            <option value="{{$r->id_user_level}}">{{$r->nama_user_level}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" class="form-control" required name="nama_user" id="nama_user"></input>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control" required name="password_user" id="password_user"></input>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>STATUS</label>
                        <select class="form-control" name="isactive">
                            <option value="1">ACTIVE</option>
                            <option value="0">INACTIVE</option>
                        </select>
                    </div>
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
            <h4 class="modal-title">Modal Add User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>USER LEVEL</label>
                        <select class="form-control" name="id_user_level" id="user_level_list"></select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>NAMA</label>
                        <input type="text" class="form-control" name="nama_user" id="nama_user"></input>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control" name="password_user" id="password_user"></input>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>STATUS</label>
                        <select class="form-control" name="isactive">
                            <option value="1">ACTIVE</option>
                            <option value="0">INACTIVE</option>
                        </select>
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

