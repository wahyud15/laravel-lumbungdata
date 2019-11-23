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
<script>
    $('#hapusMappingIndikatorModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var tid = button.data('tid')
        var mindikator = button.data('mindikator')
        var tindikator = button.data('tindikator')
        var tahundata = button.data('tahundata')
        var leveladminis = button.data('leveladminis')
        
        
        var modal = $(this)
        modal.find('.modal-body #trx_id').val(tid)
        modal.find('.modal-body #master_indikator').val(mindikator)
        modal.find('.modal-body #turunan_indikator').val(tindikator)
        modal.find('.modal-body #tahun_data').val(tahundata)
        modal.find('.modal-body #level_administrasi').val(leveladminis)
    });
</script>
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
@if (Session::has('message'))
<div class="row">   
    <div class="col-12"> 
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
    </div>
</div>
@endif
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
                        <th>Tahun Data</th>
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
                            <td>{{ $t_indikator->tahundata }}</td>
                            <td>{{ $t_indikator->Mindikator->nama_indikator }}</td>
                            <td>{{ $t_indikator->User->name }}</td>
                            <td> 
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahMappingIndikatorModal">Tambah</button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusMappingIndikatorModal" data-tid="{{ $t_indikator->id }}" data-mindikator="{{ $t_indikator->Mindikator->nama_indikator }}" data-tindikator="{{ $t_indikator->nama_transaksi_indikator }}" data-leveladminis="{{$t_indikator->madministrativelevel_id}}" data-tahundata="{{ $t_indikator->tahundata }}">Hapus</button>
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
<!---hapus mapping-->
<div id="hapusMappingIndikatorModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="hapusMappingIndikatorModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title mt-0">Hapus Mapping Tabel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('tabeldinamis.hapusmappingIndikator')}}" method="post">
                        @csrf
                        <input type="hidden" name="trx_id" id="trx_id" value="" />
                        <input type="hidden" name="level_administrasi" id="level_administrasi" value="" />
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Master Indikator</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="master_indikator" name="master_indikator" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Turunan Indikator</label>
                            <div class="col-sm-10">
                                <textarea name="turunan_indikator" id="turunan_indikator" rows="3" class="form-control" readonly></textarea>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tahun Data</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" id="tahun_data" name="tahun_data" readonly>
                            </div>
                        </div>
                    <div class="form-group row">
                            <label for="example-text-input" class="col-sm-10 col-form-label"><em>*) Data yang sudah dihapus tidak bisa dikembalikan</em>
                            </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Hapus Data</button>
                </div>
                
            </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
