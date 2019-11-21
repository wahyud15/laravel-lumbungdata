<script>
$('#HapusModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var judul = button.data('judul')
  var kondef = button.data('kondef')
  var id = button.data('id')
  

  var modal = $(this)
  modal.find('.modal-body #judul').val(judul)
  modal.find('.modal-body #kondef').val(kondef)
  modal.find('.modal-body #id').val(id)
});
</script>