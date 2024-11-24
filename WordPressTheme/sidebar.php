<!-- サイド -->
<aside class="blog-lower__side side">
  <div class="side__inner">
    <div class="side__wrap">
      <h2 class="side__title">人気記事</h2>
      <div class="side__content">
        <ul class="side__article article">
        <?php
          $popular_post_items = array(
            'posts_per_page' => 3,
            'meta_key'       => 'post_views_count',
            'orderby'        => 'meta_value_num',
          );
          $popular_posts = new WP_Query($popular_post_items);

          if ($popular_posts->have_posts()) :
            while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
              <li class="article__item">
                <a href="<?php the_permalink(); ?>">
                  <figure class="article__img">
                    <?php if(get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
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
                <img src="<?php the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
              <?php endif; ?>
            </figure>
            <div class="review__body">
            <?php
              $age = get_field('add_age');
              $gender = get_field('add_gender');  ?>
              <p class="card-sort__gender">
                <?php
                  if (!empty($age) && !empty($gender)) {
                    echo esc_html($age) . ' (' . esc_html($gender) . ')';
                  } elseif (!empty($age)) {
                    echo esc_html($age);
                  } elseif (!empty($gender)) {
                    echo esc_html($gender);
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
                  <img src="<?php the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                <?php endif; ?>
              </figure>
              <div class="campaign__card-body campaign__card-body--pd">
                <h3 class="campaign__card-name campaign__card-name--center"><?php the_title(); ?></h3>
              </div>
              <div class="campaign__card-text-wrap campaign__card-text-wrap--pb">
              <?php
              $list_price = get_field('campaign__list-price');
              $price = get_field('campaign__price');
              if (!empty($price) && is_numeric($price)) : ?>
                <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                <div class="campaign__card-price-wrap">
                  <?php
                  if (!empty($list_price) && is_numeric($list_price)) : ?>
                    <p class="campaign__card-list-price">
                      ¥<?php echo esc_html(number_format($list_price)); ?>
                    </p>
                  <?php endif; ?>
                  <?php
                  if (!empty($price) && is_numeric($price)) : ?>
                    <p class="campaign__card-price">
                      ¥<?php echo esc_html(number_format($price)); ?>
                    </p>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
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
          $start_year = get_oldest_year();
          $current_year = date('Y');

          for ($year = $current_year; $year >= $start_year; $year--) {
              $year_count = get_year_archives_num($year);
              if ($year_count > 0) {
                  ?>
                  <li class="archive__item">
                      <p class="archive__year" data-open-acd="archive-acd-<?php echo $year; ?>"><?php echo $year; ?>年</p>
                      <?php
                      for ($month = 1; $month <= 12; $month++) {
                          $month_count = get_month_archives_num($year, $month);
                          if ($month_count > 0) {
                              ?>
                              <p class="archive__month"><a href="<?php echo get_month_link($year, $month); ?>"><?php echo $month; ?>月</a></p>
                              <?php
                          }
                      }
                      ?>
                  </li>
                <?php
              }
          }
          ?>
        </ul>
        </div>
      </div>
    </div>
</aside>