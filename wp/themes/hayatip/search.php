<?php get_header(); ?>
  <main class="main-archive main">
    <h2 class="main-archive_title main-archive_title main-archive_title"><?php the_search_query() ?>の検索結果</h2>
    <div class="breadcrumbs">
      <ul class="breadcrumbs_group">
          <li class="breadcrumbs_group_item breadcrumbs_group_item--short">
              <a href="<?php echo home_url(); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x32_" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <path class="st0" d="M451.679,161.238h-0.015L296.946,16.2C285.488,5.434,270.647-0.023,255.992,0   c-14.654-0.023-29.496,5.434-40.969,16.2L60.321,161.238c-12.078,11.317-18.924,27.144-18.924,43.694v247.174   c-0.016,16.463,6.737,31.584,17.542,42.351c10.758,10.805,25.88,17.55,42.351,17.542h309.42   c16.456,0.008,31.576-6.737,42.351-17.542c10.789-10.758,17.558-25.888,17.542-42.351V204.932   C470.603,188.368,463.741,172.556,451.679,161.238z M422.912,452.107c-0.015,3.446-1.335,6.341-3.586,8.623   c-2.282,2.251-5.185,3.571-8.615,3.578H308.993v-105.97H203.007v105.97H101.29c-3.446-0.015-6.349-1.327-8.631-3.57   c-2.251-2.282-3.571-5.186-3.571-8.631V204.932c0-3.384,1.382-6.59,3.85-8.896L247.655,50.991c2.391-2.236,5.278-3.284,8.336-3.299   c3.059,0.016,5.947,1.064,8.337,3.291l154.718,145.038v0.008c2.468,2.313,3.865,5.534,3.865,8.903V452.107z"/>
                    </svg>
                    ホーム
                </a>
            </li>
            <li class="breadcrumbs_group_item"><span><?php the_search_query() ?>の検索結果</span></li>
      </ul>
    </div>
    <div class="main-archive_inner" id="js-new-list">
        <!--検索結果が存在するか？-->
        <?php if(have_posts()):
            while(have_posts()):the_post(); ?>
            <?php
            // カテゴリーのデータを取得
            $cat = get_the_category();
            $cat = $cat[0];
            ?>
            <article data-post="<?php echo $wp_query->found_posts ?>" class="main-archive_inner_item js-static js-items main-archive_inner_item--<?php echo $cat->slug; ?>">
              <a href="<?php echo esc_url(get_permalink()); ?>">
                  <span class="main-archive_inner_item_category main-archive_inner_item_category--<?php echo $cat->slug; ?>"><span><?php echo $cat->name; ?></span></span>
                  <figure class="main-archive_inner_item_img js-archive-img">
                  <?php the_post_thumbnail('full'); ?>
                  </figure>
                  <h3 class="main-archive_inner_item_title"><?php echo the_title(); ?></h3>
                  <?php $price = get_post_meta($post->ID, 'price', true);?>
                  <?php if(empty($price)):?>
                      <!-- ★ここは空欄だった場合に表示されます(空でOK)。 -->
                  <?php else:?>
                    <p class="main-archive_inner_item_price"><span>¥</span><?php the_field('price'); ?></p>
                  <?php endif;?>

                  <?php $mercari = get_post_meta($post->ID, 'mercari', true);?>
                  <?php if(empty($mercari)):?>
                      <!-- ★ここは空欄だった場合に表示されます(空でOK)。 -->
                  <?php else:?>
                    <p class="main-archive_inner_item_price"><i>メルカリ→</i><span>¥</span><?php the_field('mercari'); ?></p>
                  <?php endif;?>          
              </a>
            </article>
            <?php endwhile; ?>
            <?php else :?>

            <!-- 検索結果が存在しない場合の文言。-->
            <article data-post="<?php echo $wp_query->found_posts ?>" class="js-items search-item">
                <h3 class="search-no">検索キーワードに該当する記事がありませんでした</h3>
                <p class="search-text">代わりに新着記事をご覧ください</p>
            </article>
            <?php
                $args = array(
                    'posts_per_page' => 3 // 表示件数の指定
                );
                $posts = get_posts( $args );
                foreach ( $posts as $post ): // ループの開始
                setup_postdata( $post ); // 記事データの取得
                ?>
                <article data-post="<?php echo $posts?>" class="main-archive_inner_item js-static js-items main-archive_inner_item--<?php echo $cat->slug; ?>">
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
                <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>
            
            <?php endif; ?>
            <div class="more-btn is-search" id="searchsubmit-more" type="submit"><span class="btn">もっと<i>見る</i></span></div>
      </div>
    </main>
<?php get_footer(); ?>