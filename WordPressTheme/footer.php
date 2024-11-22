<?php if (!is_404() && !is_page(array('contact', 'thanks'))) : ?>
    <section class="contact bg-fish-right top-contact">
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__access">
            <h3 class="contact__site-logo"><a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-green.svg" alt="コードアップス"></a></h3>
            <div class="contact__access-box">
              <address class="contact__access-list">
                <p class="contact__access-text">沖縄県那覇市1-1</p>
                <p class="contact__access-text">TEL:0120-000-0000</p>
                <p class="contact__access-text">営業時間:8:30-19:00</p>
                <p class="contact__access-text">定休日:毎週火曜日</p>
              </address>
              <div class="contact__access-map-wrap">
                <div class="contact__access-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98531228024!2d127.6434162993603!3d26.210936413035235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1707158222814!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="沖縄の地図"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__guidance">
            <div class="contact__title title">
              <p class="title__main-title title__main-title--big">Contact</p>
              <h2 class="title__sub-title title__sub-title--mt">お問い合わせ</h2>
            </div>
            <p class="contact__text">ご予約・お問い合わせはコチラ</p>
            <div class="contact__button-wrap">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button"><p>Contact&nbsp;us</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  </main>
    <footer class="<?php echo is_404()? 'footer' : 'footer top-footer'; ?>">
    <div class="footer__inner inner">
      <div class="footer__heading">
        <div class="footer__site-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri('/assets/images/CodeUpslogo-bg.svg'); ?>" alt="CodeUps"></a>
        </div>
        <div class="footer__sns">
          <div class="footer__img-wrap">
          <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri('/assets/images/facebook-logo.png'); ?>" alt="フェイスブック"></a>
          </div>
          <div class="footer__img-wrap">
            <a href="https://www.instagram.com/sem/campaign/emailsignup/?campaign_id=13534424858&extra_1=s%7Cc%7C589806353222%7Cp%7Cinstagram%7C&placement=&creative=589806353222&keyword=instagram&partner_id=googlesem&extra_2=campaignid%3D13534424858%26adgroupid%3D135268360440%26matchtype%3Dp%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-26729187315%26loc_physical_ms%3D1009628%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gad_source=1&gclid=CjwKCAjwyfe4BhAWEiwAkIL8sMlCAXsLC6JUYS6yBuhMSi-OdWsVKKxFdXVYJgvAXZMV77dPj9G44BoCYFEQAvD_BwE" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri('/assets/images/instagram-logo.png'); ?>" alt="インスタグラム"></a>
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
