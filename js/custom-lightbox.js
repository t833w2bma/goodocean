jQuery(function ($) {
  $(function () {
    $('a[href$=".jpg"] ,a[href$=".jpeg"] ,a[href$=".png"]').attr({
      'data-lightbox': 'gallery',
    });

    lightbox.option({
      'alwaysShowNavOnTouchDevices': true,
      'fadeDuration': 100,
      'imageFadeDuration': 100,
      'wrapAround': true,
    });
  });
});
