

$(function(){

  $('html, body').animate({ scrollTop: 0 }, 0);

  $('.openMeta').on('click', function() {
    $('.postMeta').toggleClass('opened');
  });

}); // End of Doc Ready