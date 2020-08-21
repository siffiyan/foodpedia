@extends('partials.app')

@section('title','Data All Termin')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Termin</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="table-termin" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No Termin</th>
                <th>Nama Project</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>No Tagihan</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($termin as $item)    
            <tr>
                <td>{{$item->no_termin}}</td>
                <td>{{$item->nama_project}}</td>
                <td>{{date('d F Y', strtotime($item->tgl_mulai))}}</td>
                <td>{{date('d F Y', strtotime($item->tgl_akhir))}}</td>
                <td>{{$item->tagihan_id}}</td>
                <td class="text-center">
                    <span class="badge badge-success text-white" style="cursor:pointer">lunas</span>
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
        $("#table-termin").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
    });   

</script>    
@endsection

