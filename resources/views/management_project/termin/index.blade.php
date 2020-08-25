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

@endsection

