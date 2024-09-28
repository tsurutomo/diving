<?php get_header(); ?>
<?php wp_head(); ?>
<main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h1 class="fv-lower__title">Blog</h1>
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
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog01.jpg" width="602" height="402" alt="サンゴの写真">
                  </figure>
                  <div class="card__body">
                    <time class="card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m-d') ?></time>
                    <h3 class="card__title"><?php the_title(); ?></h3>
                    <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </a>
                </li>
                <?php endwhile; endif; ?>
              
              
            </ul>
            <!-- ページネーション -->
            <div class="blog-lower__pagination pagination top-pagenation">
              <ul class="pagination__list">
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
                    <li class="article__item">
                      <a href="#">
                        <figure class="article__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-card4.webp" width="602" height="402" alt="黄色い魚">
                        </figure>
                        <div class="article__body">
                          <time class="article__time" datetime="2023-11-17">2023.11/17</time>
                          <p class="article__title">ライセンス取得</p>
                        </div>
                      </a>
                    </li>
                    <li class="article__item">
                      <a href="#">
                        <figure class="article__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog02.webp" width="602" height="402" alt="ウミガメ">
                        </figure>
                        <div class="article__body">
                          <time class="article__time" datetime="2023-11-17">2023.11/17</time>
                          <p class="article__title">ウミガメと泳ぐ</p>
                        </div>
                      </a>
                    </li>
                    <li class="article__item">
                      <a href="#">
                        <figure class="article__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog03.webp" width="602" height="402" alt="カクレクマノミ">
                        </figure>
                        <div class="article__body">
                          <time class="article__time" datetime="2023-11-17">2023.11/17</time>
                          <p class="article__title">カクレクマノミ</p>
                        </div>
                      </a>
                    </li>
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
</body>
</html>