<?php get_header(); ?>
<?php wp_head(); ?>
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
      <?php
      $current_term_id = get_queried_object()->term_id;
      $terms = get_terms([
        'taxonomy' => 'campaign_category',
        'orderby' => 'description',
        'order'   => 'ASC'
      ]);

      // 'all'リンクの生成
      $home_class = (is_post_type_archive('campaign')) ? 'is-active' : '';
      $home_link = sprintf(
          '<li class="tag__item %s"><a href="%s" title="%s">all</a></li>',
          $home_class,
          esc_url(home_url('/campaign')),
          esc_attr(__('View all posts', 'textdomain'))
      );
      echo $home_link;

      // タームリンクの生成
      if ($terms) {
          foreach ($terms as $term) {
              $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
              $term_link = sprintf(
                  '<li class="tag__item %s"><a href="%s" title="%s">%s</a></li>',
                  $term_class,
                  esc_url(get_term_link($term->term_id)),
                  esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                  esc_html($term->name)
              );
              echo $term_link;
          }
      }
      ?>
      </ul>
    </div>
    <!-- campaign-card-->
      <div class="campaign__lower-contents top-campaign-lower">
      <?php
      $genre_slug = get_query_var('campaign_category');
      $args = [
          "post_type" => "campaign",
          'tax_query' => [
              [
                  // タクソノミーのスラッグを指定
                  'taxonomy' => 'campaign_category',
                  'field'    => 'slug',
                  'terms'    => $genre_slug,
              ],
          ],
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if (have_posts()) : ?>
        <ul class="campaign__cards campaign__cards--lower">
          <?php while (have_posts()) : the_post(); ?>
          <li class="campaign__card" id="campaign-license">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">
              <figure class="campaign__card-img">
                <?php if(get_the_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', ['class' => 'campaign__card-img img']); ?>
                  <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
              </figure>
              <div class="campaign__card-body campaign__card-body--lower">
                <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                    if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                            echo '<span class="campaign__card-tag">' . esc_html( $taxonomy_term->name ) . '</span>';
                        }
                    }
                ?>
                <h3 class="campaign__card-name"><?php the_title(); ?></h3>
              </div>
              <div class="campaign__card-text-wrap">
                <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                <div class="campaign__card-price-wrap">
                  <p class="campaign__card-list-price">
                    <?php $list_price = get_field('campaign__list-price');
                    if($list_price){
                      echo '￥' . number_format($list_price);
                    } ?>
                  </p>
                  <p class="campaign__card-price">
                    <?php $price = get_field('campaign__price');
                    if($price){
                      echo '￥' . number_format($price);
                    } ?>
                  </p>
                </div>
                <div class="campaign__card-box u-desktop">
                  <div class="campaign__card-text-lower">
                    <p class="campaign__card-desc">
                    <?php
                    $desc = get_field('campaign__text');
                    if ($desc) {
                      echo esc_html($desc);
                    }
                  ?>
                    </p>
                  </div>
                  <div class="campaign__card-bottom">
                    <time class="campaign__card-time" datetime="<?php echo esc_attr(get_field('campaign__start-date')); ?>">
                    <?php 
                      $start_date = get_field('campaign__start-date'); 
                      $end_date = get_field('campaign__end-date');
                      if ($start_date && $end_date) {
                        echo esc_html(date('Y/n/j', strtotime($start_date))) . ' - ' . esc_html(date('n/j', strtotime($end_date)));
                      }
                    ?>
                    </time>
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
<!-- contact -->
<?php get_template_part('include/contact') ?>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>