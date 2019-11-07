@section('css')
<!-- DataTables -->
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }} " rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('js')
<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>  
@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Tabel Dinamis - Kelola Master Tabel</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Kelola Master Indikator</h4><br/>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Indikator</th>
                        <th>Subjek</th>
                        <th>Karakteristik</th>
                        <th>Judul Baris</th>
                        <th>Periode</th>
                        <th>Satuan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($mindikator as $indikator)
                        <tr>
                            <td>{{ $indikator->id }}</td>
                            <td>{{ $indikator->nama_indikator }}</td>
                            <td>{{ $indikator->Msubjek->nama_subjek }}</td>
                            <td>{{ $indikator->Mkarakteristik->nama_karakteristik }}</td>
                            <td>{{ $indikator->Mbaris->nama_baris }}</td>
                            <td>{{ $indikator->Mperiode->nama_periode }}</td>
                            <td>{{ $indikator->Msatuan->nama_satuan }}</td>
                            <td> 
                                <button class="btn btn-success">Tambah</button>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
