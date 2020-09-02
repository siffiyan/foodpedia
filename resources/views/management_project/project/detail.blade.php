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

    <div class="col-md-9">
        <div class="card">
          <div class="card-header"><b>List Termin</b></div>
          <div class="card-body">
                <div class="col-md-12 mt-2">
                    <table id="table-termin" class="table table-bordered table-striped projects">
                        <thead>
                            <tr>
                                <th>Termin ke-</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th class="text-center">Status</th>
                                <th>No Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($termin as $item)
                            <tr>
                                <td> <a href="#" onclick="show({{$item->tagihan_id}})"> Termin {{$loop->iteration}} </a></td>
                                <td>{{date('d F Y', strtotime($item->tgl_mulai))}}</td>
                                <td>{{date('d F Y', strtotime($item->tgl_akhir))}}</td>
                                <td class="text-center">
                                  @if($item->status_tagihan == 'belum ditagih')
                                    <span class="badge badge-danger">{{$item->status_tagihan}}</span>
                                    @else
                                    <span class="badge badge-success">{{$item->status_tagihan}}</span>
                                    @endif
                                </td>
                                <td>{{$item->no_tagihan}}</td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
          </div><!-- /.card-body -->
        </div>

        <div class="card" id="detail" style="display: none">
          <div class="card-header p-2">
            <div class="card-body">
                <div class="col-md-12">
                    <label>SURAT REKOMENDASI PEMBAYARAN</label>
                    <div id="srt"></div>
                    <div id="inp">
                      <input type="text" class="form-control" id="surat_rekom_pemb" readonly>
                    </div>
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
                        <tbody id="data-dokumen">  
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
                      <tbody id="data-wbs">
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
        
    </div>
</div><!-- /.container-fluid -->

@endsection

@section('js')
  <script> 
    function show(id){
      $.ajax({
        url: '/management_project/detail_tagihan/'+id,
        type: "GET",
        dataType: 'JSON',
        success: function( data, textStatus, jQxhr ){
          $('#detail').show();
          console.log(data);
          if (!$.trim(data.project.srt_rekomendasi_pembayaran)){
            $('#srt').html(`
            <div style="border:2px dashed black;padding: 25px;text-align: center;">
              Belum ada surat rekomendasi pembayaran
            </div>
            `);
            $('#inp').hide();
          }else{
            $('#surat_rekom_pemb').val(data.project.srt_rekomendasi_pembayaran);
          }
         
          $('#data-dokumen').empty();
          $('#data-wbs').empty();

          if (!$.trim(data.dokumen)){
            $('#data-dokumen').html(`
              <tr>
                <td colspan="3" class="text-center">Tidak ada data dalam database</td>
              </tr>
            `);
          }  

          if (!$.trim(data.wbs)){
            $('#data-wbs').html(`
              <tr>
                <td colspan="5" class="text-center">Tidak ada data dalam database</td>
              </tr>
            `);
          }  

          $.each( data.dokumen, function( key, value ) {
            if(value.status_dok_duk_tagihan == 'approve'){
              var status = `<span class="badge badge-success">approve</span>`;
            }else{
              var status = `<span class="badge badge-danger">reject</span>`
            }
              $('#data-dokumen').append(`
              <tr>
                <td>`+(key+1)+`</td>
                <td>`+value.nama_dok_duk_tagihan+`</td>
                <td class="text-center">`+status+`</td>
              </tr>
            `);
          });

          $.each( data.wbs, function( key, value ) {
            $('#data-wbs').append(`
              <tr>
                <td>`+(key+1)+`</td>
                <td>`+value.kode_lokasi+`</td>
                <td>`+value.nilai_per_kode_lokasi+`</td>
                <td>`+value.nama_uraian+`</td>
                <td>`+ value.nilai_uraian+`</td>
              </tr>
            `);
          });
          
        },
        error: function( jqXhr, textStatus, errorThrown ){
          console.log( errorThrown );
          console.warn(jqXhr.responseText);
        },
      });
    }
      $('#table-dokumen').dataTable();
      $('#table-wbs').dataTable();
  </script>

@endsection

