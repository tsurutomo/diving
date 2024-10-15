<?php get_header(); ?>
<?php wp_head(); ?>
<main>
<!--fv-->
<div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Terms&nbsp;of&nbsp;Service</h2>
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
    
    <div class="terms bg-fish top-lower">
      <div class="terms__inner">
        <h1 class="terms__title">利用規約</h1>
        <?php 
        $term_1 = get_field('term_1');
        $term_2 = get_field('term_2');
        $term_3 = get_field('term_3');
        $term_4 = get_field('term_4');
        $term_5 = get_field('term_5');
        $term_6 = get_field('term_6');
        $term_7 = get_field('term_7');
        $term_8 = get_field('term_8');
        ?>
        <div class="terms__content">
          <p>以下は、Webサイトで使用する一般的な利用規約の例です。</p>
          <ol>
            <li><?php echo esc_html($term_1); ?></li>
            <li><?php echo esc_html($term_2); ?></li>
            <li><?php echo esc_html($term_3); ?></li>
          </ol>
          <p>・当社のサービスに対して不正なアクセスをすること ・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること ・当社のサービスを商業目的で利用すること ・当社のサービスに関する知的財産権を侵害する行為をすること ・その他、法律や公序良俗に反する行為をすること</p>
          <ol>
            <li><?php echo esc_html($term_4); ?></li>
            <li><?php echo esc_html($term_5); ?></li>
            <li><?php echo esc_html($term_6); ?></li>
            <li><?php echo esc_html($term_7); ?></li>
            <li><?php echo esc_html($term_8); ?></li>
          </ol>
          <p>以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
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