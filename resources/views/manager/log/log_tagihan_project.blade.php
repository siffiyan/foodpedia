@extends('partials.app')

@section('title','List Project')

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Project</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped projects">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Project</th>
                <th>Tagihan ke-</th>
                <th>Status</th>
                <th>Updated By</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($log_status as $item)       
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <a><b>{{$item->nama_project}}</b></a>
                    <br/>
                    <small>
                        No Kontrak {{$item->no_kontrak}}
                    </small>
                </td>
                <td>
                    {{$item->no_termin}}
                </td>
                <td>
                    {{$item->status}}
                </td>
                <td>{{$item->updated_by}}</td>
                <td>{{$item->updated_at}}</td>
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

