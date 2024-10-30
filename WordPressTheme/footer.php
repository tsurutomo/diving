<?php if ( is_404() ) : ?>
    <footer class="footer">
    <?php else : ?>
      <footer class="footer top-footer">
    <?php endif; ?>
    <div class="footer__inner inner">
      <div class="footer__heading">
        <div class="footer__site-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUpslogo-bg.svg" alt="CodeUps"></a>
        </div>
        <div class="footer__sns">
          <div class="footer__img-wrap">
          <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/facebook-logo.png" alt="フェイスブック"></a>
          </div>
          <div class="footer__img-wrap">
            <a href="https://www.instagram.com/sem/campaign/emailsignup/?campaign_id=13534424858&extra_1=s%7Cc%7C589806353222%7Cp%7Cinstagram%7C&placement=&creative=589806353222&keyword=instagram&partner_id=googlesem&extra_2=campaignid%3D13534424858%26adgroupid%3D135268360440%26matchtype%3Dp%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-26729187315%26loc_physical_ms%3D1009628%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gad_source=1&gclid=CjwKCAjwyfe4BhAWEiwAkIL8sMlCAXsLC6JUYS6yBuhMSi-OdWsVKKxFdXVYJgvAXZMV77dPj9G44BoCYFEQAvD_BwE" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/instagram-logo.png" alt="インスタグラム"></a>
          </div>
        </div>
      </div>
        <div class="footer__nav footer-nav">
          <div class="footer-nav__left">
            <div class="footer-nav__box">
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon footer-nav__item--top"><a href="<?php echo esc_url(home_url('/campaign')); ?>" class="footer-nav__link">キャンペーン</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/license/')); ?>" class="footer-nav__link">ライセンス取得</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/fun_diving/')); ?>" class="footer-nav__link">ファンダイビング</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/experience/')); ?>" class="footer-nav__link">体験ダイビング</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/campaign_category/special/')); ?>" class="footer-nav__link">スペシャルダイビング</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/about-us')); ?>" class="footer-nav__link">私たちについて</a></li>
              </ul>
            </div>
            <div class="footer-nav__box">
              <ul class="footer-nav__items footer-nav__items--left">
                <li class="footer-nav__item footer-nav__item--icon footer-nav--mg"><a href="<?php echo esc_url(home_url('/information')); ?>" class="footer-nav__link">ダイビング情報</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/information#tab01')); ?>" class="footer-nav__link js-tab-link">ライセンス講習</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/information#tab02')); ?>" class="footer-nav__link js-tab-link">ファンダイビング</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/information#tab03')); ?>" class="footer-nav__link js-tab-link">体験ダイビング</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="footer-nav__link">ブログ</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-nav__right">
            <div class="footer-nav__box">
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon footer-nav__item--top"><a href="<?php echo esc_url(home_url('/voice')); ?>" class="footer-nav__link">お客様の声</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/price')); ?>" class="footer-nav__link">料金一覧</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/price#license')); ?>" class="footer-nav__link">ライセンス講習</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/price#experience')); ?>" class="footer-nav__link">体験ダイビング</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/price#fun')); ?>" class="footer-nav__link">ファンダイビング</a></li>
                <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/price#special')); ?>" class="footer-nav__link">スペシャルダイビング</a></li>
              </ul>
            </div>
            <div class="footer-nav__box">
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon footer-nav--mg"><a href="<?php echo esc_url(home_url('/faq')); ?>" class="footer-nav__link">よくある質問</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/privacypolicy')); ?>" class="footer-nav__link">プライバシー<br class="u-mobile">ポリシー</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="footer-nav__link">利用規約</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/sitemap')); ?>" class="footer-nav__link">サイトマップ</a></li>
              </ul>
              <ul class="footer-nav__items">
                <li class="footer-nav__item footer-nav__item--icon"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer-nav__link">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="page-top">
          <a href="#"></a>
        </div>
      <small class="footer__copy-right">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;<?php echo wp_date("Y");?>&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
