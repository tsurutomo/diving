<?php get_header(); ?>
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
          <div class="charts__chart chart" id="add_first">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ライセンス講習</span></h2>
            <table class="chart__list">
              <tbody>
              <?php $license = SCF::get('license_course');
                foreach($license as $val): ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($val['license_name']); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($val['license_price']))); ?></td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="charts__chart chart" id="experience">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>体験ダイビング</span></h2>
            <table class="chart__list">
            <tbody>
            <?php $license = SCF::get('experience_course');
                foreach($license as $val): ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($val['course_name']); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($val['course_price']))); ?></td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          </div>
          <div class="charts__chart chart" id="fun">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ファンダイビング</span></h2>
            <table class="chart__list">
              <tbody>
              <?php $license = SCF::get('fun_course');
                foreach($license as $val): ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($val['fun_name']); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($val['fun_price']))); ?></td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="charts__chart chart" id="special">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>スペシャルダイビング</span></h2>
            <table class="chart__list">
              <tbody>
              <?php $license = SCF::get('special_course');
                foreach($license as $val): ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($val['special_name']); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($val['special_price']))); ?></td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>