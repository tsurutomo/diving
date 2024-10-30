<?php get_header(); ?>
  <main>
  <!--fv-->
  <div class="fv-lower">
    <div class="fv-lower__inner">
      <div class="fv-lower__tittle-wrap">
        <h1 class="fv-lower__title">Information</h1>
      </div>
      <div class="fv-lower__img-wrap">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/info-fv.webp" media="(min-width: 768px)"/>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-fvsp.webp" width="750" height="920" alt="海でスキューバダイビングをする人">
        </picture>
      </div>
    </div>
  </div>
  <!-- パンくずリスト-->
  <?php get_template_part('include/breadcrumb') ?>

  <!--information -->
  <section class="info-lower bg-fish top-lower">
    <div class="info-lower__inner inner">
      <!--タブメニュー -->
      <div class="info-lower__tab tab">
        <ul class="tab__menu">
          <li class="tab__menu-item js-tab-menu is-active" data-number="tab01"><span class="tab__menu-icon tab__menu-icon--whale"></span><span>ライセンス<br class="u-mobile">講習</span></li>
          <li class="tab__menu-item js-tab-menu" data-number="tab02"><span class="tab__menu-icon tab__menu-icon--shark"></span>ファン<br class="u-mobile">ダイビング</li>
          <li class="tab__menu-item js-tab-menu" data-number="tab03"><span class="tab__menu-icon tab__menu-icon--fish"></span>体験<br class="u-mobile">ダイビング</li>
        </ul>
      </div>
      <ul class="tab__content">
        <li id="tab01" class="tab__content-item js-tab-content is-active">
          <div class="tab__content-box">
            <h2 class="tab__content-title">ライセンス講習</h2>
            <p class="tab__content-text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&#33スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&#33</p>
          </div>
          <div class="tab__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info01.webp" width="297" height="477" alt="海でダイビングをする人たち">
          </div>
        </li>
        <li id="tab02" class="tab__content-item js-tab-content">
          <div class="tab__content-box">
            <h2 class="tab__content-title">ファンダイビング</h2>
            <p class="tab__content-text">ブランクダイバー、ライセンスを取り立ての方も安心&#33沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33</p>
          </div>
          <div class="tab__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info02.webp" width="297" height="477" alt="海で泳ぐ魚たち">
          </div>
        </li>
        <li id="tab03" class="tab__content-item js-tab-content">
          <div class="tab__content-box">
            <h2 class="tab__content-title">体験ダイビング</h2>
            <p class="tab__content-text">ブランクダイバー、ライセンスを取り立ての方も安心&#33沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33</p>
          </div>
          <div class="tab__content-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info03.webp" width="297" height="477" alt="泳ぐ縞模様の魚">
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- contact -->
  <?php get_template_part('include/contact') ?>
  </main>
  <?php get_footer(); ?>