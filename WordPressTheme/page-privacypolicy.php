<?php get_header(); ?>
<main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Privacy&nbsp;Policy</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fvsp.webp" width="750" height="920" alt="サンゴの近くで泳ぐオレンジ色の魚たち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <section class="privacy bg-fish top-lower">
      <div class="privacy__inner">
        <h1 class="privacy__title">プライバシーポリシー</h1>
        <div class="privacy__content">
          <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                  the_content();
              endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>