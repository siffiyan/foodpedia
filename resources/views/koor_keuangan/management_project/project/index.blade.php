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

        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @endif

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
                <th>Tanggal Selesai</th>
                <th>Nilai Project</th>
                <th>Tagihan</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project as $r)
             <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <a><b>{{$r->nama_project}}</b></a>
                    <br/>
                    <small>
                        Created {{date('d F Y', strtotime($r->tgl_mulai))}}
                    </small>
                </td>
                <td>{{date('d F Y', strtotime($r->tgl_akhir))}}</td>
                <td>{{"Rp " . number_format($r->nilai_project,2,',','.')}}</td>
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
                    <a href="{{route('termin_keuangan.show',$r->id_kontrak)}}"><button class="btn btn-success btn-sm"><i class="fa fa-handshake"></i></button></a>
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

