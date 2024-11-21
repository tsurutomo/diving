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
      <?php $gallery_item = SCF::get('gallery');
      if (!empty($gallery_item)) :
      ?>
      <ul class="gallery__list">
        <?php foreach ($gallery_item as $item) :
              $img_id = $item['gallery__image'];
              $img_data = wp_get_attachment_image_src($img_id, 'large');
              $img_url = $img_data[0];
              $img_width = $img_data[1];
              $img_height = $img_data[2];
        ?>
        <li class="gallery__item js-modal-open">
          <img src="<?php echo esc_url($img_data[0]); ?>" width="<?php echo esc_attr($img_data[1]); ?>" height="<?php echo esc_attr($img_data[2]); ?>" loading="lazy" alt="<?php the_title(); ?>の画像">
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
  </section>
  <!-- モーダルウィンドウ-->
  <div class="gallery__item-modal modal js-modal">
    <div class="modal__content">
      <img src="" alt="<?php the_title(); ?>の画像" loading="lazy">
    </div>
  </div>
  <?php get_footer(); ?>