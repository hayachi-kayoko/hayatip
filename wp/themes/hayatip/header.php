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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<meta name="description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。">
<meta name=”keywords” content=”はやちっぷ,ネイルチップショップ,ネイルチップ販売,ハンドメイド,オリジナルネイル,ネイルチップス,”>
<link rel="icon" href="image/favicon.ico">
<!--OGP-->
<meta property="og:locale" content="ja_JP">
<meta property="og:locale" content="website">
<meta property="og:title" content="はやちっぷ - nail tip shop">
<meta property="og:description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。">
<meta property="og:url" content="https://hayatip.cutegirl.jp/">
<meta property="og:image" content="1200-630.png">
<meta property="og:image:secure_url" content="1200-630.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="”はやちっぷ - nail tip shop">
<meta property="og:image:type" content="<?php echo get_template_directory_uri(); ?>/image/png">
<!--x-->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />
<meta property="og:url" content="https://hayatip.cutegirl.jp/" />
<meta property="og:title" content="はやちっぷ - nail tip shop" />
<meta property="og:description" content="シンプルなデザインを基本に、個性的な要素も取り入れた作品を制作しています。手頃な価格でご提供しています。" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/png" />
</head>
<body class="body">
<div class="bg bg--1"><img src="<?php echo get_template_directory_uri(); ?>/image/bg-item1.png" alt=""></div>
    <div class="bg bg--2"><img src="<?php echo get_template_directory_uri(); ?>/image/bg-item2.png" alt=""></div>
    <div class="bg bg--3"><img src="<?php echo get_template_directory_uri(); ?>/image/bg-item3.png" alt=""></div>

    <header class="header">
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
                        <li><a href="#">ショートネイル</a></li>
                        <li><a href="#">ロングネイル</a></li>
                        <li><a href="#">フットネイル</a></li>
                        <li><a href="#">ネイルピアス</a></li>
                        <li><a href="#">計測用ネイルチップ</a></li>
                    </ul>
                </li>
                <li><a href="#">はやちっぷ<i>とは</i></a></li>
                <li><a href="#">作者<i>について</i></a></li>
            </ul>
        </nav>

        <form action="./" class="side-search">
            <div class="side-search_box">
                <input class="side-search_box_text" type="text" placeholder="検索できます">
                <button class="side-search_box_button" type="submit">
                    <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <path d="M332.998,291.918c52.2-71.895,45.941-173.338-18.834-238.123c-71.736-71.728-188.468-71.728-260.195,0
                                c-71.746,71.745-71.746,188.458,0,260.204c64.775,64.775,166.218,71.034,238.104,18.844l14.222,14.203l40.916-40.916
                                L332.998,291.918z M278.488,278.333c-52.144,52.134-136.699,52.144-188.852,0c-52.152-52.153-52.152-136.717,0-188.861
                                c52.154-52.144,136.708-52.144,188.852,0C330.64,141.616,330.64,226.18,278.488,278.333z"></path>
                            <path d="M109.303,119.216c-27.078,34.788-29.324,82.646-6.756,119.614c2.142,3.489,6.709,4.603,10.208,2.46
                                c3.49-2.142,4.594-6.709,2.462-10.198v0.008c-19.387-31.7-17.45-72.962,5.782-102.771c2.526-3.228,1.946-7.898-1.292-10.405
                                C116.48,115.399,111.811,115.979,109.303,119.216z"></path>
                            <path d="M501.499,438.591L363.341,315.178l-47.98,47.98l123.403,138.168c12.548,16.234,35.144,13.848,55.447-6.456
                                C514.505,474.576,517.743,451.138,501.499,438.591z"></path>
                        </svg>
                </button>
            </div>
        </form>
    </header>