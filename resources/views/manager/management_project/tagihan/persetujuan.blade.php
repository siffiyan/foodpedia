@extends('partials.app')

@section('title','List Tagihan')

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

<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">DETAIL PROJECT</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Nama Project</strong>

            <p class="text-muted">
              {{$project->nama_project}}
              <br>
              <small>No Kontrak {{$project->no_kontrak}}</small>
            </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Vendor</strong>

            <p class="text-muted">{{$project->nama_vendor}}</p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Jangka Waktu</strong>

            <p class="text-muted">{{date('d F Y', strtotime($project->tgl_mulai))}} - {{date('d F Y', strtotime($project->tgl_akhir))}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Nilai Project</strong>

            <p class="text-muted">{{"Rp " . number_format($project->nilai_project,2,',','.')}}</p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Periode</strong>

            <p class="text-muted">{{$project->jumlah_periode}}</p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Jenis Pengadaan</strong>

            <p class="text-muted">{{$project->jenis_pengadaan}}</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <div class="card-body">
                <div class="col-md-12">
                    <label>SURAT REKOMENDASI PEMBAYARAN</label>
                    <input type="text" class="form-control" value="{{$project->srt_rekomendasi_pembayaran}}" readonly>
                </div>
                <div class="col-md-12 mt-3">
                    <label>DOKUMEN PENDUKUNG TAGIHAN</label>
                    <table class="table table-bordered table-striped" id="table-dokumen">
                      <thead>                  
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Dokumen</th>
                          <th class="text-center">Status</th>                                  
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dokumen as $item)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$item->nama_dok_duk_tagihan}}</td>
                          <td class="text-center">
                            @if($item->status_dok_duk_tagihan == 'not_approval')
                            <span class="badge badge-warning">Not Approval</span>
                            @elseif($item->status_dok_duk_tagihan == 'approve')
                            <span class="badge badge-success">Approve</span>
                            @else
                            <span class="badge badge-danger">Reject</span>
                            @endif
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <label>DAFTAR WBS</label>
                    <table class="table table-bordered table-striped" id="table-wbs">
                      <thead>                  
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Kode Lokasi</th>
                          <th>Nilai Kode Lokasi</th>
                          <th>Nama Uraian</th>
                          <th>Nilai Uraian</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($wbs as $item)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$item->kode_lokasi}}</td>
                          <td>{{$item->nilai_per_kode_lokasi}}</td>
                          <td>{{$item->nama_uraian}}</td>
                          <td>{{$item->nilai_uraian}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
                  <form action="/manager/tagihan/approve_tagihan/{{$project->tagihan_id}}" method="post">
                  @method('put')
                  @csrf
                  <button type="submit" class="btn btn-info btn-block" @if($project->status_tagihan == 'tagihan disetujui') disabled @endif>APPROVE DOKUMEN</button>
                </form>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

@endsection

@section('js')
    <script>
      $('#table-dokumen').dataTable();
      $('#table-wbs').dataTable();
    </script>
@endsection

