<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>はやちっぷ - nail tip shop -</title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/slick.css">
<link rel="canonical" href="https://hayatip.cutegirl.jp/" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<meta name="description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。">
<meta name=”keywords” content=”はやちっぷ,ネイルチップショップ,ネイルチップ販売,ハンドメイド,オリジナルネイル,ネイルチップス,”>
<link rel="icon" href="image/favicon.ico">
<!--OGP-->
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="はやちっぷ - nail tip shop">
<meta property="og:description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。">
<meta property="og:url" content="https://hayatip.cutegirl.jp/">
<meta property="og:image" content="https://hayatip.cutegirl.jp/wp-content/themes/hayatip/image/ogp.jpg">
<meta property="og:image:secure_url" content="https://hayatip.cutegirl.jp/wp-content/themes/hayatip/image/ogp.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="”はやちっぷ - nail tip shop">
<meta property="og:image:type" content="<?php echo get_template_directory_uri(); ?>/image/ogp.jpg">
<!--x-->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="https://hayatip.cutegirl.jp/" />
<meta name="twitter:title" content="はやちっぷ - nail tip shop" />
<meta name="twitter:description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。" />
</head>
<body class="body">
    <?php
       if(is_front_page()){
        echo '<div class="bg bg--1"><img src="' . get_template_directory_uri() . '/image/bg-item1.png" alt=""></div>
        <div class="bg bg--2"><img src="' . get_template_directory_uri() . '/image/bg-item2.png" alt=""></div>
       <div class="bg bg--3"><img src="' . get_template_directory_uri() . '/image/bg-item3.png" alt=""></div>';
       }
    ?>

    <header class="header <?php if(!is_front_page()){echo 'header--detail';}?>">
        <h1 class="logo logo--pc logo--sp"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="はやちっぷ"></a></h1>
        <div id="js-menu-btn" class="menu-btn">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <nav id="js-menu" class="menu menu--pc menu--sp">
            <ul>
                <li><a href="<?php echo home_url(); ?>/all">商品一覧</a></li>
                <li>
                    <span class="menu_btn" id="js-category-btn">カテゴリー<i class="menu_btn_arrow"><img src="<?php echo get_template_directory_uri(); ?>/image/arrow1.svg" alt=""></i></span>
                    <ul class="menu_category" id="js-category-inner">
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('ショートネイル')) );?>">ショートネイル</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('ロングネイル')) );?>">ロングネイル</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('フットネイル')) );?>">フットネイル</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('ネイルピアス')) );?>">ネイルピアス</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('計測用ネイルチップ')) );?>">計測用ネイルチップ</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('現品のみ')) );?>">現品のみ</a></li>
                        <li><a href="<?php echo esc_url( get_category_link(get_cat_ID('オプション')) );?>">オプション</a></li>
                    </ul>
                </li>
                <?php 
                    if(is_front_page()){
                        echo '<li><a href="#about">はやちっぷ<i>とは</i></a></li>
                              <li><a href="#user">作者<i>について</i></a></li>
                              <li><a href="#reason"><i>選ばれる3つの理由</i></a></li>
                              <li><a href="#shop">購入<i>にあたって</i></a></li>';
                    } else {
                        echo '<li><a href="' . home_url() . '/#about">はやちっぷ<i>とは</i></a></li>
                              <li><a href="' . home_url() . '/#user">作者<i>について</i></a></li>
                              <li><a href="' . home_url() . '/#reason"><i>選ばれる3つの理由</i></a></li>
                              <li><a href="' . home_url() . '/#shop">購入<i>にあたって</i></a></li>';
                    }
                ?>
            </ul>
        </nav>
        <?php get_search_form(); ?>

    </header>