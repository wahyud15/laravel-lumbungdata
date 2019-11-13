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
            <h4 class="page-title">Tabel Dinamis - Mapping Indikator</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Mapping Indikator</h4><br/>

                <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Turunan Indikator</th>
                        <th>Master Indikator</th>
                        <th>Produsen Data</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($mt_indikator as $t_indikator)
                        <tr>
                            <td>{{ $t_indikator->id }}</td>
                            <td>{{ $t_indikator->nama_transaksi_indikator }}</td>
                            <td>{{ $t_indikator->Mindikator->nama_indikator }}</td>
                            <td>{{ $t_indikator->User->name }}</td>
                            <td> 
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahMappingIndikatorModal">Tambah</button>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<!-- The Modal -->
<div class="modal fade" id="tambahMappingIndikatorModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Turunan Indikator</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="tambahMappingIndikatorForm" action="{{ route('tabeldinamis.mappingIndikator') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="tambahMappingIndikatorNamaTurunanIndikator">Turunan Indikator</label>
                <input type="text" class="form-control" id="tambahMappingIndikatorNamaTurunanIndikator" name="tambahMappingIndikatorNamaTurunanIndikator" />
            </div>

            <div class="form-group">
                <label for="masterIndikator">Master Indikator</label>
                <select id="masterIndikator" name="masterIndikator" class="form-control">
                    @foreach($mindikator as $indikator)
                        <option value="{{ $indikator->id }}"> {{ $indikator->nama_indikator }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tahundata">Tahun Data</label>
                <select id="tahundata" name="tahundata" class="form-control">
                    @foreach($tahun as $tha)
                        <option value="{{ $tha->id }}"> {{ $tha->id }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="administrativelevel">Level Administrasi Data</label>
                <select id="administrativelevel" name="administrativelevel" class="form-control">
                    @foreach($administrativelevel as $level)
                        <option value="{{ $level->id }}"> {{ $level->nama_administrativelevel }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="produsendata">Produsen Data</label>
                <select id="produsendata" name="produsendata" class="form-control">
                    @foreach($muser as $user)
                        <option value="{{ $user->id }}"> {{ $user->name }} </option>
                    @endforeach
                </select>
            </div>
            

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>

@endsection
