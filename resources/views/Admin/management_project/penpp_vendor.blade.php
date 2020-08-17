@extends('partials.app')

@section('title','PNPP Vendor')

@section('content')

<form action="{{route('penpp_vendor.update',$penpp->id_penpp_vendor)}}" method="POST">
    @method('PUT')
    @csrf

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
    <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-white">
            <h3 class="widget-user-desc"><b>{{$project->nama_project}}</b></h3>
            <h6>{{date('d F Y', strtotime($project->tgl_mulai))}} - {{date('d F Y', strtotime($project->tgl_akhir))}}</h6>
            <small>{{$project->no_kontrak}} | {{$project->jenis_pengadaan}} | {{"Rp " . number_format($project->nilai_project,2,',','.')}} | {{$project->no_srt_penunjukan_penyedia_jasa}}</small>
        </div>
        </div>
        <!-- /.widget-user -->
    </div>
</div>

<div class="row">
    {{-- BERITA ACARA PENAWARAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_ba_penawaran) || empty($penpp->no_ba_penawaran)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Berita Acara Penawaran</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_ba_penawaran" value="{{$penpp->tgl_ba_penawaran}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA PENARAWAN</label>
                            <input type="text" class="form-control" name="no_ba_penawaran" value="{{$penpp->no_ba_penawaran}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- BERITA ACARA EVALUASI --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_ba_evaluasi) || empty($penpp->no_ba_evaluasi)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Berita Acara Evaluasi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_ba_evaluasi" value="{{$penpp->tgl_ba_evaluasi}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA EVALUASI</label>
                            <input type="text" class="form-control" name="no_ba_evaluasi" value="{{$penpp->no_ba_evaluasi}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- BERITA ACARA NEGOSIASI --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_ba_negosiasi) || empty($penpp->no_ba_negosiasi)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Berita Acara Negosiasi</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_ba_negosiasi" value="{{$penpp->tgl_ba_negosiasi}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA NEGOSIASI</label>
                            <input type="text" class="form-control" name="no_ba_negosiasi" value="{{$penpp->no_ba_negosiasi}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT LAPORAN PENGADAAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_srt_laporan_pengadaan) || empty($penpp->no_srt_laporan_pengadaan)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Surat Laporan Pengadaan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_srt_laporan_pengadaan" value="{{$penpp->tgl_srt_laporan_pengadaan}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA PENGADAAN</label>
                            <input type="text" class="form-control" name="no_srt_laporan_pengadaan" value="{{$penpp->no_srt_laporan_pengadaan}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- NOTA DINAS USULAN PENETAPAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_nd_usulan_penetapan) || empty($penpp->no_nd_usulan_penetapan)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Nota Dinas Usulan Penetapan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_nd_usulan_penetapan" value="{{$penpp->tgl_nd_usulan_penetapan}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NOTA DINAS USULAN PENETAPAN</label>
                            <input type="text" class="form-control" name="no_nd_usulan_penetapan" value="{{$penpp->no_nd_usulan_penetapan}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PENETAPAN PENYEDIA --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_sk_penetapan_penyedia) || empty($penpp->no_sk_penetapan_penyedia)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Surat Keterangan Penetapan Penyedia</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_sk_penetapan_penyedia" value="{{$penpp->tgl_sk_penetapan_penyedia}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PENETAPAN PENYEDIA</label>
                            <input type="text" class="form-control" name="no_sk_penetapan_penyedia" value="{{$penpp->no_sk_penetapan_penyedia}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PEMENANG --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_sp_penetapan_pemenang) || empty($penpp->no_sp_penetapan_pemenang)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">Surat Keterangan Penetapan Pemenang</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_sp_penetapan_pemenang" value="{{$penpp->tgl_sp_penetapan_pemenang}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PEMENANG</label>
                            <input type="text" class="form-control" name="no_sp_penetapan_pemenang" value="{{$penpp->no_sp_penetapan_pemenang}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PENYEDIA JASA --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card @if(empty($penpp->tgl_srt_penunjukan_penyedia_jasa) || empty($penpp->no_srt_penunjukan_penyedia_jasa)) card-danger @else card-info @endif">
            <div class="card-header">
            <h3 class="card-title">surat Keterangan Penyedia Jasa</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TANGGAL</label>
                            <input type="date" class="form-control" name="tgl_srt_penunjukan_penyedia_jasa" value="{{$penpp->tgl_srt_penunjukan_penyedia_jasa}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PENYEDIA JASA</label>
                            <input type="text" class="form-control" name="no_srt_penunjukan_penyedia_jasa" value="{{$penpp->no_srt_penunjukan_penyedia_jasa}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success btn-block mb-3 ">Save Changes</button>
</form>

@endsection

@section('js')
    
@endsection