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

<!-- Input Tabel Dinamis -->
<script src="{{ asset('js/tabeldinamis/inputtabeldinamis.js') }}"></script>  
@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Tabel Dinamis - Input Data Tabel</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Pilih Subjek</h4><br/>

                <form id="itdformsubjek" action="{{ route('tabeldinamis.getListMindikator') }}" method="POST" class="form-group">
                    @csrf
                    <!-- Subjek -->
                    <div class="form-group">
                        <label for="itdsubjek">Subjek</label>
                        <select id="itdsubjek" class="form-control">
                            @foreach($msubjek as $subjek)
                                <option value="{{$subjek->id}}">{{$subjek->nama_subjek}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button id="btnitdsubjek" type="submit" class="btn btn-primary waves-effect waves-light">
                            Tampilkan Indikator
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row" id="panelitdformindikator" style="display:none">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Pilih Indikator</h4><br/>

                <form id="itdformindikator" action="#" method="POST" class="form-group">
                    @csrf
                    <!-- Subjek -->
                    <div class="form-group">
                        <label for="itdindikator">Indikator</label>
                        <select id="itdindikator" class="form-control" name="">
                        </select>
                    </div>
                    <div class="form-group">
                        <button id="btnitdindikator" type="submit" class="btn btn-primary waves-effect waves-light">
                            Upload Data Tabel
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row" id="panelitdformupload" style="display:none">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Upload Data Tabel</h4><br/>

                <form id="itdformupload" action="#" method="POST">
                    @csrf
                    <!-- Subjek -->
                    <div class="form-group">
                        <label for="itdformuploadtahun">Tahun</label>
                        <select id="itdformuploadtahun">
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                    <input type="file" name="itdformuploadfile" id="itdformuploadfile"/>
                    <div class="form-group">
                        <button id="btnitdkonfigurasi" type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



@endsection
