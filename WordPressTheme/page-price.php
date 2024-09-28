<?php get_header(); ?>
<?php wp_head(); ?>
  <main>
  <!--fv-->
  <div class="fv-lower">
    <div class="fv-lower__inner">
      <div class="fv-lower__tittle-wrap">
        <h1 class="fv-lower__title">Price</h1>
      </div>
      <div class="fv-lower__img-wrap">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price-fv.webp" media="(min-width: 768px)"/>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-fvsp.webp" width="750" height="920" alt="海面から顔を出すダイバー">
        </picture>
      </div>
    </div>
  </div>
  <!-- パンくずリスト-->
  <?php get_template_part('include/breadcrumb') ?>

  <section class="price-lower bg-fish top-price-lower">
    <div class="price-lower__inner">
      <div class="price-lower__container">
        <div class="price-lower__charts charts">
          <div class="charts__chart chart" id="license">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ライセンス講習</span></h2>
            <table class="chart__list">
              <tbody>
                <tr class="chart__item">
                  <td class="chart__name">オープンウォーター<br class="u-mobile">ダイバーコース</td>
                  <td class="chart__price">¥50,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
                  <td class="chart__price">¥60,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">レスキュー＋EFRコース</td>
                  <td class="chart__price">¥70,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="charts__chart chart" id="experience">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>体験ダイビング</span></h2>
            <table class="chart__list">
              <tbody>
                <tr class="chart__item">
                  <td class="chart__name">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
                  <td class="chart__price">¥7,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
                  <td class="chart__price">¥14,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">ボート体験ダイビング<br class="u-mobile">(半日)</td>
                  <td class="chart__price">¥10,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">ボート体験ダイビング<br class="u-mobile">(1日)</td>
                  <td class="chart__price">¥18,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="charts__chart chart" id="fun">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ファンダイビング</span></h2>
            <table class="chart__list">
              <tbody>
                <tr class="chart__item">
                  <td class="chart__name">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="chart__price">¥14,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="chart__price">¥18,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="chart__price">¥24,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
                  <td class="chart__price">¥10,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="charts__chart chart" id="special">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>スペシャルダイビング</span></h2>
            <table class="chart__list">
              <tbody>
                <tr class="chart__item">
                  <td class="chart__name">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
                  <td class="chart__price">¥24,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
                  <td class="chart__price">¥32,000</td>
                </tr>
                <tr class="chart__item">
                  <td class="chart__name">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
                  <td class="chart__price">¥14,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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