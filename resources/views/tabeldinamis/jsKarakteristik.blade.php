<script>
    $('#itemKaViewModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var karid = button.data('mkarid')
    
      $.ajax({
            url : '{{route("tabeldinamis.itemkarakteristik","")}}/'+karid,
            method : 'get',
            cache: false,
            dataType: 'json',
            success: function(data){    
                if (data.status==false) {
                    $('#itemKaViewModal .modal-body #tabelitemkar tbody').html("<tr><td colspan='3' align='center'>Tidak ada karakteristik</td></tr>")
                }
                else {
                    /*
                    var tmax = data.jumlah_item;
                    var i;
                    var dItem = data.hasil;
                    var text = "";
                    for (i = 1; i <= tmax; i++) {
                        text += "<tr><td>"+ dItem[i].no_urut +"</td><td>" + dItem[i].nama_karakteristik + "</td><td>" + dItem[i].nama_items + "</td></tr>";
                    }*/
                    var modal = $(this)
                    modal.find('.modal-body #tabelitemkar tbody').html("<tr><td>testing</td></tr>")
                    //$('#itemKaViewModal .modal-body #tabelitemkar tbody').html(text)
                }
    
            },
            error: function(){
                alert("error");
            }
    
        });
    })
    
    </script>