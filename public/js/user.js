// get users
$('.classroom').change(function() {
  let url = new URL(window.location)
  url.searchParams.set('filter', $(this).val())
  window.history.pushState({}, '', url)
  
  $.get(`/user/get_users/${$(this).val()}`, function(users) {
    let rowStack
    let status
    let hapus

    users.forEach((user, i) => {
      if (user.status)  {
        status = 'fs-3 mdi mdi-checkbox-marked-circle-outline text-success'
        hapus = `<i class="btn p-0 fs-2 mdi mdi-power text-danger clear-vote" data-id="${user.id}"></i>`
      } else {
        status = 'fs-3 mdi mdi-checkbox-blank-circle-outline text-danger'
        hapus = '<i class="fs-3 mdi mdi-checkbox-blank-circle-outline"></i>'
      }
      
      rowStack += userRow(user, status, hapus, i)
    })

    $('.row-container').html(rowStack)
  })
})

// clear vote
$(document).on('click', '.clear-vote', function() {
  $.get(`/user/get_user/${$(this).data('id')}`, function(user) {
    Swal.fire({
      icon: 'question',
      titleText: `Hapus suara`,
      text: user.name,
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus!',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        clearVote(user.id)
      }
    })
  })
})

const clearVote = (param) => {
  $.get(`/user/clear_vote/${param}`, function(res) {
    Swal.fire({
      icon: 'success',
      title: `Hapus suara`,
      text: `Suara ${res.name} berhasil dihapus`,
    }).then(() => {
      location.reload()
    })
  })
}

const userRow = (user, status, hapus, i) => {
  return `<tr>
            <th>${i + 1}</th>
            <td>${user.name}</td>
            <td><i class="${status}"></i></td>
            <td>${hapus}</i></td>
          </tr>`
}