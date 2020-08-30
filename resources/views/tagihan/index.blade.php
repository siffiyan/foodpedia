@extends('partials.app')

@section('title','Dashboard')

@section('content')
    

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

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_checklist_dok}}</h3>
                <p>Request Pengisian Dokumen</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Request</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table-request" class="table table-bordered table-striped projects">
                    <thead>
                        <tr>
                            <th>Nama Project</th>
                            <th>No Tagihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th class="text-center">Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($request as $item)
                            <tr>
                                <td><b>{{$item->nama_project}}</b></td>
                                <td>{{$item->no_tagihan}}</td>
                                <td>{{date('d F Y', strtotime($item->tanggal_tagihan_awal))}}</td>
                                <td>{{date('d F Y', strtotime($item->tanggal_tagihan_akhir))}}</td>
                                <td class="text-center">
                                    <span class="badge badge-success">{{$item->status_tagihan}}</span>
                                    <span class="badge badge-warning text-white">{{$item->status_dokumen}}</span>
                                </td>
                                <td>Pengisian Dokumen</td>
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
        $('#table-request').dataTable();    
    </script>   
@endsection