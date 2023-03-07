
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

