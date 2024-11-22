<?php get_header(); ?>
<main>
    <div class="error">
    <?php get_template_part('include/breadcrumb') ?>
      <div class="error__inner inner">
        <div class="error__container">
          <h1 class="error__title">404</h1>
          <p class="error__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
          <div class="error__button-wrap">
            <a href="<?php echo esc_url(home_url('')); ?>" class="button button--reverse"><p>Page&nbsp;TOP</p></a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>