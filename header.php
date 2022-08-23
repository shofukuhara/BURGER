<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="バーガーは、本格ハンバーガーショップです。アメリカで修行した店長。店内装飾も雰囲気たっぷりのアメリカンスタイルで、お食事を楽しんでいただけます。是非、ご来店ください。スタッフ一同心よりお待ちしております。">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt=""></div>
    <div class="header__hamburger"><span class="header__hamburger-line"></span><span class="header__hamburger-line"></span><span class="header__hamburger-line"></span></div>
    <div class="header__inner">
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__list-item"><a class="header__list-link" href="#">TOP</a></li>
          <li class="header__list-item"><a class="header__list-link" href="#concept">CONCEPT</a></li>
          <li class="header__list-item"><a class="header__list-link" href="#">MENU</a></li>
          <li class="header__list-item"><a class="header__list-link" href="#">NEWS</a></li>
          <li class="header__list-item"><a class="header__list-link" href="#access">ACCESS</a></li>
        </ul>
        <ul class="header__sns">
          <li class="header__sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/insta.png" alt=""></a></li>
          <li class="header__sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/twitter.png" alt=""></a></li>
          <li class="header__sns-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/facebook.png" alt=""></a></li>
        </ul>
      </nav>
    </div>
  </header>