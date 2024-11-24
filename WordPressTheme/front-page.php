<?php get_header(); ?>
  <main>
    <!-- fv -->
    <div class="fv">
      <div class="fv__inner">
        <div class="fv__title-wrap">
          <h2 class="fv__title">DIVING</h2>
          <p class="fv__sub-title">into&nbsp;the&nbsp;ocean</p>
        </div>
        <div class="fv__swiper swiper js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-img">
                <picture>
                  <source srcset="<?php echo get_field('fv_image_1_pc'); ?>" media="(min-width: 768px)"/>
                  <img src="<?php echo get_field('fv_image_1_sp'); ?>" width="750" height="1334" alt="ウミガメ">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <picture>
                  <source srcset="<?php echo get_field('fv_image_2_pc'); ?>" media="(min-width: 768px)"/>
                  <img src="<?php echo get_field('fv_image_2_sp'); ?>" width="750" height="1334" alt="ウミガメとダイバー">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="fv__swiper-img swiper-img">
                <picture>
                  <source srcset="<?php echo get_field('fv_image_3_pc'); ?>" media="(min-width: 768px)"/>
                  <img src="<?php echo get_field('fv_image_3_sp'); ?>" width="750" height="1334" alt="船が浮かぶ海" >
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <picture>
                  <source srcset="<?php echo get_field('fv_image_4_pc'); ?>" media="(min-width: 768px)"/>
                  <img src="<?php echo get_field('fv_image_4_sp'); ?>" width="750" height="1334" alt="青空と透き通る海と砂浜" >
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- campaign -->
    <section class="campaign top-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__title title">
          <p class="title__main-title">Campaign</p>
          <h2 class="title__sub-title">キャンペーン</h2>
        </div>
        <div class="campaign__swiper campaign-swiper">
          <div class="campaign__contents swiper js-campaign-swiper">
          <?php
          $args = [
              "post_type" => "campaign",
              "posts_per_page" => 4
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="campaign__cards swiper-wrapper">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="campaign__card swiper-slide">
                  <figure class="campaign__card-img">
                    <?php if(get_the_post_thumbnail()) : ?>
                      <img src="<?php echo the_post_thumbnail_url(); ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                    <?php endif; ?>
                  </figure>
                  <div class="campaign__card-body">
                    <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                      if ( ! empty( $taxonomy_terms ) ) :
                          foreach( $taxonomy_terms as $taxonomy_term ) : ?>
                          <span class="campaign__card-tag">
                              <?php echo esc_html( $taxonomy_term->name ); ?>
                          </span>
                          <?php endforeach;
                          endif;
                    ?>
                    <h3 class="campaign__card-name"><?php the_title(); ?></h3>
                  </div>
                  <div class="campaign__card-text-wrap">
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
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
          <?php else : ?>
              <p>記事が投稿されていません</p>
          <?php endif; ?>
          </div>
        </div>
        <div class="campaign__button-wrap">
          <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button"><p>View&nbsp;more</p></a>
        </div>
        <div class="campaign-swiper__button-wrap u-desktop">
          <div class="swiper-button-prev js-service-arrow u-desktop"></div>
          <div class="swiper-button-next js-service-arrow u-desktop"></div>
        </div>
      </div>
    </section>
    <!-- about us -->
    <section class="about-us top-about-us">
      <div class="about-us__inner inner">
        <div class="about-us__title title">
          <p class="title__main-title">About&nbsp;us</p>
          <h2 class="title__sub-title">私たちについて</h2>
        </div>
        <div class="about-us__container">
          <div class="about-us__img-box">
            <div class="about-us__right-wrap">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about02.jpg" alt="魚が２匹泳ぐ様子">
            </div>
            <div class="about-us__left-wrap">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about01.jpg" alt="屋根の上に置かれたシーサー">
            </div>
          </div>
          <div class="about-us__contents">
            <div class="about-us__content">
              <h3 class="about-us__copy">Dive&nbsp;into<br>the&nbsp;Ocean</h3>
            </div>
            <div class="about-us__text-box">
              <p class="about-us__text">
                <?php
                $page = get_page_by_path('about-us');
                if ( $page ) {
                    $about_text = SCF::get('about__text', $page->ID);
                    echo esc_html( $about_text );
                }
                ?>
              </p>
              <div class="about-us__button-wrapper">
                <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="button"><p>View&nbsp;more</p></a>
              </div>
            </div>
          </div>
        </div>
        <div class="about-us__under-img-wrap u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-under__img.png" alt="サンゴのイラスト">
        </div>
      </div>
    </section>
    <!-- information-->
    <section class="info top-info">
      <div class="info__inner inner">
        <div class="info__title title">
          <p class="title__main-title">Information</p>
          <h2 class="title__sub-title">ダイビング情報</h2>
        </div>
        <div class="info__contents">
          <div class="info__img-wrap color-box">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info.jpg" width="1080" height="712" alt="２匹の魚が泳いでいる様子">
          </div>
          <div class="info__text-content">
            <h3 class="info__sub-title">ライセンス講習</h3>
            <p class="info__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="info__button-wrap">
              <a href="<?php echo esc_url(home_url('/information')); ?>" class="button"><p>View&nbsp;more</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- blog -->
    <section class="blog">
      <div class="blog__inner inner">
        <div class="blog__title title">
          <p class="title__main-title title__main-title--white">Blog</p>
          <h2 class="title__sub-title title__sub-title--white">ブログ</h2>
        </div>
        <ul class="blog__cards cards">
        <?php
          $blog_posts_args = array(
            'posts_per_page' => 3
          );
          $blog_posts = new WP_Query($blog_posts_args);
            if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
          <li class="cards__card card">
            <a href="<?php the_permalink(); ?>" class="card__list">
              <figure class="card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url() ?>" width="602" height="402" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </figure>
              <div class="card__body">
                <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m-d'); ?></time>
                <h3 class="card__title"><?php the_title(); ?></h3>
                <p class="card__text"><?php the_excerpt(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
        <div class="blog__button-wrap">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"><p>View&nbsp;more</p></a>
        </div>
        <div class="blog__top-img-wrap u-desktop">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/deco-fish1.png" alt="泳ぐ魚たちのイラスト">
      </div>
      </div>
    </section>
    <!-- voice -->
    <section class="voice top-voice">
      <div class="voice__inner inner">
        <div class="voice__title title">
          <p class="title__main-title">Voice</p>
          <h2 class="title__sub-title">お客様の声</h2>
        </div>
        <div class="voice__contents">
        <?php
          $args = [
              "post_type" => "voice",
              "posts_per_page" => 2,
          ];
          $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="voice__cards-sort cards-sort">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                  <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" width="602" height="402" alt="noimage">
                <?php endif; ?>
                </div>
              </div>
              <?php
                $text = get_field('add_text');
                if (!empty($text)) : ?>
                  <p class="card-sort__text">
                    <?php echo esc_html(wp_trim_words($text, 169, '…')); ?>
                  </p>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php else : ?>
            <p>口コミが投稿されていません</p>
          <?php endif; ?>
        </div>
        <div class="voice__button-wrap">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button"><p>View&nbsp;more</p></a>
        </div>
        <div class="voice__top-img-wrap u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-top__img.png" alt="泳ぐ魚たちのイラスト">
        </div>
        <div class="voice__under-img-wrap u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-under.png" alt="タツノオトシゴ">
        </div>
      </div>
    </section>
    <!-- price -->
    <section class="price top-price">
      <div class="price__inner inner">
        <div class="price__title title">
          <p class="title__main-title">Price</p>
          <h2 class="title__sub-title">料金一覧</h2>
        </div>
        <div class="price__contents">
          <div class="price__img-wrap color-box u-mobile">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-sp.jpg" width="690" height="454" alt="ウミガメ">
          </div>
          <div class="price__img-wrap color-box u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-pc.jpg"  width="984" height="1482" alt="たくさんの魚">

          </div>
          <div class="price__box">
            <dl class="price__list">
              <?php $license = SCF::get('license_course', get_page_by_path('price')->ID);
              if ( !empty($license) ): ?>
              <div class="price__items">
                <h3 class="price__item">ライセンス講習</h3>
                  <?php foreach($license as $fields):
                    $name = $fields['license_name'];
                    $price = $fields['license_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                <div class="price__course">
                  <dt class="price__name"><?php echo esc_html($name); ?></dt>
                  <dd class="price__cost">¥<?php echo esc_html(number_format(floatval($price))); ?></dd>
                </div>
                <?php
                  endif;
                endforeach;
                ?>
              </div>
              <?php
              endif;
              ?>
              <?php $license = SCF::get('experience_course', get_page_by_path('price')->ID);
              if ( !empty($license) ): ?>
              <div class="price__items">
                <h3 class="price__item">体験ダイビング</h3>
                  <?php foreach($license as $fields):
                    $name = $fields['course_name'];
                    $price = $fields['course_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                <div class="price__course">
                  <dt class="price__name"><?php echo esc_html($name); ?></dt>
                  <dd class="price__cost">¥<?php echo esc_html(number_format(floatval($price))); ?></dd>
                </div>
                <?php
                  endif;
                endforeach;
                ?>
              </div>
              <?php
              endif;
              ?>
              <?php $license = SCF::get('fun_course', get_page_by_path('price')->ID);
              if ( !empty($license) ): ?>
              <div class="price__items">
                <h3 class="price__item">ファンダイビング</h3>
                  <?php foreach($license as $fields):
                    $name = $fields['fun_name'];
                    $price = $fields['fun_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                <div class="price__course">
                  <dt class="price__name"><?php echo esc_html($name); ?></dt>
                  <dd class="price__cost"><?php echo esc_html(number_format(floatval($price))); ?></dd>
                </div>
                <?php
                  endif;
                endforeach;
                ?>
              </div>
              <?php
              endif;
              ?>
              <?php $license = SCF::get('special_course', get_page_by_path('price')->ID);
              if ( !empty($license) ): ?>
              <div class="price__items">
                <h3 class="price__item">スペシャルダイビング</h3>
                <?php foreach($license as $fields):
                    $name = $fields['special_name'];
                    $price = $fields['special_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                <div class="price__course">
                  <dt class="price__name"><?php echo esc_html($name); ?></dt>
                  <dd class="price__cost">¥<?php echo esc_html(number_format(floatval($price))); ?></dd>
                </div>
                <?php
                  endif;
                endforeach;
                ?>
              </div>
              <?php
              endif;
              ?>
            </dl>
          </div>
        </div>
        <div class="price__button-wrap">
          <a href="<?php echo esc_url(home_url('/price')); ?>" class="button"><p>View&nbsp;more</p></a>
        </div>
        <div class="price__under-img-wrap u-desktop">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fish-green.png" alt="魚たちのイラスト">
      </div>
      </div>
    </section>
  <?php get_footer(); ?>