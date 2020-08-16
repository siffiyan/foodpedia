@extends('partials.app')

@section('title','PNPP Vendor')

@section('content')

<div class="row">
<form action="{{route('penpp_vendor.update',$penpp->id_kontrak)}}">
    {{-- BERITA ACARA PENAWARAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_ba_penawaran">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA PENARAWAN</label>
                            <input type="text" class="form-control" name="no_ba_penawaran">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- BERITA ACARA EVALUASI --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_ba_evaluasi">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA EVALUASI</label>
                            <input type="text" class="form-control" name="no_ba_evaluasi">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- BERITA ACARA NEGOSIASI --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_ba_negosiasi">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA NEGOSIASI</label>
                            <input type="text" class="form-control" name="no_ba_negosiasi">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT LAPORAN PENGADAAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_srt_laporan_pengadaan">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NO BERITA ACARA PENGADAAN</label>
                            <input type="text" class="form-control" name="no_srt_laporan_pengadaan">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- NOTA DINAS USULAN PENETAPAN --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_nd_usulan_penetapan">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>NOTA DINAS USULAN PENETAPAN</label>
                            <input type="text" class="form-control" name="no_nd_usulan_penetapan">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PENETAPAN PENYEDIA --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_sk_penetapan_penyedia">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PENETAPAN PENYEDIA</label>
                            <input type="text" class="form-control" name="no_sk_penetapan_penyedia">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PEMENANG --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_sk_penetapan_pemenang">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PEMENANG</label>
                            <input type="text" class="form-control" name="no_sk_penetapan_pemenang" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    {{-- SURAT KETERANGAN PENYEDIA JASA --}}
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-info">
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
                            <input type="date" class="form-control" name="tgl_srt_penunjukan_penyedia_jasa">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>SURAT KETERANGAN PENYEDIA JASA</label>
                            <input type="text" class="form-control" name="no_srt_penunjukan_penyedia_jasa">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</form>
</div>

<button type="submit" class="btn btn-success btn-block mb-3 ">Save Changes</button>

@endsection

@section('js')
    
@endsection