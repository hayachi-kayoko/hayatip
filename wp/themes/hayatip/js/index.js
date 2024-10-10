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

  var now_post_num = 9; // 現在表示されている数を指定
  var get_post_num = 6; // 取得したい数を指定
  $(function() {
    $(document).on('click', '#js-more', function() {
      var ajax_url = 'https://hayatip.cutegirl.jp/wp-content/themes/hayatip/page-readmore.php';
      $.ajax({
        type: 'post',
        url: ajax_url,
        data: {
          'now_post_num': now_post_num,
          'get_post_num': get_post_num,
        },
        dataType: 'html',
      })
      .done(function(data){
        now_post_num = now_post_num + get_post_num;
        $("#js-more").remove();
        $("#js-new-list").append(data);
      })
      .fail(function(){ // ajax通信成失敗の処理
        alert('エラーが発生しました');
      })
      return false;
    });
  });

  $(document).on("ajaxSend", function(e,jqXHR,obj){
    var $loading = $("#js-loading");
    $loading.hide();
    setTimeout(function(){
      $.when(jqXHR).done(function(data){
        $loading.show();
      });
      $.when(jqXHR).fail(function(){
        $loading.hide();
      });
    },400);
  });
});