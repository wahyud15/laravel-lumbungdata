@section('css')

@stop
@section('js')
 <!-- Parsley js -->
 <script src="{{asset('plugins/parsleyjs/parsley.min.js')}}"></script>
 <script>
    $(document).ready(function() {
        $('form').parsley();
    });
</script>
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
                <li class="breadcrumb-item"><a href="{{route('metadata.list')}}">Metadata</a></li>
                <li class="breadcrumb-item active">Tambah Metadata</li>
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

                <h4 class="mt-0 header-title">Tambah Metadata</h4>
                <p class="sub-title">Menambahkan metadata kegiatan</p>
                <form method="POST" class="form" action="{{route('metadata.simpan')}}">
                    @csrf
                    <div class="form-group">
                            <label>Judul Metadata</label>
                            <input type="text" name="nama" class="form-control" required placeholder="Judul metadata"/>
                        </div>

                        <div class="form-group">
                            <label>Kondef</label>
                            <div>
                                <textarea required name="kondef" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kegunaan</label>
                            <div>
                                <textarea name="kegunaan" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                                <label>Interpretasi</label>
                                <div>
                                    <textarea name="interpretasi" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Reset
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
    
@endsection
