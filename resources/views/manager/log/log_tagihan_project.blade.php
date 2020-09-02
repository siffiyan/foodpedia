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
                <th>Termin Selesai</th>
                <th>Presentase</th>
                <th>Nilai Project</th>
                <th>Tagihan Terbayar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a><b>Nama Project</b></a>
                    <br/>
                    <small>
                        Created 10 Desember 2020
                    </small>
                </td>
                <td>3</td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                        </div>
                    </div>
                    <small>
                        57% Complete
                    </small>
                </td>
                <td>Rp.300.000</td>
                <td>Rp.100.000</td>
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

