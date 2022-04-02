let id

$('.btn-vimi').click(function() {
  id = $(this).data('id')

  $.get(`/candidate/get/${id}`, function(candidate) {
    $('.number-vimi-label').html(candidate.number)
    
    if (candidate.vission || candidate.mission) {
      $('.number-vimi-label').html(candidate.number)
      $('.vission-container').html(candidate.vission)
      $('.mission-container').html(candidate.mission)
    } else {
      $('.vission-container').html('...')
      $('.mission-container').html('...')
    }
  })
})

$('.edit-vimi').click(function() {
  $.get(`/candidate/get/${id}`, function(candidate) {
    $('form#editVimi').attr('action', `/candidate/update_vimi/${candidate.id}`)

    $('.vission').html(candidate.vission)
    $('.mission').html(candidate.mission)
  })
})

$('.vission').keyup(() => updateVimi())
$('.mission').keyup(() => updateVimi())

$('.btn-close').click(function() {
  $('.number-vimi-label').empty()
  $('.vission-container').empty()
  $('.mission-container').empty()
})

const updateVimi = () => $.post(`/candidate/update_vimi/${id}`, $('form#editVimi').serialize(), () => {})
