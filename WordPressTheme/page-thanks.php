<?php get_header(); ?>
<?php wp_head(); ?>
</head>
<body>
  <header class="header layout-header js-header">
    <div class="header__inner">
      <p class="header__logo">
        <a href="index.html" class="header__logoーlink"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo.svg" alt="CodeUps"></a>
      </p>
      <!-- hamburger -->
      <div class="header__drawer hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- drawer-menu-->
      <div class="header__sp-nav sp-nav js-drawer-menu u-mobile">
        <div class="sp-nav__list">
          <nav class="sp-nav__left">
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="campaign.html"  class="sp-nav__link">キャンペーン</a></li>
              <li class="sp-nav__item"><a href="campaign.html#canpaign-license" class="sp-nav__link">ライセンス取得</a></li>
              <li class="sp-nav__item"><a href="campaign.html#campaign-private" class="sp-nav__link">貸切体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="campaign.html#campaign-night" class="sp-nav__link">ナイトダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="about-us.html" class="sp-nav__link">私たちについて</a></li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--left">
              <li class="sp-nav__item sp-nav__item--icon"><a href="information.html" class="sp-nav__link">ダイビング情報</a></li>
              <li class="sp-nav__item"><a href="information.html#tab01" class="sp-nav__link js-tab-link">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="information.html#tab02" class="sp-nav__link js-tab-link">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="information.html#tab03" class="sp-nav__link js-tab-link">体験ダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="blog.html" class="sp-nav__link">ブログ</a></li>
            </ul>
            </nav>
            <nav class="sp-nav__right">
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="voice.html" class="sp-nav__link">お客様の声</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="price.html" class="sp-nav__link">料金一覧</a></li>
              <li class="sp-nav__item"><a href="price.html#license" class="sp-nav__link">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="price.html#experience" class="sp-nav__link">体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="price.html#fun" class="sp-nav__link">ファンダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="faq.html" class="sp-nav__link">よくある質問</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="privacy.html" class="sp-nav__link">プライバシー<br>ポリシー</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="terms.html" class="sp-nav__link">利用規約</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="contact-lower.html" class="sp-nav__link">お問い合わせ</a></li>
            </ul>
        </nav>
      </div>
      </div>
      <!-- pc-nav -->
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="campaign.html" class="pc-nav__link">Campaign<span class="color-white">キャンペーン</span></a></li>
          <li class="pc-nav__item"><a href="about-us.html" class="pc-nav__link">About&nbsp;us<span class="color-white">私たちについて</span></a></li>
          <li class="pc-nav__item"><a href="information.html" class="pc-nav__link">Information<span class="color-white">ダイビング情報</span></a></li>
          <li class="pc-nav__item"><a href="blog.html" class="pc-nav__link">Blog<span class="color-white">ブログ</span></a></li>
          <li class="pc-nav__item"><a href="voice.html" class="pc-nav__link">Voice<span class="color-white">お客様の声</span></a></li>
          <li class="pc-nav__item"><a href="price.html" class="pc-nav__link">Price<span class="color-white">料金一覧</span></a></li>
          <li class="pc-nav__item"><a href="faq.html" class="pc-nav__link">FAQ<span class="color-white">よくある質問</span></a></li>
          <li class="pc-nav__item"><a href="contact-lower.html" class="pc-nav__link">Contact<span class="color-white">お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h1 class="fv-lower__title">Contact</h1>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-fvsp.webp" width="750" height="920" alt="">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <!-- サンクスページ -->
    <section class="thanks bg-fish top-lower">
      <div class="thanks__inner inner">
        <h2 class="thanks__title">お問い合わせ内容を送信完了しました。</h2>
        <div class="thanks__text-box">
          <p class="thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。</p>
          <p class="thanks__text">お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。</p>
          <p class="thanks__text">また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>