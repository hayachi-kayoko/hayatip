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

  (function () {

    var unit = 100,
        canvas, context, canvas2, context2,
        height, width, xAxis, yAxis,
        draw;
    
    /**
     * Init function.
     * 
     * Initialize variables and begin the animation.
     */
    function init() {
        
        canvas = document.getElementById("sineCanvas");
        
        canvas.width = document.documentElement.clientWidth; //Canvasのwidthをウィンドウの幅に合わせる
        canvas.height = 100;
        
        context = canvas.getContext("2d");
        
        height = canvas.height;
        width = canvas.width;
        
        xAxis = Math.floor(height/2);
        yAxis = 0;
        
        draw();
    }
    
    /**
     * Draw animation function.
     * 
     * This function draws one frame of the animation, waits 20ms, and then calls
     * itself again.
     */
    function draw() {
        
        // キャンバスの描画をクリア
        context.clearRect(0, 0, width, height);
    
        //波を描画
        drawWave('#FFC1C1', 0.3, 3, 0);
        drawWave('#FFC1C1', 0.4, 2, 250);
        drawWave('#FFC1C1', 0.2, 1.6, 100);
        
        // Update the time and draw again
        draw.seconds = draw.seconds + .014;
        draw.t = draw.seconds*Math.PI;
        setTimeout(draw, 35);
    };
    draw.seconds = 0;
    draw.t = 0;
    
    /**
    * 波を描画
    * drawWave(色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
    */
    function drawWave(color, alpha, zoom, delay) {
        context.fillStyle = color;
        context.globalAlpha = alpha;
    
        context.beginPath(); //パスの開始
        drawSine(draw.t / 0.5, zoom, delay);
        context.lineTo(width + 10, height); //パスをCanvasの右下へ
        context.lineTo(0, height); //パスをCanvasの左下へ
        context.closePath() //パスを閉じる
        context.fill(); //塗りつぶす
    }
    
    /**
     * Function to draw sine
     * 
     * The sine curve is drawn in 10px segments starting at the origin. 
     * drawSine(時間, 波の幅のzoom, 波の開始位置の遅れ)
     */
    function drawSine(t, zoom, delay) {
    
        // Set the initial x and y, starting at 0,0 and translating to the origin on
        // the canvas.
        var x = t; //時間を横の位置とする
        var y = Math.sin(x)/zoom;
        context.moveTo(yAxis, unit*y+xAxis); //スタート位置にパスを置く
        
        // Loop to draw segments (横幅の分、波を描画)
        for (i = yAxis; i <= width + 10; i += 10) {
            x = t+(-yAxis+i)/unit/zoom;
            y = Math.sin(x - delay)/3;
            context.lineTo(i, unit*y+xAxis);
        }
    }
    
    init();
        
    })();
});