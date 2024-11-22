<?php get_header(); ?>
<main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h1 class="fv-lower__title">月別一覧</h1>
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
    <!-- blog -->
    <div class="blog-lower bg-fish top-lower">
      <div class="blog-lower__inner">
        <div class="blog-lower__container">
          <div class="blog-lower-contents">
            <ul class="blog-lower__cards cards cards--lower">
              <?php if (have_posts()):
                while (have_posts()):
                the_post(); ?>
                <li class="cards__card card">
                <a href="<?php the_permalink(); ?>" class="card__list">
                  <figure class="card__img">
                  <?php if(get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
                  </figure>
                  <div class="card__body">
                    <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m-d') ?></time>
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <p class="card__text"><?php the_excerpt(); ?></p>
                  </div>
                </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <!-- ページネーション -->
            <div class="blog-lower__pagination pagination top-pagenation">
              <ul class="pagenavi__list">
                <?php wp_pagenavi(); ?>
              </ul>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  <?php get_footer(); ?>