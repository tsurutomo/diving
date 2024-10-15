<?php get_header(); ?>
<?php wp_head(); ?>
  <main>
  <!--fv-->
  <div class="fv-lower">
    <div class="fv-lower__inner">
      <div class="fv-lower__tittle-wrap">
        <h1 class="fv-lower__title">About&nbsp;us</h1>
      </div>
      <div class="fv-lower__img-wrap">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-fv.webp" media="(min-width: 768px)"/>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-fvsp.webp" width="750" height="920" alt="シーサー">
        </picture>
      </div>
    </div>
  </div>
  <!-- パンくずリスト-->
  <?php get_template_part('include/breadcrumb') ?>

  <!-- about us -->
  <section class="about-lower bg-fish top-lower">
    <div class="about-lower__inner inner">
      <div class="about-lower__container">
        <div class="about-lower__img-box">
          <div class="about-lower__right-wrap">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about02.jpg" alt="魚が２匹泳ぐ様子">
          </div>
          <div class="about-lower__left-wrap u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about01.jpg" alt="屋根の上に置かれたシーサー">
          </div>
        </div>
          <div class="about-lower__content">
            <h3 class="about-lower__copy">Dive&nbsp;into<br>the&nbsp;Ocean</h3>
          </div>
          <div class="about-lower__text-box">
            <p class="about-lower__text"><?php echo post_custom('about__text');?></p>
          </div>
      </div>
    </div>
  </section>
  <!-- gallery -->
  <section class="gallery top-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title title">
        <p class="title__main-title"> Gallery</p>
        <h2 class="title__sub-title">フォト</h2>
      </div>
      <ul class="gallery__list">
      
      </ul>
      <!-- モーダルウィンドウ -->
      <?php
if (have_rows('gallery')): 
    while (have_rows('gallery')): the_row();
        $image = get_sub_field('gallery__image');
        if ($image): ?>
            <div class="gallery__item-modal modal js-modal">
                <div class="modal__content">
                    <img src="<?php echo esc_url($image['url']); ?>" 
                         width="<?php echo esc_attr($image['width']); ?>" 
                         height="<?php echo esc_attr($image['height']); ?>" 
                         loading="lazy" 
                         alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            </div>
        <?php endif;
    endwhile;
endif;
?>

    </div>
  </section>
  <!-- contact -->
  <?php get_template_part('include/contact') ?>
  </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>