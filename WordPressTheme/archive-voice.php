<?php get_header(); ?>
<?php wp_head(); ?>
<main>
<!--fv-->
<div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h1 class="fv-lower__title">Voice</h1>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/voice-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-fvsp.webp" width="750" height="920" alt="スキューバダイビングをする人たち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>
    <!-- voice -->
    <section class="voice-lower bg-fish top-lower">
      <div class="voice-lower__inner inner">
        <!--tag-->
        <div class="voice-lower__tag tag">
          <ul class="tag__list">
            <li class="tag__item is-active"><a href="" >all</a></li>
            <li class="tag__item"><a href="" >ライセンス講習</a></li>
            <li class="tag__item"><a href="" >ファンダイビング</a></li>
            <li class="tag__item"><a href="" >体験ダイビング</a></li>
          </ul>
        </div>
        <div class="voice-lower__contents">
          <?php if (have_posts()) : ?>
          <ul class="voice-lower__cards-sort cards-sort">
            <?php while (have_posts()) : the_post(); ?>
              <li class="cards-sort__card card-sort">
                <div class="card-sort__content">
                  <div class="card-sort__topic">
                    <div class="card-sort__info">
                      <p class="card-sort__gender">20代(女性)</p>
                      <?php $cat = get_the_category(); ?>
                      <span class="card-sort__tag"><?php the_category(); ?></span>
                    </div>
                    <h3 class="card-sort__sub-title"><?php the_title(); ?></h3>
                  </div>
                  <div class="card-sort__img-wrap color-box">
                    <?php if(get_the_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full', ['class' => 'card-sort__img']); ?>
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
                  </div>
                </div>
                <p class="card-sort__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
              </li>
              <?php endwhile; endif; ?>
          </ul>
        </div>
        <!-- ページネーション -->
        <div class="voice-lower__pagination pagination top-pagenation">
          <ul class="pagination__list">
            <li class="pagination__item">
              <a href="#"><span class="pagination__prev"></span></a>
            </li>
            <li class="pagination__item is-active">
              <a href="#">1</a>
            </li>
            <li class="pagination__item">
              <a href="#">2</a>
            </li>
            <li class="pagination__item">
              <a href="#">3</a>
            </li>
            <li class="pagination__item">
              <a href="#">4</a>
            </li>
            <li class="pagination__item u-desktop">
              <a href="#">5</a>
            </li>
            <li class="pagination__item u-desktop">
              <a href="#">6</a>
            </li>
            <li class="pagination__item">
              <a href="#"><span class="pagination__next"></span></a>
            </li>
          </ul>
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