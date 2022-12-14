<!--
Template Name: front
-->
<?php get_header(); ?>
<div class="content">
  <main>
    <div class="topbg"></div>
    <section class="concept wrapper" id="concept">
      <h2 class="concept__sectitle">CONCEPT</h2>
      <div class="concept__imgbox">
        <picture>
          <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/top_concept.jpg">
          <source media="(min-width: 600px) and (max-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/top_concept.jpg">
          <source media="(max-width: 599px)" srcset="<?php echo get_template_directory_uri(); ?>/src/img/top_concept_sp.jpg"><img src="<?php echo get_template_directory_uri(); ?>/src/img/top_concept.jpg" alt="">
        </picture>
      </div>
      <div class="concept__textbox">
        <p class="concept__textbox-text">バーガーは、本格ハンバーガーショップです。アメリカで修行した店長。<br class="sp">店内装飾も雰囲気たっぷりのアメリカンスタイルで、お食事を楽しんでいただけます。<br class="sp">是非、ご来店ください。スタッフ一同心よりお待ちしております。</p>
      </div>
    </section>
    <section class="menu">
      <h2 class="menu__sectitle">MENU</h2>
      <ul class="menu__list">
        <li class="menu__list-item"><a class="menu__list-link" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu_1.jpg"></a></li>
        <li class="menu__list-item"><a class="menu__list-link" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu_2.jpg"></a></li>
        <li class="menu__list-item"><a class="menu__list-link" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/src/img/menu_3.jpg"></a></li>
      </ul>
      <div class="box"><a class="btn" href="#">全てのメニューを見る</a></div>
    </section>
    <div class="bg"></div>
    <section class="news">
      <h2 class="news__sectitle">NEWS</h2>
      <div class="news__box">
        <ul class="news__list wrapper">
          <li class="news__list-item"><a class="news__list-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/top_news_1.jpg" alt=""><span class="news__list-date">2022.09.02</span><span class="news__list-text">テキストテキスト</span></a></li>
          <li class="news__list-item"><a class="news__list-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/top_news_2.jpg" alt=""><span class="news__list-date">2022.09.10</span><span class="news__list-text">テキストテキスト</span></a></li>
          <li class="news__list-item"><a class="news__list-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/src/img/top_news_3.jpg" alt=""><span class="news__list-date">2022.09.23</span><span class="news__list-text">テキストテキスト</span></a></li>
        </ul>
      </div>
      <div class="box"><a class="btn" href="">全てのニュースを見る</a></div>
    </section>
    <section class="access" id="access">
      <div class="access__content wrapper">
        <div class="access__textbox">
          <h2 class="access__sectitle">ACCESS</h2>
          <ul class="access__list">
            <li class="access__list-item">〒000-0000 東京都○○○○○</li>
            <li class="access__list-item">EAT IN / 11:00〜20:00(L.O. 19:00)</li>
            <li class="access__list-item">TAKE OUT / 11:00〜21:00</li>
            <li class="access__list-item">Uber Eats / 11:00〜21:00</li>
            <li class="access__list-item">TEL 00-0000-0000</li>
          </ul>
        </div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12967.0806533878!2d139.7016358!3d35.6580339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x337328def1e2ab26!2z5riL6LC36aeF!5e0!3m2!1sja!2sjp!4v1660116901029!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>