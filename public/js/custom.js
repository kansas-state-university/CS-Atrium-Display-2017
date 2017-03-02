$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

$('div.success').not('.success-important').delay(3000).fadeOut(350);


$("#scrollClock").click(function() {
    $('html, body').animate({
        scrollTop: $("#bottom").offset().top
    }, 2000);
});


$(window).scroll(function(){
    $(".top").css("opacity", 1 - $(window).scrollTop() / 250);
  });

$(window).scroll(function(){
    $(".bottom").css("opacity", ($(window).scrollTop() / 350) - 1);
  });

$(window).scroll(function() {

  if ($(this).scrollTop()>100)
  {
    $('.arrow').fadeOut();
  }
  else
  {
    $('.arrow').fadeIn();
  }
});


var myPlayer;
jQuery(function () {

  myPlayer = jQuery(".player").YTPlayer();
});

(function() {
  $('form > input').keyup(function() {

    var empty = false;
    $('form > input').each(function() {
      if ($(this).val() == '') {
        empty = true;
      }
    });

    if (empty) {
      $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    } else {
      $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
    }
  });
})()
