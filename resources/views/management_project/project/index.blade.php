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

        @if(session()->get('id_user_level') == '2')
        <a href="/management_project/create" class="btn btn-primary mb-3" id="btn_modal_add"><i class="fa fa-plus-square"></i> &nbsp; Add Project</a>
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
                <th>Termin</th>
                <th>Nilai Project</th>
                <th>Presentase</th>
                <th>Terbayar</th>
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
                        Periode {{date('d F Y', strtotime($r->tgl_mulai))}} - {{date('d F Y', strtotime($r->tgl_akhir))}}
                    </small>
                </td>
                <td>{{$r->jumlah_periode}} / {{$r->periode_selesai}}</td>
                <td>{{"Rp " . number_format($r->nilai_project,2,',','.')}}</td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-volumenow="100" aria-volumemin="0" aria-volumemax="100" style="width: {{$r->presentase}}%">
                        </div>
                    </div>
                    <small>
                        {{$r->presentase}}% Complete
                    </small>
                </td>
                <td class="text-center">{{"Rp " . number_format($r->total,2,',','.')}}</td>
                <td class="text-center">
                    <a href="/management_project/detail/{{$r->id_kontrak}}"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button></a>
                    @if(session()->get('id_user_level') == '2')
                    <button class="btn btn-info btn-sm" onclick="edit({{$r->id_kontrak}})"><i class="fa fa-edit"></i></button>
                    <a href="{{route('penpp_vendor.edit',$r->id_kontrak)}}"><button class="btn btn-warning btn-sm text-white"><i class="fa fa-envelope"></i></button></a>
                    <button class="btn btn-danger btn-sm" onclick="hapus({{$r->id_kontrak}})"><i class="fa fa-trash"></i></button> 
                    @elseif(session()->get('id_user_level') == '3')
                    <a href="/management_project/termin/{{$r->id_kontrak}}"><button class="btn btn-success btn-sm"><i class="fa fa-handshake"></i></button></a>
                    @elseif(session()->get('id_user_level') == '4')
                    <a href="/management_project/termin_tagihan/{{$r->id_kontrak}}"><button class="btn btn-success btn-sm"><i class="fa fa-handshake"></i></button></a>
                    @endif

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

