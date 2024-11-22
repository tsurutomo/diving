<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header layout-header js-header">
    <div class="header__inner">
      <?php if ( is_front_page() ) : ?>
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url('')); ?>" class="header__logoーlink"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo.svg" alt="CodeUps"></a>
        </h1>
      <?php else : ?>
        <p class="header__logo">
          <a href="<?php echo esc_url(home_url('')); ?>" class="header__logoーlink"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo.svg" alt="CodeUps"></a>
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
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/campaign')); ?>"  class="sp-nav__link">キャンペーン</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/license/')); ?>" class="sp-nav__link">ライセンス取得</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/fun_diving/')); ?>" class="sp-nav__link">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/experience/')); ?>" class="sp-nav__link">体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/experience/')); ?>" class="sp-nav__link">スペシャルダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/about-us')); ?>" class="sp-nav__link">私たちについて</a></li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--left">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/information')); ?>" class="sp-nav__link">ダイビング情報</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/information#tab01')); ?>" class="sp-nav__link js-tab-link">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/information#tab02')); ?>" class="sp-nav__link js-tab-link">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/information#tab03')); ?>" class="sp-nav__link js-tab-link">体験ダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="sp-nav__link">ブログ</a></li>
            </ul>
            </nav>
            <nav class="sp-nav__right">
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/voice')); ?>" class="sp-nav__link">お客様の声</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/price')); ?>" class="sp-nav__link">料金一覧</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/price#license')); ?>" class="sp-nav__link">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/price#experience')); ?>" class="sp-nav__link">体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/price#fun')); ?>" class="sp-nav__link">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/price#special')); ?>" class="sp-nav__link">スペシャルダイビング</a></li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/faq')); ?>" class="sp-nav__link">よくある質問</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/privacypolicy')); ?>" class="sp-nav__link">プライバシー<br>ポリシー</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="sp-nav__link">利用規約</a></li>
              <li class="sp-nav__item sp-nav__item--icon"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="sp-nav__link">お問い合わせ</a></li>
            </ul>
        </nav>
      </div>
      </div>
      <!-- pc-nav -->
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/campaign')); ?>" class="pc-nav__link">Campaign<span class="color-white">キャンペーン</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/about-us')); ?>" class="pc-nav__link">About&nbsp;us<span class="color-white">私たちについて</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/information')); ?>" class="pc-nav__link">Information<span class="color-white">ダイビング情報</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="pc-nav__link">Blog<span class="color-white">ブログ</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/voice')); ?>" class="pc-nav__link">Voice<span class="color-white">お客様の声</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/price')); ?>" class="pc-nav__link">Price<span class="color-white">料金一覧</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/faq')); ?>" class="pc-nav__link">FAQ<span class="color-white">よくある質問</span></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="pc-nav__link">Contact<span class="color-white">お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>