$(function(){

  /*スライダー*/
  var $window = $(window);

    $('#js-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        speed: 10000,
        slidesToShow: 5,
        slidesToScroll: 1,
        pauseOnHover: false,
        variableWidth: true
      });

  /*アコーディオン*/
  var $jsCategoryBtn = $('#js-category-btn');
  var $jsCategoryInner = $('#js-category-inner');

  $jsCategoryBtn.on('click',function(){
    if($jsCategoryBtn.hasClass('is-open')){
      $jsCategoryBtn.removeClass('is-open');
      $jsCategoryInner.slideUp();
    } else {
      $jsCategoryBtn.addClass('is-open');
      $jsCategoryInner.slideDown();
    }
  });
  
  /*メニュー*/
  var $jsMenuBtn = $('#js-menu-btn');
  var $jsMenu = $('#js-menu');
 
  $jsMenuBtn.on('click',function(){
    console.log('menu');
    if($(this).hasClass('is-open')){
      $(this).removeClass('is-open');
      $jsMenu.removeClass('is-open');
    } else {
      $(this).addClass('is-open');
      $jsMenu.addClass('is-open');
    }
  });

  /*詳細サムネイル*/
  if($('.js-archive-img')){
    $('.js-archive-img').find('img').height($('.js-archive-img').find('img').width());
    $window.on('resize',function(){
      $('.js-archive-img').find('img').height($('.js-archive-img').find('img').width());
    }); 
  }
  
});