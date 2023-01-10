$('.btn-find').click(function(){
    find()
})

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        find()
    }
});

function find(){
    var find = $('#find').val()

    if(find){
        $.ajax({
            url: baseUrl + 'transaksi/find',
            type: 'get',
            data: {find : find},
            beforeSend: function(){
                $('#find').removeClass('is-invalid')
                $('#find').addClass('is-valid')
                $('.result').empty()
            },
            success: function(res){
                $('.result').html(res)
            }
        })
    }else{
        $('#findValidation').text('Lengkapi Form Terlebih Dahulu')
        $('#find').addClass('is-invalid')
    }
}