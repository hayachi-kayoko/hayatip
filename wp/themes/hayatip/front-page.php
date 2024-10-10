<?php get_header(); ?>
    <main class="main-index main">
        <div class="main-index_catch">
            <a href="<?php echo home_url(); ?>/all">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/image/catch.svg" alt="独自のデザイン、世界に1つだけのネイル。"></h2>
                <div class="main-index_btn">ネイル商品一覧を見る</div>
            </a>
        </div>
        <div class="main-index_slider">
            <div class="main-index_slider_items" id="js-slider">
            <?php
                $args = array(
                        'posts_per_page' => 12,
                        'order'          => 'ASC',
                        'orderby'        => 'title'
                        );
                $postslist = get_posts( $args );
                foreach ( $postslist as $post ) :
                setup_postdata( $post ); ?> 
                    <div><?php the_post_thumbnail(); ?></div>
                <?php
                endforeach; 
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <!--はやちっぷとは-->
        <section class="main-index_content main-index_content--right main-index_content--btn">
            <h3 class="main-index_content_title main-index_content_title--right">はやちっぷ<span>とは</span></h3>
            <p class="main-index_content_text">シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。</p>
            <div class="main-index_content_inner">
                <h4 class="main-index_content_inner_title">サイズフルオーダー、チップの形変更承ります。</h4>
                <div class="main-index_content_inner_group">
                    <div class="main-index_content_inner_group_figure">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/tip.jpg" alt="計測ネイルチップ">
                        <a href="#" class="btn btn--keisoku">計測ネイルチップ</a>
                    </div>
                    <p>ネイルチップのサイズ指定や、5種類の形からお好きなデザインをお選びいただけます。これらのサービスはすべて無料でご利用いただけます。サイズ計測には、専用の計測用ネイルチップをご購入いただけますので、そちらをご活用ください。</p>
                </div>
                <a href="#" class="btn btn--index">商品一覧<span><img src="<?php echo get_template_directory_uri(); ?>/image/arrow1.svg" alt=""></span></a>
            </div>
            <div class="main-index_content_item"><img src="<?php echo get_template_directory_uri(); ?>/image/item1.png" alt=""></div>
        </section>

        <!--作者について-->
        <section class="main-index_content main-index_content--left">
            <h3 class="main-index_content_title main-index_content_title--left main-index_content_title--sakusya"><strong>作</strong><span>者</span><i>について</i></h3>
            <div class="main-index_content_inner main-index_content_inner--sakusya">
                <div class="main-index_content_inner_left">
                    <p>平日は働きながらもネイルチップを制作しております。ネイルはシンプル系が好きですががんばって他のジャンルにも挑戦していく予定でおります。</p>
                    <h4>【資格保持】</h4>
                    <ul>
                        <li>ネイリスト技能検定 3級</li>
                        <li>ジェルネイル技能検定 初級</li>
                    </ul>
                </div>
                <figure class="main-index_content_inner_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/sakusya.png" alt="作者について">
                </figure>
            </div>
        </section>

        <!--reason-->
        <div class="reason">
            <div class="reason-tiele">
                <span class="reason-tiele_sub">reason</span>
                <h3 class="reason-tiele_sub-title">
                    <strong>はやちっぷ</strong>
                    <span>が選ばれる</span>
                    <i>3</i>
                    <span>つの理由</span>
                </h3>
            </div>

            <section class="reason-section reason-section--first">
                <div class="reason-section_item"><img src="<?php echo get_template_directory_uri(); ?>/image/item2.png" alt=""></div>
                <figure class="reason-section_figure"><img src="<?php echo get_template_directory_uri(); ?>/image/reason1.png" alt="豊富なデザインとカスタマイズ性"></figure>
                <div class="reason-section_inner">
                    <div class="reason-section_inner_title">
                        <h4 class="reason-section_inner_title_item">豊富なデザインとカスタマイズ性</h4>
                    </div>
                    <p class="reason-section_inner_text">「はやちっぷ」では、トレンドを取り入れた多様なデザインを取り揃えています。お好きなスタイルに合わせて、シンプルなものから華やかなものまで、あなたの個性を引き立てるネイルチップが見つかります。さらに、カスタマイズオプションも充実しており、オリジナルデザインのリクエストにもお応えします。</p>
                </div>
            </section>

            <section class="reason-section">
                <figure class="reason-section_figure"><img src="<?php echo get_template_directory_uri(); ?>/image/reason2.png" alt=""></figure>
                <div class="reason-section_inner">
                    <div class="reason-section_inner_title">
                        <h4 class="reason-section_inner_title_item">豊富な実績と高品質なネイル</h4>
                    </div>
                    <p class="reason-section_inner_text">当店のネイルチップは、肌に優しい高品質な素材を使用しており、長時間の着用でも快適です。持ちが良く、剥がれにくい工夫がされているため、安心して日常生活を楽しむことができます。また、簡単に装着できるので、忙しいあなたにもぴったりです。</p>
                </div>
            </section>

            <section class="reason-section reason-section--last">
                <figure class="reason-section_figure"><img src="<?php echo get_template_directory_uri(); ?>/image/reason3.png" alt=""></figure>
                <div class="reason-section_inner">
                    <div class="reason-section_inner_title">
                        <h4 class="reason-section_inner_title_item">手軽さとコストパフォーマンス</h4>
                    </div>
                    <p class="reason-section_inner_text">ネイルサロンに行く手間や費用をかけることなく、自宅で手軽におしゃれを楽しむことができるのが「はやちっぷ」の魅力です。リーズナブルな価格で高品質なネイルチップを提供しており、コストパフォーマンスにも優れています。</p>
                </div>
            </section>
        </div>

        <!--購入にあたって-->
        <section class="main-index_content main-index_content--right">
            <h3 class="main-index_content_title main-index_content_title--right">購<strong>入</strong><span>にあたって</span></h3>
            <p class="main-index_content_text main-index_content_text--kounyu">シンプルなデザインを基本に、時々個性的な要素を取り入れた作品を制作しています。</p>
            <p class="main-index_content_text main-index_content_text--kounyu">発送はご入金後、約5日以内を予定しています。ご注文確定後のキャンセルはできませんので、あらかじめご了承ください。また、返金はお受けできませんので、トラブルがあった方の今後のご購入はお控えいただきますようお願いいたします。</p>
            <p class="main-index_content_text main-index_content_text--kounyu">ダストや気泡が入る可能性があります。丁寧に制作いたしますが、その点もご了承ください。お客様のお手元に届いた際に喜んでいただけるよう、精一杯努力いたします。</p>
        </section>
    </main>
    <footer class="footer">&copy;2024.hayatip</footer>
</body>
</html>