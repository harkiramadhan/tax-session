$(document).ready(function(){

    $("#copy-norek").click(function(event){
        var valueToCopy = $('#norek').text();
        $('#norek').append('<textarea id="temp"></textarea>');
        $("#temp").val(valueToCopy);
        $('#temp').select().text();
        document.execCommand("Copy");
        $("#temp").remove();
        $(alert("Nomor Rekening Berhasil di Salin"));
    });

    $("#copy-nominal").click(function(event){
        var valueToCopy = $('#nominal').text();
        $('#nominal').append('<textarea id="temp"></textarea>');
        $("#temp").val(valueToCopy);
        $('#temp').select().text();
        document.execCommand("Copy");
        $("#temp").remove();
        $(alert("Nominal Pembayaran Berhasil di Salin"));
    });
});

