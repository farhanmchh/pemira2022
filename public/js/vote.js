const vote = (user, candidate, number) => {
  Swal.fire({
    title: 'Apakah kamu yakin?',
    text: `Kamu akan memilih kandidat nomor urut ${number}`,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yakin!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      $.get(`/vote/voting/${user}/${candidate}`, () => {
        Swal.fire(
          'Terima kasih!',
          'Atas partisipasimu',
          'success'
        ).then(result => {
          if (result.isConfirmed) {
            $(location).attr('href', '/logout')
          }
        })
      })
    }
  })
}