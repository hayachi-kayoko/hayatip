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
//ヒアドキュメントでループ内の内容を変数に格納
$html .= '<article class="main-archive_inner_item">';
$html .= '<a href="'.esc_url(get_permalink()).'">';
$html .= '<span class="main-archive_inner_item_category main-archive_inner_item_category--<?php echo $cat->slug; ?>"><span><?php echo $cat->name; ?></span></span>';
$html .= '</a>';
$html .= '<article class="main-archive_inner_item">';
$html .= '</article>';
?>
 
  <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
 
<?php
  // $loopcounter数を判断して再度READ MOREボタン設置
  if($loopcounter == $get_post_num) {
    $html .= '<div class="more-btn" id="js-more"><span class="btn">もっと<i>見る</i></span></div>';
  }
  echo $html;
  ?>