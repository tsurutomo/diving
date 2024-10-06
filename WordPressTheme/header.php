<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php if (is_404()) : ?>
      <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header layout-header js-header">
    <div class="header__inner">
      <?php if ( is_front_page() ) : ?>
        <h1 class="header__logo">
          <a href="#" class="header__logoーlink"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo.svg" alt="CodeUps"></a>
        </h1>
      <?php else : ?>
        <p class="header__logo">
          <a href="#" class="header__logoーlink"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo.svg" alt="CodeUps"></a>
        </p>
      <?php endif; ?>
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