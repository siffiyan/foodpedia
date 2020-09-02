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
                <th>Nilai</th>
                <th class="text-center">Status Tagihan</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($termin as $item)    
            <tr>
                <td>Termin ke-{{$item->no_termin}}</td>
                <td>{{$item->nama_project}}</td>
                <td>{{date('d F Y', strtotime($item->tgl_mulai))}}</td>
                <td>{{date('d F Y', strtotime($item->tgl_akhir))}}</td>
                <td>{{$item->no_tagihan}}</td>
                <td>{{$item->nilai_tagihan}}</td>
                <td class="text-center">
                    @if($item->status_tagihan == 'belum ditagih')
                        <span class="badge badge-danger">{{$item->status_tagihan}}</span>
                    @else
                        <span class="badge badge-success">{{$item->status_tagihan}}</span>
                    @endif

                    @if($item->status_dokumen == 'complete')
                        <span class="badge badge-success">{{$item->status_dokumen}}</span>
                    @else
                        <span class="badge badge-danger">{{$item->status_dokumen}}</span>
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

    </script>
@endsection

