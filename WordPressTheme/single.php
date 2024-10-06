<?php get_header(); ?>
<?php wp_head(); ?>
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
                  <img src="<?php the_post_thumbnail_url('full'); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
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
    <!-- サイド -->
    <aside class="blog-lower__side side">
      <div class="side__inner">
        <div class="side__wrap">
          <h2 class="side__title">人気記事</h2>
          <div class="side__content">
          <ul class="side__article article">
                  <?php
                    $popular_posts_args = array(
                      'post_type'      => 'post',
                      'posts_per_page' => 3, // 表示する人気記事の数
                      'meta_key'       => 'post_views_count',
                      'orderby'        => 'meta_value_num',
                      'order'          => 'DESC'
                    );
                    $popular_posts = new WP_Query($popular_posts_args);

                    if ($popular_posts->have_posts()) :
                      while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                        <li class="article__item">
                          <a href="<?php the_permalink(); ?>">
                            <figure class="article__img">
                              <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'article__img img')); ?>
                              <?php else: ?>
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" alt="<?php the_title(); ?>">
                              <?php endif; ?>
                            </figure>
                            <div class="article__body">
                              <time class="article__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m-d'); ?></time>
                              <p class="article__title"><?php the_title(); ?></p>
                            </div>
                          </a>
                        </li>
                      <?php endwhile;
                      wp_reset_postdata();
                    endif;
                  ?>
                  </ul>
          </div>
        </div>
        <div class="side__wrap">
          <h2 class="side__title">口コミ</h2>
          <div class="side__content">
            <div class="side__review review">
              <a href="#">
                <figure class="review__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice5.webp" width="294" height="218" alt="腕を組み微笑む夫婦">
                </figure>
                <div class="review__body">
                  <p class="review__gender">30代(カップル)</p>
                  <h3 class="review__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
              </a>
            </div>
            <div class="side__button-wrap">
              <a href="#" class="button"><p>View&nbsp;more</p></a>
            </div>
          </div>
        </div>
        <div class="side__wrap">
          <h2 class="side__title">キャンペーン</h2>
          <div class="side__content">
            <ul class="side__campaign campaign__cards campaign__cards--side">
              <li class="campaign__card">
                <a href="#">
                  <figure class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" width="666" height="446" alt="海の中で泳ぐ色鮮やかな魚たち">
                  </figure>
                  <div class="campaign__card-body campaign__card-body--pd">
                    <h3 class="campaign__card-name campaign__card-name--center">ライセンス取得</h3>
                  </div>
                  <div class="campaign__card-text-wrap campaign__card-text-wrap--pb">
                    <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                    <div class="campaign__card-price-wrap">
                      <p class="campaign__card-list-price">¥56,000</p>
                      <p class="campaign__card-price campaign__card-price--lower">¥46,000</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign__card">
                <a href="#">
                  <figure class="campaign__card-img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" width="666" height="446" alt="船が浮かぶ透き通った海">
                  </figure>
                  <div class="campaign__card-body campaign__card-body--pd">
                    <h3 class="campaign__card-name campaign__card-name--center">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign__card-text-wrap campaign__card-text-wrap--pb">
                    <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                    <div class="campaign__card-price-wrap">
                      <p class="campaign__card-list-price">¥24,000</p>
                      <p class="campaign__card-price  campaign__card-price--lower">¥18,000</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
            <div class="side__button-wrap">
              <a href="#" class="button"><p>View&nbsp;more</p></a>
            </div>
          </div>
        </div>
        <div class="side__wrap">
          <h2 class="side__title">アーカイブ</h2>
          <div class="side__content">
            <ul class="side__archive archive">
              <li class="archive__item">
                <p class="archive__year">2023</p>
                <p class="archive__month"><a href="#">3月</a></p>
                <p class="archive__month"><a href="#">2月</a></p>
                <p class="archive__month"><a href="#">1月</a></p>
              </li>
              <li class="archive__item">
                <p class="archive__year">2022</p>
                <p class="archive__month"><a href="#">3月</a></p>
                <p class="archive__month"><a href="#">2月</a></p>
                <p class="archive__month"><a href="#">1月</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </aside>
</div>
</div>
</div>
<!-- contact -->
<?php get_template_part('include/contact') ?>
</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>