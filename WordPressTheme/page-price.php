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
          <?php $license = SCF::get('license_course');
          if(!empty($license)):?>
          <div class="charts__chart chart" id="add_first">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ライセンス講習</span></h2>
              <table class="chart__list">
                <tbody>
                  <?php foreach($license as $fields):
                    $name = $fields['license_name'];
                    $price = $fields['license_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($name); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($price))); ?></td>
                  </tr>
                  <?php
                    endif;
                  endforeach;
                  ?>
                </tbody>
              </table>
          </div>
          <?php
          endif;
          ?>
          <?php $license = SCF::get('experience_course');
          if(!empty($license)):?>
          <div class="charts__chart chart" id="experience">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>体験ダイビング</span></h2>
              <table class="chart__list">
                <tbody>
                  <?php foreach($license as $fields):
                    $name = $fields['course_name'];
                    $price = $fields['course_price'];
                    if(!empty($name) && !empty($price)):
                  ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($name); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($price))); ?></td>
                  </tr>
                  <?php
                    endif;
                  endforeach;
                  ?>
            </tbody>
          </table>
          </div>
          <?php
          endif;
          ?>
          <?php $license = SCF::get('fun_course');
          if(!empty($license)):?>
          <div class="charts__chart chart" id="fun">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>ファンダイビング</span></h2>
              <table class="chart__list">
                <tbody>
                  <?php foreach($license as $fields):
                      $name = $fields['fun_name'];
                      $price = $fields['fun_price'];
                      if(!empty($name) && !empty($price)):
                  ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($name); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($price))); ?></td>
                  </tr>
                  <?php
                    endif;
                  endforeach;
                  ?>
              </tbody>
            </table>
          </div>
          <?php
          endif;
          ?>
          <?php $license = SCF::get('special_course');
          if(!empty($license)):?>
          <div class="charts__chart chart" id="special">
            <h2 class="chart__title"><span class="chart__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/whale-w.webp" alt="白クジラ"></span><span>スペシャルダイビング</span></h2>
              <table class="chart__list">
                <tbody>
                  <?php foreach($license as $fields):
                      $name = $fields['special_name'];
                      $price = $fields['special_price'];
                      if(!empty($name) && !empty($price)):
                  ?>
                  <tr class="chart__item">
                    <td class="chart__name"><?php echo esc_html($name); ?></td>
                    <td class="chart__price">¥<?php echo esc_html(number_format(floatval($price))); ?></td>
                  </tr>
                  <?php
                    endif;
                  endforeach;
                  ?>
              </tbody>
            </table>
          </div>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>