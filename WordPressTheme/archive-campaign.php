<?php get_header(); ?>
<main>
  <!--fv-->
  <div class="fv-lower">
    <div class="fv-lower__inner">
      <div class="fv-lower__tittle-wrap">
        <h1 class="fv-lower__title">Campaign</h1>
      </div>
      <div class="fv-lower__img-wrap">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-fv.webp" media="(min-width: 768px)"/>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-fvsp.webp" width="750" height="920" alt="海の中を泳ぐ魚たち">
        </picture>
      </div>
    </div>
  </div>
  <!-- パンくずリスト-->
  <?php get_template_part('include/breadcrumb') ?>
  <!-- campaign__lower-->
  <div class="campaign-lower bg-fish top-lower">
    <div class="campaign-lower-inner inner">
      <!--tag-->
      <div class="campaign__tag tag">
        <ul class="tag__list">
          <li class="tag__item is-active"><a href="<?php echo esc_url(home_url('/campaign')); ?>" >all</a></li>
          <?php
            $terms = get_terms([
              'taxonomy' => 'campaign_category',
            ]);
            if($terms) :
                foreach($terms as $term) :
                    $term_class = is_tax('voice_category', $term->term_id) ? 'is-active' : '';
                    ?>
                    <li class="tag__item <?php echo esc_attr($term_class); ?>">
                      <a href="<?php echo esc_url(get_term_link($term)); ?>">
                          <?php echo esc_html($term->name); ?>
                      </a>
                    </li>
                <?php endforeach;
            endif;
            ?>
        </ul>
      </div>
      <!-- campaign-card-->
      <div class="campaign__lower-contents top-campaign-lower">
        <?php if (have_posts()) : ?>
        <ul class="campaign__cards campaign__cards--lower">
        <?php while (have_posts()) : the_post(); ?>
          <li class="campaign__card" id="campaign-license">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">
              <figure class="campaign__card-img">
              <?php if(get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url() ?>" width="666" height="446" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
              <?php endif; ?>
              </figure>
              <div class="campaign__card-body campaign__card-body--lower">
                <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                    if ( ! empty( $taxonomy_terms ) ) :
                      foreach( $taxonomy_terms as $taxonomy_term ) :?>
                        <span class="campaign__card-tag">
                          <?php echo esc_html( $taxonomy_term->name ); ?>
                        </span>
                      <?php endforeach;
                        endif;
                        ?>
                <h3 class="campaign__card-name"><?php the_title(); ?></h3>
              </div>
              <div class="campaign__card-text-wrap">
                <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                <div class="campaign__card-price-wrap">
                  <?php if (($list_price = get_field('campaign__list-price'))) : ?>
                    <p class="campaign__card-list-price">
                      ¥<?= number_format($list_price); ?>
                    </p>
                  <?php endif; ?>
                  <?php if (($price = get_field('campaign__price'))) : ?>
                    <p class="campaign__card-price">
                      ￥<?= number_format($price); ?>
                    </p>
                  <?php endif; ?>
                </div>
                <div class="campaign__card-box u-desktop">
                  <div class="campaign__card-text-lower">
                    <?php if (($text = get_field('campaign__text'))) : ?>
                    <p class="campaign__card-desc">
                      <?= esc_html($text); ?>
                    </p>
                    <?php endif; ?>
                  </div>
                  <div class="campaign__card-bottom">
                    <?php
                    $start_date = get_field('campaign__start-date');
                    $end_date = get_field('campaign__end-date');
                    ?>
                    <?php if ($start_date && $end_date) : ?>
                    <time class="campaign__card-time" datetime="<?= esc_attr(date('Y-m-d',strtotime($start_date))); ?>">
                    <?= esc_html(date('Y/n/j', strtotime($start_date))). ' - ' . esc_html(date('n/j', strtotime($end_date))); ?>
                    </time>
                    <?php endif; ?>
                    <p class="campaign__card-info">ご予約・お問い合わせはコチラ</p>
                    <div class="button campaign-lower-button"><p>Contact&nbsp;us</p></div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>
        <!-- ページネーション -->
        <div class="campaign__card-pagination pagination top-pagenation">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>