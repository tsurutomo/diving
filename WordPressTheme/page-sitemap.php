<?php get_header(); ?>
<?php wp_head(); ?>
  <main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Site&nbsp;MAP</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?><?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fvsp.webp" width="750" height="920" alt="サンゴの近くで泳ぐオレンジ色の魚たち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <!-- サイトマップ -->
     <div class="site-map bg-fish top-lower">
      <div class="site-map__inner inner">
        <div class="site-map__nav site-map-nav">
          <div class="site-map-nav__left">
            <div class="site-map-nav__box">
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon site-map-nav__item--top"><a href="campaign.html">キャンペーン</a></li>
                <li class="site-map-nav__item"><a href="campaign.html#canpaign-license">ライセンス取得</a></li>
                <li class="site-map-nav__item"><a href="campaign.html#campaign-private">貸切体験ダイビング</a></li>
                <li class="site-map-nav__item"><a href="campaign.html#campaign-night">ナイトダイビング</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon"><a href="about-us.html">私たちについて</a></li>
              </ul>
            </div>
            <div class="site-map-nav__box">
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon site-map-nav--mg"><a href="information.html">ダイビング情報</a></li>
                <li class="site-map-nav__item"><a href="information.html#tab01" class="js-tab-link">ライセンス講習</a></li>
                <li class="site-map-nav__item"><a href="information.html#tab02" class="js-tab-link">ファンダイビング</a></li>
                <li class="site-map-nav__item"><a href="information.html#tab03" class="js-tab-link">体験ダイビング</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-mapr-nav__item site-map-nav__item--icon"><a href="blog.html">ブログ</a></li>
              </ul>
            </div>
          </div>
          <div class="site-map-nav__right">
            <div class="site-map-nav__box">
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item footer-nav__item--icon footer-nav__item--top"><a href="voice.html" class="footer-nav__link">お客様の声</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon"><a href="price.html" class="footer-nav__link">料金一覧</a></li>
                <li class="site-map-nav__item"><a href="price.html#license">ライセンス講習</a></li>
                <li class="site-map-nav__item"><a href="price.html#experience">体験ダイビング</a></li>
                <li class="site-map-nav__item"><a href="price.html#fun">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="site-map-nav__box">
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon site-map-nav--mg"><a href="faq.html">よくある質問</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon"><a href="privacy.html">プライバシー<br class="u-mobile">ポリシー</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon"><a href="terms.html">利用規約</a></li>
              </ul>
              <ul class="site-map-nav__items">
                <li class="site-map-nav__item site-map-nav__item--icon"><a href="contact.html">お問い合わせ</a></li>
              </ul>
            </div>
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