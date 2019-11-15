<div id="HapusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="HapusModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title mt-0">Hapus Metadata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('metadata.hapus')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="" />
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="" id="judul" name="judul" readonly>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kondef</label>
                        <div class="col-sm-10">
                            <textarea name="kondef" id="kondef" class="form-control" readonly></textarea>
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