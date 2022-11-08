$('.btn-remove').click(function(){
    var id = $(this).attr('data-id')
    $.ajax({
        url: baseUrl + 'admin/pelatihan/delete',
        type: 'get',
        data: {id: id},
        beforeSend: function(){
            $('#modal-remove').modal('show')
        },
        success: function(res){
            $('.remove-content').html(res)
        }
    })
})