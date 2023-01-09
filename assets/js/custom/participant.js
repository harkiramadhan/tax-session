$('.btn-edit').click(function(){
    var id = $(this).attr('data-id')
    $.ajax({
        url: baseUrl + 'admin/pelatihan/modalEditParticipant/' + id,
        type: 'get',
        beforeSend: function(){
            $('.edit-content').empty()
            $('#modalEdit').modal('show')
        },
        success: function(res){
            $('.edit-content').html(res)
        }
    })
})

$('.btn-upload').click(function(){
    var id = $(this).attr('data-id')
    $.ajax({
        url: baseUrl + 'admin/pelatihan/modalUploadParticipant/' + id,
        type: 'get',
        beforeSend: function(){
            $('.upload-content').empty()
            $('#modalUpload').modal('show')
        },
        success: function(res){
            $('.upload-content').html(res)
        }
    })
})

$('.toggle-bayar').change(function(){
    var id = $(this).attr('data-id')
    if($(this).prop('checked')){
        var status = 1
    }else{
        var status = 2
    }

    $.ajax({
        url: baseUrl + 'admin/pelatihan/payParticipant/' + id,
        type: 'get',
        data: {status : status},
        success: function(res){
            alert(res.message)
            if(res.status == 200){
                $('.badge-pembayaran-' + id).removeClass('bg-gradient-success')
                $('.badge-pembayaran-' + id).removeClass('bg-gradient-danger')
                $('.badge-pembayaran-' + id).addClass('bg-gradient-' + res.color)
                $('.badge-pembayaran-' + id).text(res.text)
            }
        }
    })
})