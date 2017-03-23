$stick = $('aside');
$foot = $('footer');
margin = 20;
offtop = $stick.offset().top - margin;
offbtm = $foot.offset().top - ( margin*2 + $stick.height() );

$(window).scroll(function () {
	scrtop = $(window).scrollTop();
  if (scrtop > offtop && $stick.hasClass('natural')) {
    $stick.removeClass('natural').addClass('fixed').css('top', margin);
  }
  if (offtop > scrtop && $stick.hasClass('fixed')) {
    $stick.removeClass('fixed').addClass('natural').css('top', 'auto');
  }
  if (scrtop > offbtm && $stick.hasClass('fixed')) {
    $stick.removeClass('fixed').addClass('bottom').css('top', offbtm+margin);
  }
  if (offbtm > scrtop && $stick.hasClass('bottom')) {
    $stick.removeClass('bottom').addClass('fixed').css('top', margin);
  }
});