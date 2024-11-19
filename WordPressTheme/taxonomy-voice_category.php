<?php get_header(); ?>
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
          <li class="tag__item"><a href="<?php echo esc_url(home_url('/voice')); ?>" >all</a></li>
            <?php
              $current_term_id = get_queried_object()->term_id;
              $terms = get_terms([
                'taxonomy' => 'voice_category',
              ]);
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
        <div class="voice-lower__contents">
          <?php if (have_posts()) : ?>
          <ul class="voice-lower__cards-sort cards-sort">
            <?php while (have_posts()) : the_post(); ?>
              <li class="cards-sort__card card-sort">
                <div class="card-sort__content">
                  <div class="card-sort__topic">
                    <div class="card-sort__info">
                      <p class="card-sort__gender">
                        <?php
                          $age = get_field('add_age')
                          $gender = get_field('add_gender');
                          if ($age && $gender) {
                            echo esc_html($age) . ' (' . esc_html($gender) . ')';
                          }
                        ?>
                      </p>
                      <?php
                          $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                          if ( ! empty( $taxonomy_terms ) ) {
                              foreach( $taxonomy_terms as $taxonomy_term ) {
                                  echo '<span class="card-sort__tag">' . esc_html( $taxonomy_term->name ) . '</span>';
                              }
                          }
                      ?>
                    </div>
                    <h3 class="card-sort__sub-title"><?php the_title(); ?></h3>
                  </div>
                  <div class="card-sort__img-wrap color-box">
                    <?php if(get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
                  </div>
                </div>
                <p class="card-sort__text">
                <?php
                    $text = get_field('add_text');
                    if ($text) {
                      echo esc_html($text);
                    }
                  ?>
                </p>
              </li>
              <?php endwhile; endif; ?>
          </ul>
        </div>
        <!-- ページネーション -->
        <div class="voice-lower__pagination pagination top-pagenation">
            <?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>
  <?php get_footer(); ?>