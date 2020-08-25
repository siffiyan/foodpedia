@extends('partials.app')

@section('title','Project Detail')

@section('content')

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
              Project Pasar Senen
              <br>
              <small>No Kontrak</small>
            </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Vendor</strong>

            <p class="text-muted">PT. Maju Mundur</p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Jangka Waktu</strong>

            <p class="text-muted">1 Januari 2020 - 1 Desember 2020</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Nilai Project</strong>

            <p class="text-muted">Rp. 10.000.000</p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Periode</strong>

            <p class="text-muted">6</p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Jenis Pengadaan</strong>

            <p class="text-muted">Pengadaan Alat Berat</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

    <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Termin</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Dokumen</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">WBS</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="col-md-12 mt-2">
                    <label>TERMIN</label>
                    <table id="table-termin" class="table table-bordered table-striped projects">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th class="text-center">Status</th>
                                <th>No Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>1</td>
                                <td>1 Januari 2020</td>
                                <td>1 Desember 2020</td>
                                <td class="text-center">
                                    <span class="badge badge-danger">Jatuh Tempo</span>
                                </td>
                                <td>2131</td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <div class="col-md-12">
                    <label>SURAT REKOMENDASI PEMBAYARAN</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12 mt-2">
                    <label>DAFTAR DOKUMEN TAGIHAN</label>
                    <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Dokumen Tagihan</th>
                            <th class="text-center">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td class="text-center"><span class="badge bg-success">approved</span></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <div class="col-md-12 mt-2">
                    <label>DAFTAR WBS</label>
                    <table class="table table-bordered" id="table-wbs">
                        <thead>                  
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Kode Lokasi</th>
                            <th>Anggaran</th>
                            <th>Uraian</th>
                            <th>Nilai Uraian</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>K001</td>
                            <td>Rp. 10.000.000</td>
                            <td>Membuat Roti Kusus</td>
                            <td>Rp. 1000.000</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
  </div><!-- /.container-fluid -->

@endsection

@section('js')
  <script>
      $('#table-wbs').dataTable();
  </script>

@endsection

