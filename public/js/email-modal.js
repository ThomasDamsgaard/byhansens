$(document).ready(function() {


  if (localStorage.getItem('state') == null) {
    let state = setTimeout(function () {
      $('#popup').addClass('is-active');
      localStorage.setItem('state', 'true');
    }, 10000);
  }


    $('#close').click(function(event) {
      event.preventDefault;
      $('#popup').fadeOut()
    });
  });
