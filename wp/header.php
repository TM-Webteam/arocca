<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php esc_html(bloginfo('charset')); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="">
  <!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
  <meta name="author" content="">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="format-detection" content="telephone=no">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NBPN3MR');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Schema.org markup for Google+
<meta itemprop="name" content="<?php esc_html(bloginfo('name')) ?>">
<meta itemprop="image" content="<?php esc_html(bloginfo('description')) ?>">

Twitter Card data
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="A・ROCCA">
<meta name="twitter:image:src" content="">

Open Graph data
<meta property="og:title" content="<?php esc_html(bloginfo('name')) ?>">
<meta property="og:description" content="<?php esc_html(bloginfo('description')) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta property="og:image:width" content="">
<meta property="og:image:height" content="">
<meta property="og:site_name" content="<?php esc_html(bloginfo('name')) ?>"> -->

  <!-- Web font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/ncf8fus.css">
  <link rel="stylesheet" href="https://use.typekit.net/tfm6ntp.css">

  <!-- Style sheet -->
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/kairos.css">
  <?php wp_head(); ?>

</head>

<body class="<?php if ($body_class) {
                echo $body_class;
              } ?>">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBPN3MR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <style>
    @media (min-width: 769px) {
      footer .nav__box {
        width: calc(25% - 20px);
      }
    }
  </style>


  <header>
    <div class="in">
      <aside class="flex aiC inherit">
        <div class="in__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo assets_path() ?>img/common/h-logo.svg" alt="A・ROCCA"></a></div>
        <nav class="in__nav pc-only">
          <ul class="flex jcE aiC">
            <li><a href="tel:0528554794" class="tel">052-855-4794</a>　（平日：09 :00~18:00）</li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more bgG tiny">サービス資料</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgG tiny">お問合せ・ご相談</a></li>
          </ul>
        </nav>
        <div id="nav-toggle" class="sp-only">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </aside>
    </div>
    <nav class="nav-list pc-only">
      <ul class="flex nav-list-box">
        <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/" class="link">採用を兼務されているご担当者様へ</a></li> -->
        <li><a href="<?php echo esc_url(home_url('/')); ?>it_personnel/" class="link">アイティ人事</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/" class="link">採用を兼務されているご担当者様へ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>case/" class="link">実績・事例</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>strength/" class="link">選ばれる理由</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>manga/" class="link">マンガでわかるアイティ人事</a></li>
        <li class="parent">
          <a href="#" class="arrow disabled">お役立ち情報</a>
          <div class="mega flex pull">
            <div class="mega__parent">お役立ち情報</div>
            <div class="mega__box flex">
              <div class="mega__box--list">
                <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="ttl">お役立ち資料</a>
                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="ttl">お知らせ</a>
              </div>
              <div class="mega__box--list">
                <a href="<?php echo esc_url(home_url('/')); ?>column/" class="ttl">お役立ちコラム</a>
                <a href="<?php echo esc_url(home_url('/')); ?>column/direct_recruiting/" class="ttl">ダイレクトリクルーティングとは</a>
              </div>
            </div>
          </div>
        </li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>company/" class="link">企業情報</a></li>
      </ul>
    </nav>

    <div id="gloval-nav" class="sp-only">
      <ul class="list">
        <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/">採用を兼務されているご担当者様へ</a></li> -->
        <li><a href="<?php echo esc_url(home_url('/')); ?>it_personnel/">アイティ人事</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>manga/">マンガでわかるアイティ人事</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">選ばれる理由</a></li>
        <li><a href="#" class="disabled">お役立ち情報</a></li>
        <li class="child"><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/">お役立ち資料</a></li>
        <li class="child"><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
        <li class="child"><a href="<?php echo esc_url(home_url('/')); ?>news/">お知らせ</a></li>
        <li class="child"><a href="<?php echo esc_url(home_url('/')); ?>column/direct_recruiting/">ダイレクトリクルーティングとは</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報</a></li>
      </ul>
      <ul class="aside">
        <li><a href="tel:0528554794" class="tel">052-855-4794</a><br>（平日：09 :00~18:00）</li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more bgG small">資料請求</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more bgG small">お問合せ・ご相談</a></li>
      </ul>
    </div>
  </header>