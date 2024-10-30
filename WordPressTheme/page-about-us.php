<?php get_header(); ?>
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
      <?php
        // SCFで設定したギャラリーの画像を取得
        $imgGroup = SCF::get('gallery');
        foreach ($imgGroup as $imgItem) {
            $img_data = wp_get_attachment_image_src($imgItem['gallery__image'], 'large');
            $url = $img_data[0];
            $alt = get_post_meta($imgItem['gallery__image'], '_wp_attachment_image_alt', true) ?: get_post($imgItem['gallery__image'])->post_title;
            $is_vertical = $imgItem['gallery__image_vertical']; // 縦長画像の判定
            $orientation_class = $is_vertical ? 'vertical' : ''; // 縦長ならクラスを追加
            echo '<li class="gallery__item js-modal-open">';
            echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '" class="' . $orientation_class . '">';
            echo '</li>';
        }
      ?>
    </ul>
  </div>
</section>

<!-- モーダルウィンドウ-->
<div class="gallery__item-modal modal js-modal">
  <div class="modal__content">
    <img src="" alt="" loading="lazy">
  </div>
</div>
  <!-- contact -->
  <?php get_template_part('include/contact') ?>
  </main>
<?php get_footer(); ?>