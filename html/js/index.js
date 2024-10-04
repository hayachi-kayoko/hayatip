$(function(){
  var $window = $(window);

    $('#js-slider').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        speed: 10000,
        slidesToShow: 5,
        slidesToScroll: 1,
        pauseOnHover: false
      });

  $('.slick-slide').height($('.slick-slide').find('img').height());
  $('.main-index_slider').height($('.slick-slide').find('img').height());
  $window.on('resize',function(){
    $('.slick-slide').height($('.slick-slide').find('img').height());
    $('.main-index_slider').height($('.slick-slide').find('img').height());
  })
    
});