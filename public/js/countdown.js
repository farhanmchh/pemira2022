$('.btn-countdown').click(function() {
  $(this).hide()
  $.get('/dashboard/countdown', () => {})
  countdown(2)
})

const countdown = (timeleft) => {
  return new Promise((resolve, reject) => {
    let timer = setInterval(() => {
      $('.countdown').html(timeleft)
      
      if (timeleft == 0) {
        clearInterval(timer)
        $('.countdown-container').addClass('d-none')
        $('.chart').removeClass('d-none')
        resolve(true)
      }

      timeleft--
    }, 1000);
  })
}