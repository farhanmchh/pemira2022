$('.edit-candidate').click(function() {
  $.get(`/candidate/get/${$(this).data('id')}`, function(candidate) {
    $('form#editCandidate').attr('action', `/candidate/update_candidate/${candidate.id}`)
    
    if (candidate.image) {
      $('.old-image').val(candidate.image)
    }

    $('.name-candidate').val(candidate.name)
  })
})

$('.btn-close').click(() => {
  $('.name-candidate').val('')
})