jQuery(function ($) {
  $(function () {
  /*=======================================================
    ハンバーガーメニュークリック設定
  =======================================================*/
  var btnNav = '#btn-nav';
  $(btnNav).on('click', function(){
    $(this).toggleClass('is-open');
    $('#gnav').toggleClass('is-open');
    bodyNoScroll();
  });

  var blnState = false,
      scrollPosition;
  function bodyNoScroll(){
    if (blnState == false){
      scrollPosition = $(window).scrollTop();
      $('body').addClass('is-noScroll').css({'top': - scrollPosition});
      blnState = true;
    }else{
      $('body').removeClass('is-noScroll').css({'top': 0});
      window.scrollTo(0, scrollPosition);
      blnState = false;
    }
  }


  /*=======================================================
    ページ内リンクの設定（固定ヘッダーでアンカーリンクがずれる対策）
  =======================================================*/
  var headerHeight = $('#header-nav').outerHeight(true),
      speed = 800,
      spWidth = window.matchMedia("(max-width: 1100px)").matches;

  $('a[href*="#"]').on('click', function(){
    setAnchorLink($(this).attr('href'));
    return false;
  });

  function setAnchorLink(url){
    if (url.indexOf("#") != -1){
      let anchor = url.split("#"),
          target = $('#' + anchor[anchor.length - 1]),
          position = Math.floor(target.offset().top) - headerHeight;
      $('html, body').animate({ scrollTop: position }, speed);
    }
  }

  $('#gnav a[href*="#"]').on('click', function(){
    if(spWidth){
      $(btnNav).trigger('click');
    }
  });


  /*=======================================================
    アニメーション設定
  =======================================================*/
  $('.js-fadeinup-trigger').on('inview', function(event, isInView){
    if (isInView){
      $(this).addClass('animate__animated animate__fadeInUp');
    }
  });

  $('.js-fadein-trigger').on('inview', function (event, isInView) {
    if (isInView) {
      $(this).addClass('animate__animated animate__fadeIn');
    }
  });

});
});
