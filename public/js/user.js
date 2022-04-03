$('.classroom').change(function() {
  let url = new URL(window.location)
  url.searchParams.set('filter', $(this).val())
  window.history.pushState({}, '', url)
  
  $.get(`/user/get/${$(this).val()}`, function(users) {
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
      
      rowStack += row(user, status, hapus, i)
    })

    $('.row-container').html(rowStack)
  })
})

$('.clear-vote').click(function() {
  $.get(`/user/clear_vote/${$(this).data('id')}`, function(res) {
    Swal.fire({
      title: `Hapus suara`,
      text: `Suara ${res.name} berhasil dihapus`,
      icon: 'success'
    }).then(() => {
      location.reload()
    })
  })
})

function row(user, status, hapus, i) {
  return `<tr>
            <th>${i + 1}</th>
            <td>${user.name}</td>
            <td><i class="${status}"></i></td>
            <td>${hapus}</i></td>
          </tr>`
}