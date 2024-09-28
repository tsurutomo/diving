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
            <p class="about-lower__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
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
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery1.webp" width="984" height="1492" loading="lazy" alt="海の中で泳ぐたくさんの赤い魚">
        </li>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery2.webp" width="1160" height="738" loading="lazy" alt="海に浮かぶ船">
        </li>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery3.webp" width="1160" height="738" loading="lazy" alt="縞模様の２匹の魚">
        </li>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery4.webp" width="1160" height="738" loading="lazy" alt="黄色い魚">
        </li>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery5.webp" width="1160" height="738" loading="lazy" alt="海の中で泳ぐたくさんの魚">
        </li>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery6.webp" width="984" height="1492" loading="lazy" alt="オレンジの魚と珊瑚礁">
        </li>
      </ul>
      <!-- モーダルウィンドウ -->
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content modal__content--vertical">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery1.webp" width="984" height="1492" alt="海の中で泳ぐたくさんの赤い魚">
        </div>
      </div>
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery2.webp" width="1160" height="738" loading="lazy" alt="海に浮かぶ船">
        </div>
      </div>
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery3.webp" width="1160" height="738" loading="lazy" alt="縞模様の２匹の魚">
        </div>
      </div>
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery4.webp" width="1160" height="738" loading="lazy" alt="黄色い魚">
        </div>
      </div>
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery5.webp" width="1160" height="738" loading="lazy" alt="海の中で泳ぐたくさんの魚">
        </div>
      </div>
      <div class="gallery__item-modal modal js-modal">
        <div class="modal__content modal__content--vertical">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery6.webp" width="984" height="1492" loading="lazy" alt="オレンジの魚と珊瑚礁">
        </div>
      </div>
    </div>
  </section>
  <!-- contact -->
  <?php get_template_part('include/contact') ?>
  </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>