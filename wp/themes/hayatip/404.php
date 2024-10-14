<?php get_header(); ?>
  <main class="main-archive main">
    <h2 class="main-archive_title">404 not found</h2>
    <h3 class="notfound">404 not found</h3>
    <p class="notfound-text">ページが見つかりませんでした、代わりに新着記事をご覧ください</p>
    <div class="main-archive_inner" id="js-new-list">
    <?php
    global $post;
    $args = array( 'posts_per_page' => 3 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) :
      setup_postdata($post);
    ?>
    <?php
      // カテゴリーのデータを取得
      $cat = get_the_category();
      $cat = $cat[0];
      $count_posts = wp_count_posts();
      $posts = $count_posts->publish;
    ?>
          <article data-post="3" class="main-archive_inner_item js-static js-items main-archive_inner_item--<?php echo $cat->slug; ?>">
              <a href="<?php echo esc_url(get_permalink()); ?>">
                  <span class="main-archive_inner_item_category main-archive_inner_item_category--<?php echo $cat->slug; ?>"><span><?php echo $cat->name; ?></span></span>
                  <figure class="main-archive_inner_item_img js-archive-img">
                    <?php the_post_thumbnail(array(214, 214)); ?>
                  </figure>
                  <h3 class="main-archive_inner_item_title"><?php echo the_title(); ?></h3>
                  <p class="main-archive_inner_item_price"><span>¥</span><?php the_field('price'); ?></p>
                  <p class="main-archive_inner_item_price"><i>メルカリ→</i><span>¥</span><?php the_field('mercari'); ?></p>
              </a>
          </article>
          <?php endforeach; wp_reset_postdata(); ?>
          <div class="more-btn" id="js-more"><span class="btn">もっと<i>見る</i></span></div>
      </div>
    </main>
    <?php get_footer(); ?>