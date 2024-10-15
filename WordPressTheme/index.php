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
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/fv_img.jpg" media="(min-width: 768px)"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fv-sp01.jpg" width="750" height="1334" alt="ウミガメ">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/fv02_pc.jpg" media="(min-width: 768px)"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fv-sp02.jpg" width="750" height="1334" alt="ウミガメとダイバー">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="fv__swiper-img swiper-img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/fv03_pc.jpg" media="(min-width: 768px)"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fv-sp03.jpg" width="750" height="1334" alt="船が浮かぶ海" >
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-img">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/fv04_pc.jpg" media="(min-width: 768px)"/>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fv-sp04.jpg" width="750" height="1334" alt="青空と透き通る海と砂浜" >
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
            <ul class="campaign__cards swiper-wrapper">
              <li class="campaign__card swiper-slide">
                <figure class="campaign__card-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" width="666" height="446" alt="海の中で泳ぐ色鮮やかな魚たち">
                </figure>
                <div class="campaign__card-body">
                  <span class="campaign__card-tag">ライセンス講習</span>
                  <h3 class="campaign__card-name">ライセンス取得</h3>
                </div>
                  <div class="campaign__card-text-wrap">
                  <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                  <div class="campaign__card-price-wrap">
                    <p class="campaign__card-list-price">¥56,000</p>
                    <p class="campaign__card-price">¥46,000</p>
                  </div>
                </div>
              </li>
              <li class="campaign__card swiper-slide">
                <figure class="campaign__card-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" width="666" height="446" alt="船が浮かぶ透き通った海">
                </figure>
                <div class="campaign__card-body">
                  <span class="campaign__card-tag">体験ダイビング</span>
                  <h3 class="campaign__card-name">貸切体験ダイビング</h3>
                </div>
                  <div class="campaign__card-text-wrap">
                  <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                  <div class="campaign__card-price-wrap">
                    <p class="campaign__card-list-price">¥24,000</p>
                    <p class="campaign__card-price">¥18,000</p>
                  </div>
                </div>
              </li>
              <li class="campaign__card swiper-slide">
                <figure class="campaign__card-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign3.jpg" width="668" height="446" alt="紫色のクラゲたち">
                </figure>
                <div class="campaign__card-body">
                  <span class="campaign__card-tag">体験ダイビング</span>
                  <h3 class="campaign__card-name">ナイトダイビング</h3>
                </div>
                  <div class="campaign__card-text-wrap">
                  <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                  <div class="campaign__card-price-wrap">
                    <p class="campaign__card-list-price">¥10,000</p>
                    <p class="campaign__card-price">¥8,000</p>
                  </div>
                </div>
              </li>
              <li class="campaign__card swiper-slide">
                <figure class="campaign__card-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign4.jpg" width="560" height="374" alt="ダイビングをする人たち">
                </figure>
                <div class="campaign__card-body">
                  <span class="campaign__card-tag">ファンダイビング</span>
                  <h3 class="campaign__card-name">貸切体験ファンダイビング</h3>
                </div>
                  <div class="campaign__card-text-wrap">
                  <p class="campaign__card-text">全部コミコミ(お一人様)</p>
                  <div class="campaign__card-price-wrap">
                    <p class="campaign__card-list-price">¥20,000</p>
                    <p class="campaign__card-price">¥16,000</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="campaign__button-wrap">
          <a href="campaign.html" class="button"><p>View&nbsp;more</p></a>
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
              <p class="about-us__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              <div class="about-us__button-wrapper">
                <a href="about-us.html" class="button"><p>View&nbsp;more</p></a>
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
              <a href="information.html" class="button"><p>View&nbsp;more</p></a>
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
          <li class="cards__card card">
            <a href="#" class="card__list">
              <figure class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog01.jpg" alt="サンゴの写真">
              </figure>
              <div class="card__body">
                <time class="card__date" datetime="2023-11-17">2023.11/17</time>
                <h3 class="card__title">ライセンス取得</h3>
                <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="cards__card card">
            <a href="#" class="card__list">
              <figure class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog02.jpg" alt="泳ぐウミガメ">
              </figure>
              <div class="card__body">
                <time class="card__date" datetime="2023-11-17">2023.11/17</time>
                <h3 class="card__title">ウミガメと泳ぐ</h3>
                <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="cards__card card">
            <a href="#" class="card__list">
              <figure class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog03.jpg" alt="顔を覗かせるカクレクマノミ">
              </figure>
              <div class="card__body">
                <time class="card__date" datetime="2023-11-17">2023.11/17</time>
                <h3 class="card__title">カクレクマノミ</h3>
                <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="blog__button-wrap">
          <a href="blog.html" class="button"><p>View&nbsp;more</p></a>
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
          <ul class="voice__cards-sort cards-sort">
            <li class="cards-sort__card card-sort">
              <div class="card-sort__content">
                <div class="card-sort__topic">
                  <div class="card-sort__info">
                    <p class="card-sort__gender">20代(女性)</p>
                    <span class="card-sort__tag">ライセンス講習</span>
                  </div>
                  <h3 class="card-sort__sub-title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="card-sort__img-wrap color-box">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice01.jpg" alt="帽子を被った女性">
                </div>
              </div>
              <p class="card-sort__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
            </li>
            <li class="cards-sort__card card-sort">
              <div class="card-sort__content">
                <div class="card-sort__topic">
                  <div class="card-sort__info">
                    <p class="card-sort__gender">30代(男性)</p>
                    <span class="card-sort__tag">ファンダイビング</span>
                  </div>
                  <h3 class="card-sort__sub-title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="card-sort__img-wrap color-box">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice02.jpg" alt="親指を立てる男性">
                </div>
              </div>
              <p class="card-sort__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
            </li>
          </ul>
        </div>
        <div class="voice__button-wrap">
          <a href="voice.html" class="button"><p>View&nbsp;more</p></a>
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
              <div class="price__items">
                <h3 class="price__item">ライセンス講習</h3>
                <div class="price__course">
                  <dt class="price__name">オープンウォーターダイバーコース</dt>
                  <dd class="price__cost">¥50,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">アドバンスドオープンウォーターコース</dt>
                  <dd class="price__cost">¥60,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">レスキュー＋EFRコース</dt>
                  <dd class="price__cost">¥70,000</dd>
                </div>
              </div>
              <div class="price__items">
                <h3 class="price__item">体験ダイビング</h3>
                <div class="price__course">
                  <dt class="price__name">ビーチ体験ダイビング(半日)</dt>
                  <dd class="price__cost">¥7,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">ビーチ体験ダイビング(1日)</dt>
                  <dd class="price__cost">¥14,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">ボート体験ダイビング(半日)</dt>
                  <dd class="price__cost">¥10,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">ボート体験ダイビング(1日)</dt>
                  <dd class="price__cost">¥18,000</dd>
                </div>
              </div>
              <div class="price__items">
                <h3 class="price__item">ファンダイビング</h3>
                <div class="price__course">
                  <dt class="price__name">ビーチダイビング(2ダイブ)</dt>
                  <dd class="price__cost">¥14,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">ボートダイビング(2ダイブ)</dt>
                  <dd class="price__cost">¥18,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="price__cost">¥24,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">ナイトダイビング(1ダイブ)</dt>
                  <dd class="price__cost">¥10,000</dd>
                </div>
              </div>
              <div class="price__items">
                <h3 class="price__item">スペシャルダイビング</h3>
                <div class="price__course">
                  <dt class="price__name">貸切ダイビング(2ダイブ)</dt>
                  <dd class="price__cost">¥24,000</dd>
                </div>
                <div class="price__course">
                  <dt class="price__name">1日ダイビング(3ダイブ)</dt>
                  <dd class="price__cost">¥32,000</dd>
                </div>
              </div>
            </dl>
          </div>
        </div>
        <div class="price__button-wrap">
          <a href="price.html" class="button"><p>View&nbsp;more</p></a>
        </div>
        <div class="price__under-img-wrap u-desktop">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fish-green.png" alt="魚たちのイラスト">
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