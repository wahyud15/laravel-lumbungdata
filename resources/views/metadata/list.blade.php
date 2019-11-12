@section('css')
<!-- DataTables -->
<link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('js')
<!-- Required datatable js -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/pages/datatables.init.js')}}"></script>  
@include('metadata.js')
@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Metadata</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="{{url('')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Metadata</li>
                <li class="breadcrumb-item active">List Data</li>
            </ol>
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

                <h4 class="mt-0 header-title">List Metadata</h4>
                <p class="sub-title">Kumpulan metadata</p>

                <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Konsep dan Definisi</th>
                        <th>Kegunaan</th>
                        <th>Interpretasi</th>
                        <th width="50px">Aksi</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($dataList as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td><p>{{$item->kondef}}</p></td>
                            <td>{{$item->kegunaan}}</td>
                            <td>{{$item->interpretasi}}</td>
                            <td>
                                <a href="{{route('metadata.edit',$item->id)}}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="fas fa-pencil-alt"></i></a> 
                                <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#HapusModal" data-id="{{$item->id}}" data-judul="{{$item->nama}}" data-kondef="{{$item->kondef}}"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>    
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@include('metadata.confirmModal')
@endsection
