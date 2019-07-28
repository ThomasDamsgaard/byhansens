'use strict'

$(document).ready(function() {
  loading();
});

function loading(){
  let num = 0;
  let i = 0;

  for(i = 0; i <= 100; i++) {
    setTimeout(function() {
      $('.loader span').html(num + '%');

      if(num == 100) {
        $('.loader').fadeOut(500);
      }
      num++;
    },i * 40);
  };
}
