var desc = $('#hidden-input').val()
var quill = new Quill('#editor', {
    modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
        ]
      },
    theme: 'snow'
})

if(desc !== ''){
    quill.container.firstChild.innerHTML = desc
}

let inputElement = document.getElementById('hidden-input')
quill.on('text-change', function() {
  inputElement.value = JSON.stringify(quill.getContents())
  inputElement.value = quill.root.innerHTML
})

function previewImage() {
    var element = document.getElementById("image-preview")
    element.classList.remove("d-none")
    document.getElementById("image-preview").style.display = "block"

    var oFReader = new FileReader()
    oFReader.readAsDataURL(document.getElementById("image-source").files[0])
    oFReader.onload = function(oFREvent) {
    document.getElementById("image-preview").src = oFREvent.target.result
  }
}

var rupiah = document.getElementById('harga')
  rupiah.addEventListener('keyup', function(e){
    rupiah.value = formatRupiah(this.value, 'Rp. ')
  })

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi)

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : ''
      rupiah += separator + ribuan.join('.')
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah
    return prefix == undefined ? rupiah : (rupiah ? rupiah : '')
  }


$('.btn-add-fasilitas').click(function(){
  var data = $('#add-fasilitas').serializeArray()
  
  var i;
  for (i = 0; i < data.length; ++i) {
    var array = data[i].value.split('_')

    if($("#row-fasilitas-" + array[0]).length == 0) {
      $('#data-fasilitas').append("<tr id='row-fasilitas-" + array[0] + "'>\
        <td></td>\
        <td class='align-top' id='fasilitas-list-" + array[0] + "'>\
          <div class='d-flex py-1'>\
            <div class='d-lg-inline d-none'>\
              <h3><i class='" + array[1] + "'></i> &nbsp;&nbsp;</h3>	\
            </div> \
            <div class='d-flex flex-column justify-content-center'> \
              <h6 class='mb-2 text-sm wrap-table-argon'>" + array[2] + "</h6> \
            </div> \
          </div> \
        </td>\
        <td class='text-center'>\
          <button type='button' class='btn btn-sm btn-danger' onclick='removeFasilitas(" + array[0] + ")' ><i class='fas fa-trash'></i></button>\
        </td>\
        <input type='hidden' name='fasilitasid[]' id='fasilitas-inpuut-" + array[0] + "' value='" + array[0] + "'>\
      </tr>")
    }
  }
})


function removeFasilitas(id){
  $('#row-fasilitas-' + id).remove()
}