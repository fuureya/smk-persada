// sweet alert configurasi
const pesan = $('.pesan').data('pesan')
if(pesan){
    Swal.fire(
        'Selamat',
        'Kamu berhasil Mendaftar',
        'success'
      )
}