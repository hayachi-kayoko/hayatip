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
      $jsMenu.find('> ul').fadeOut(0);
    } else {
      $(this).addClass('is-open');
      $jsMenu.addClass('is-open');
      $jsMenu.find('> ul').fadeIn(500);
    }
  });

  /*詳細サムネイル*/
  if($('.js-archive-img')){
    $('.js-archive-img').find('img').height($('.js-archive-img').find('img').width());
    $window.on('resize',function(){
      $('.js-archive-img').find('img').height($('.js-archive-img').find('img').width());
    }); 
  }

  /*ボタンの非表示*/
  if($('.main-archive_inner_item').length >= 9){
    console.log('9');
    if(location.href === 'https://hayatip.cutegirl.jp/category/measurement/'){
      $('#js-more').hide();
    } else {
      $('#js-more').show();
    }
  } else {
    $('#js-more').hide();
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
        $(".more-btn").remove();
        $("#js-new-list").append(data);
      })
      .fail(function(){ // ajax通信成失敗の処理
        alert('エラーが発生しました');
      })
      return false;
    });
  });
  
  $(function() {
    // スクロールのオフセット値
    var offsetY = -10;
    // スクロールにかかる時間
    var time = 500;
  
    // ページ内リンクのみを取得
    $('a[href^=#]').click(function() {
      // 移動先となる要素を取得
      var target = $(this.hash);
      if (!target.length) return ;
      // 移動先となる値
      var targetY = target.offset().top+offsetY;
      // スクロールアニメーション
      $('html,body').animate({scrollTop: targetY}, time, 'swing');
      // ハッシュ書き換えとく
      window.history.pushState(null, null, this.hash);
      // デフォルトの処理はキャンセル
      return false;
    });
  });
});