<?php get_header(); ?>
  <main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Contact</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri('/assets/images/contact-fv.webp'); ?>" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri('/assets/images/contact-fvsp.webp'); ?>" width="750" height="920" alt="波飛沫ち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <section class="contact-lower bg-fish top-lower">
      <div class="contact-lower__inner">
      <?php echo do_shortcode('[contact-form-7 id="2368fe1" title="お問い合わせ"]'); ?>
      </div>
    </section>
<?php get_footer(); ?>