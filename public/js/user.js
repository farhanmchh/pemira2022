$('.classroom').change(function() {
  let url = new URL(window.location)
  url.searchParams.set('filter', $(this).val())
  window.history.pushState({}, '', url)
  
  $.get(`/user/get/${$(this).val()}`, function(users) {
    let rowStack
    let status

    users.forEach((user, i) => {
      user.status
      ? status = 'fs-3 mdi mdi-checkbox-marked-circle-outline text-success'
      : status = 'fs-3 mdi mdi-checkbox-blank-circle-outline text-danger'
      
      rowStack += row(user, status, i)
    })

    $('.row-container').html(rowStack)
  })
})

function row(user, status, i) {
  return `<tr>
            <th>${i + 1}</th>
            <td>${user.name}</td>
            <td><i class="${status}"></i></td>
          </tr>`
}