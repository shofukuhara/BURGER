<!--
Template Name: dri-des
-->
<?php get_header(); ?>
<div class="content">
  <main>
    <div class="topbg"></div>
    <section class="drink">
      <h2 class="drink__sectitle">DRINK</h2>
      <div class="drink__box">
        <ul class="drink__list wrapper">
          <li class="drink__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/drink_01.jpg" alt=""><span class="drink__list-text">ドリンク01</span></li>
          <li class="drink__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/drink_02.jpg" alt=""><span class="drink__list-text">ドリンク02</span></li>
          <li class="drink__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/drink_03.jpg" alt=""><span class="drink__list-text">ドリンク03</span></li>
        </ul>
      </div>
    </section>
    <section class="dessert">
      <h2 class="dessert__sectitle">DESSERT</h2>
      <div class="dessert__box">
        <ul class="dessert__list wrapper">
          <li class="dessert__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/dessert_01.jpg" alt=""><span class="dessert__list-text">デザート01</span></li>
          <li class="dessert__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/dessert_02.jpg" alt=""><span class="dessert__list-text">デザート02</span></li>
          <li class="dessert__list-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/dessert_03.jpg" alt=""><span class="dessert__list-text">デザート03</span></li>
        </ul>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>