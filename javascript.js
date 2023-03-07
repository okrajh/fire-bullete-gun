
$('.fire-btn').click(function() {

  var $gun = $(this).parent();

  var $bullet = $gun.find('.bullet');

  var bulletPosition = $bullet.offset();

  var otherGunId = $gun.attr('id') === 'gun1' ? 'gun2' : 'gun1';

  var otherGunPosition = $('#' + otherGunId).offset();

  $bullet.show().animate({

    top: otherGunPosition.top - bulletPosition.top,

    left: otherGunPosition.left - bulletPosition.left

  }, 1000, function() {

    $(this).hide();

  });

});

$(document).ready(function() {

  $('.fire-btn').click(function() {

    var bullet = $(this).siblings('.bullet');

    var gun = $(this).parent();

    var gunWidth = gun.outerWidth();

    var bulletWidth = bullet.outerWidth();

    var bulletPos = gunWidth / 2 - bulletWidth / 2;

    

    bullet.css({left: bulletPos}).show().animate({top: -100}, 1000, function() {

      $(this).hide();

    });

  });

});
