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

<!-- Input Tabel Dinamis -->
<!-- <script src="{{ asset('js/tabeldinamis/inputtabeldinamis.js') }}"></script>   -->
@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Tabel Dinamis - Upload Data Tabel</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Upload Data</h4><br/>
                <form id="uploaddataform" action="{{ route('tabeldinamis.uploadDataIndikator') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <!-- <label for="uploaddataidindikator">ID Turunan Indikator</label> -->
                        <input type="hidden" name="uploaddataidindikator" id="uploaddataidindikator" value="{{$turunanIndikator->id}}" class="form-control" readOnly/>
                    </div>

                    <div class="form-group">
                        <label for="uploaddataindikator">Turunan Indikator</label>
                        <input type="text" id="uploaddataindikator" name="uploaddataindikator" value="{{$turunanIndikator->nama_transaksi_indikator}}" class="form-control" readOnly/>
                    </div>

                    <div class="form-group">
                        <label for="uploaddatatahun">Tahun Data</label>
                        <input id="uploaddatatahun" name="uploaddatatahun" class="form-control" value="{{$turunanIndikator->tahundata}}" readOnly />
                    </div>

                    <div class="form-group">
                        <label for="uploaddataadministrativelevel">Administrative Level</label>
                        <select id="uploaddataadministrativelevel" name="uploaddataadministrativelevel" class="form-control" readOnly>
                            <option value="{{$turunanIndikator->madministrativelevel_id}}" >{{$turunanIndikator->MadministrativeLevel->nama_administrativelevel}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="uploaddatafile">Softfile</label>
                        <input type="file" name="uploaddatafile" id="uploaddatafile" class="form-control" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
