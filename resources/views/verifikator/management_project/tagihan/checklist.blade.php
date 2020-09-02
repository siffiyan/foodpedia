@extends('partials.app')

@section('title','Detail Tagihan')

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
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Dokumen Pendukung Tagihan</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Daftar WBS</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">

              <!-- /.tab-pane -->
              <div class="active tab-pane" id="activity">
                <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Dokumen</th>
                        <th class="text-center">Status</th>
                        <th style="width: 10px" class="text-center">Action</th>
                        
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
                        <td><button class="btn btn-info btn-sm" onclick="persetujuan({{$item->id_dok_dukung_tagihan}})" @if($item->status_dok_duk_tagihan != 'not_approval') disabled @endif>persetujuan</button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <button class="btn btn-info btn-block" onclick="srt_rekom({{$project->tagihan_id}})" @if($total > 0) disabled @elseif(!empty($project->srt_rekomendasi_pembayaran)) disabled @endif>Surat Rekomendasi Pembayaran</button>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="timeline">
                <table class="table table-bordered">
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
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->

  <div class="modal fade" id="modal_pembayaran">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Default Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/management_project/termin/srt_rekom" method="post">
          @csrf
        <div class="modal-body">
            <label>SURAT REKOMENDASI PEMBAYARAN</label>
            <input type="hidden" name="id" id="id">
            <input type="text" class="form-control" name="srt_rekom">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div id="approval" class="modal fade bs-modal-lg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog custom-modal-size-sm">
          <div class="modal-content">
              <div class="modal-body">
                  <center>
                      <h4>Approval Dokumen Pendukung</h4>
                  </center>
                  <hr>
                  <center>
                      <div class="dash text-center"><h6 style="margin-bottom:0 !important"> <b>make sure your choice is correct because your choice cannot be changed again</b></h6></div>
                  </center>
                  <form action="/management_project/termin/approve_dok_tagihan" method="post">
                    @csrf
                  <div class="row" style="margin-top: 25px;margin-left:10px;margin-right:10px">
                      <input type="hidden" id="id" name="id">
                      <button type="submit" class="btn btn-success btn-block">Approve</button>
                  </div>
                  </form>
                  <form action="#" method="post">
                  <div class="row" style="margin-top: 5px;margin-left:10px;margin-right:10px">
                      <input type="hidden" id="id" name="id">
                      <button onclick="reject()" class="btn btn-danger btn-block">Reject</button>
                  </form>
                  </div>
              </div>
          </div>
    </div>
  </div>

@endsection

@section('js')
    <script>
        function srt_rekom(id){
            $('#id').val(id);
            $('#modal_pembayaran').modal('show');
        }

        function persetujuan(id){
          $('#id').val(id);
          $('#approval').modal('show');
        }
    </script>
@endsection

