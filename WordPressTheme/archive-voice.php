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
            <li class="tag__item is-active"><a href="<?php echo esc_url(home_url('/voice')); ?>" >all</a></li>
            <?php
            $terms = get_terms([
              'taxonomy' => 'voice_category',
              'orderby'  => 'description',
              'order'    => 'ASC',
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
        <div class="voice-lower__contents">
          <?php if (have_posts()) : ?>
          <ul class="voice-lower__cards-sort cards-sort">
            <?php while (have_posts()) : the_post(); ?>
              <li class="cards-sort__card card-sort">
                <div class="card-sort__content">
                  <div class="card-sort__topic">
                    <div class="card-sort__info">
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
                      <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                          if ( ! empty( $taxonomy_terms ) ) :
                              foreach( $taxonomy_terms as $taxonomy_term ) : ?>
                                <span class="card-sort__tag">
                                  <?php echo esc_html( $taxonomy_term->name ); ?>
                                </span>
                              <?php endforeach;
                                  endif;
                              ?>
                    </div>
                    <h3 class="card-sort__sub-title"><?php the_title(); ?></h3>
                  </div>
                  <div class="card-sort__img-wrap color-box">
                    <?php if(get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url() ?>"width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
                  </div>
                </div>
                <?php
                $text = get_field('add_text');
                if (!empty($text)) : ?>
                  <p class="card-sort__text">
                    <?php echo esc_html($text); ?>
                  </p>
                <?php endif; ?>
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