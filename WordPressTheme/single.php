<?php get_header(); ?>
<main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Blog</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-fvsp.webp" width="750" height="920" alt="海でスキューバダイビングをする人">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <?php if (have_posts()):
                while (have_posts()):
                the_post(); ?>

    <div class="blog-lower bg-fish top-lower">
      <div class="blog-lower__inner inner">
        <div class="blog-lower__container">
          <div class="blog-lower__contents">
            <article class="blog-lower__detail detail">
              <time datetime="<?php the_time('c') ?>" class="detail__time"><?php the_time('Y.m-d') ?></time>
              <h1 class="detail__title"><?php the_title(); ?></h1>
              <figure class="detail__eyecatch-wrap">
              <?php if(get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                  <img src="<?php echo get_theme_file_uri('/assets/images/noimage.jpg'); ?>" width="602" height="402" alt="noimage">
              <?php endif; ?>
              </figure>
              <!--the contents-->
              <div class="detail__content">
                <?php the_content(); ?>
              </div>
              <div class="detail__pagenavi pagenavi top-pagenavi">
                <ul class="pagenavi__list">
                <?php
                  $prev = get_previous_post();
                  if ( ! empty( $prev ) ) {
                    $prev_url = esc_url( get_permalink( $prev->ID ) );
                  }
                  $next = get_next_post();
                  if ( ! empty( $next ) ) {
                    $next_url = esc_url( get_permalink( $next->ID ) );
                  }
                ?>
                  <li class="pagenavi__item">
                    <?php if ( ! empty( $prev ) ) : ?>
                    <a href="<?php echo $prev_url; ?>"><span class="pagenavi__prev"></span></a>
                    <?php endif; ?>
                  </li>
                  <li class="pagenavi__item is-active">
                    <?php if ( ! empty( $next ) ) : ?>
                    <a href="<?php echo $next_url; ?>"><span class="pagenavi__next"></span></a>
                    <?php endif; ?>
                  </li>
                </ul>
              </div>
            </article>
          </div>
          <?php endwhile; endif; ?>
    <?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>