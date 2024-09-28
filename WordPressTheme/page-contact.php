<?php get_header(); ?>
<?php wp_head(); ?>
  <main>
    <!--fv-->
    <div class="fv-lower">
      <div class="fv-lower__inner">
        <div class="fv-lower__tittle-wrap">
          <h2 class="fv-lower__title">Contact</h2>
        </div>
        <div class="fv-lower__img-wrap">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact-fv.webp" media="(min-width: 768px)"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-fvsp.webp" width="750" height="920" alt="波飛沫ち">
          </picture>
        </div>
      </div>
    </div>
    <!-- パンくずリスト-->
    <?php get_template_part('include/breadcrumb') ?>

    <section class="contact-lower bg-fish top-lower">
      <div class="contact-lower__inner">
        <form action="" class="contact-lower__form form">
          <ul class="form__list">
            <li class="form__item">
              <div class="form__title">
                <label for="name" class="form__label">お名前</label>
                <span class="required">必須</span>
              </div>
              <input type="text" class="form__input" id="name"  placeholder="沖縄&nbsp;太郎">
            </li>
            <li class="form__item">
              <div class="form__title">
                <label for="email" class="form__label">メールアドレス</label>
                <span class="required">必須</span>
              </div>
              <input type="email" class="form__input" id="email"  placeholder="aaa000@ggmail.com">
            </li>
            <li class="form__item">
              <div class="form__title">
                <label for="tel" class="form__label">電話番号</label>
                <span class="required">必須</span>
              </div>
              <input type="tel" class="form__input" id="tel"  placeholder="000-0000-0000">
            </li>
            <li class="form__item">
              <div class="form__title">
                <label for="tel" class="form__label">お問い合わせ項目</label>
                <span class="required">必須</span>
              </div>
              <div class="form__checkbox">
                <label><input type="checkbox" name="plan" value="ダイビング講習について"><span>ダイビング講習について</span></label>
                <label><input type="checkbox" name="plan" value="ファンデイビングについて"><span>ファンデイビングについて</span></label>
                <label><input type="checkbox" name="plan" value="体験ダイビングについて"><span>体験ダイビングについて</span></label>
              </div>
            </li>
            <li class="form__item">
              <div class="form__title">
                <label for="tel" class="form__label">キャンペーン</label>
                <span class="required">必須</span>
              </div>
              <div class="form__select">
                <select id="category" name="category" class="form__category" required>
                  <option value="">キャンペーン内容を選択</option>
                  <option value="ライセンス取得">ライセンス取得</option>
                  <option value="ライセンス講習">ライセンス講習</option>
                  <option value="体験ダイビング">体験ダイビング</option>
                  <option value="ファンダイビング">ファンダイビング</option>
                </select>
              </div>
            </li>
            <li class="form__item">
              <div class="form__title">
                <label for="message">お問い合わせ内容</label>
                <span class="required">必須</span>
              </div>
              <textarea name="" id="message" cols="30" rows="10" class="form__textarea"></textarea>
            </li>
          </ul>
            <div class="form__privacy">
              <label>
                <input type="checkbox" name="privacy-policy" value="agree">
                <span>個人情報の取り扱いについて同意のうえ送信します。</span>
              </label>
            </div>
            <div class="form__submit form-submit">
              <button type="submit" class="button"><p>send</p></button>
            </div>
        </form>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>