<?php get_header(); ?>
<?php wp_head(); ?>
  <main>
    <!--fv-->
    <div class="fv__lower fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h1 class="fv-lower__title fv-lower__title--large">faq</h1>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq-fvsp.webp" width="750" height="920" alt="シーサー">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <!-- faq -->
    <section class="faq bg-fish top-lower">
      <div class="faq__inner">
        <div class="faq__accordions accordions js-accordion">
          <?php $faq = SCF::get('faq_list');
            foreach($faq as $val): ?>
            <div class="accordions__accordion accordion">
              <div class="accordion__title js-accordion-title">
                <p class="accordion__title-text"><?php echo esc_html($val['add_question']); ?></p>
              </div>
              <div class="accordion__content js-accordion-content">
                <p class="accordion__text"><?php echo esc_html($val['add_answer']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
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