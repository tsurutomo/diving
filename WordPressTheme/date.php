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
                      <?php the_post_thumbnail('full', ['class' => 'card__img img']); ?>
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
                <?php
                  $args = [
                      "post_type" => "voice",
                      "posts_per_page" => 1,
                      "orderby" => "date",
                      "order" => "DESC",
                  ];
                  $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                <div class="side__content">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="side__review review">
                    <a href="<?php the_permalink(); ?>">
                      <figure class="review__img">
                        <?php if(get_the_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full', ['class' => 'review__img img']); ?>
                        <?php else: ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                        <?php endif; ?>
                      </figure>
                      <div class="review__body">
                        <p class="review__gender">
                          <?php
                          $age = get_field('add_age');
                          $gender = get_field('add_gender');
                          if ($age && $gender) {
                            echo esc_html($age) . ' (' . esc_html($gender) . ')';
                          }
                          ?>
                        </p>
                        <h3 class="review__title"><?php the_title(); ?></h3>
                      </div>
                    </a>
                  </div>
                  <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                  <div class="side__button-wrap">
                    <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button"><p>View&nbsp;more</p></a>
                  </div>
                  <?php else : ?>
                    <p>口コミが投稿されていません</p>
                  <?php endif; ?>
                </div>
              </div>
              <div class="side__wrap">
                <h2 class="side__title">キャンペーン</h2>
                <div class="side__content">
                <?php
                    $args = [
                        "post_type" => "campaign",
                        "posts_per_page" => 2,
                        "orderby" => "date",
                        "order" => "DESC",
                    ];
                    $the_query = new WP_Query($args);
                  ?>
                  <?php if ($the_query->have_posts()) : ?>
                  <ul class="side__campaign campaign__cards campaign__cards--side">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="campaign__card">
                      <a href="<?php echo esc_url(home_url('/campaign')); ?>">
                        <figure class="campaign__card-img">
                          <?php if(get_the_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['class' => 'campaign__card-img img']); ?>
                          <?php else: ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                          <?php endif; ?>
                        </figure>
                        <div class="campaign__card-body campaign__card-body--pd">
                          <h3 class="campaign__card-name campaign__card-name--center"><?php the_title(); ?></h3>
                        </div>
                        <div class="campaign__card-text-wrap campaign__card-text-wrap--pb">
                          <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                          <div class="campaign__card-price-wrap">
                            <p class="campaign__card-list-price">
                              <?php $list_price = get_field('campaign__list-price');
                                if($list_price){
                                  echo '￥' . number_format($list_price);
                                } ?>
                            </p>
                            <p class="campaign__card-price campaign__card-price--lower">
                              <?php $price = get_field('campaign__price');
                                if($price){
                                  echo '￥' . number_format($price);
                                } ?>
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                  </ul>
                  <?php else : ?>
                  <p>記事が投稿されていません</p>
                  <?php endif; ?>
                  <div class="side__button-wrap">
                    <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button"><p>View&nbsp;more</p></a>
                  </div>
                </div>
              </div>

              <div class="side__wrap">
                <h2 class="side__title">アーカイブ</h2>
                <div class="side__content">
                <ul class="side__archive archive">
                    <?php
                    // 最も古い年を取得
                    $start_year = get_oldest_year();
                    $current_year = date('Y');

                    // 各年をループ
                    for ($year = $current_year; $year >= $start_year; $year--) {
                        $year_count = get_year_archives_num($year); // 年の投稿数を取得
                        if ($year_count > 0) { // 投稿がある年のみ表示
                            echo '<li class="archive__item">';
                            echo '<p class="archive__year" data-open-acd="archive-acd-' . $year . '">' . $year . '年</p>';
                            // 各月をループ
                            for ($month = 1; $month <= 12; $month++) {
                                $month_count = get_month_archives_num($year, $month); // 月の投稿数を取得
                                if ($month_count > 0) { // 投稿がある月のみ表示
                                    echo '<p class="archive__month"><a href="' . get_month_link($year, $month) . '">' . $month . '月</a></p>';
                                }
                            }
                            echo '</li>';
                        }
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  <?php get_footer(); ?>