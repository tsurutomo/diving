<?php get_header(); ?>
<?php wp_head(); ?>
<main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Privacy&nbsp;Policy</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/many-fish-fvsp.webp" width="750" height="920" alt="サンゴの近くで泳ぐオレンジ色の魚たち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <section class="privacy bg-fish top-lower">
      <div class="privacy__inner">
        <h1 class="privacy__title">プライバシーポリシー</h1>
        <?php 
        $privacy_1 = get_field('privacy_item_1') ;
        $privacy_2 = get_field('privacy_item_2') ;
        $privacy_3 = get_field('privacy_item_3') ;
        $privacy_4 = get_field('privacy_item_4') ;
        $privacy_5 = get_field('privacy_item_5') ;
        $privacy_6 = get_field('privacy_item_6') ;
        $privacy_7 = get_field('privacy_item_7') ;
        $privacy_8 = get_field('privacy_item_8') ;
        ?>
        <div class="privacy__content">
          <p>以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
          <ol>
            <li><?php echo esc_html($privacy_1); ?></li>
            <li><?php echo esc_html($privacy_2); ?></li>
          </ol>
          <p>また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。</p>
          <ol>
            <li><?php echo esc_html($privacy_3); ?></li>
          </ol>
          <p>・お客様からのお問い合わせやサポートの提供 ・当社のサービスや製品の提供 ・当社のサイトの改善や新しいサービスの開発 ・法律や規制に基づく義務の履行</p>
          <ol>
            <li><?php echo esc_html($privacy_4); ?></li>
          </ol>
          <p>・お客様の同意がある場合 ・法律や規制に基づく場合 ・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合</p>
          <ol>
            <li><?php echo esc_html($privacy_5); ?></li>
            <li><?php echo esc_html($privacy_6); ?></li>
            <li><?php echo esc_html($privacy_7); ?></li>
            <li><?php echo esc_html($privacy_8); ?></li>
          </ol>
          <p>以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
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