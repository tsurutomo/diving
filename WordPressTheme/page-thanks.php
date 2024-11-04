<?php get_header(); ?>
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
  <?php get_footer(); ?>