<?php ini_set('display_errors',1); ?>

<?php
  require_once( dirname( __FILE__ ,4 ) . '/wp-config.php' );
  $now_post_num = $_POST['now_post_num'];
  $get_post_num = $_POST['get_post_num'];
  $loopcounter = 0;
  $html = '';
?>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $get_post_num,
    'offset' => $now_post_num,
  );
  $posts = new WP_Query($args); ?>
  <?php if ($posts -> have_posts()) : ?>
    <?php while($posts -> have_posts()) : $posts -> the_post(); ?>
 
<?php
    $cat = get_the_category();
    $cat = $cat[0];
?>
<?php
//各種設定
    $imgid = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($imgid, 'large');
    $title = the_title( '', '', false );
    $price = get_field('price');
    $mercari = get_field('mercari');;
    $url = esc_url(get_permalink());
?>
<?php
//ヒアドキュメントでループ内の内容を変数に格納
echo '<article class="main-archive_inner_item">';
echo '<a href="' . $url . '">';
echo '<span class="main-archive_inner_item_category main-archive_inner_item_category--' . $cat->slug . '"><span>' . $cat->name . '</span></span>';
echo '<figure class="main-archive_inner_item_img js-archive-img"><img src="' . $img[0] . '" alt="' . $title . '"></figure>';
echo '<h3 class="main-archive_inner_item_title">' . $title . '</h3>';
echo '<p class="main-archive_inner_item_price"><span>¥</span>' . $price . '</p>';
echo '<p class="main-archive_inner_item_price"><i>メルカリ→</i><span>¥</span>' . $mercari . '</p>';
echo '</a>';
echo '</article>';
?>
 
  <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
 
<?php
  // $loopcounter数を判断して再度READ MOREボタン設置
  if($loopcounter = $get_post_num) {
    echo '<div class="more-btn"><span class="btn" id="js-more">もっと<i>見る</i></span></div>';
  } else {
    echo '';
  }
?>