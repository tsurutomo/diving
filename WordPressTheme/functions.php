<?php
function my_theme_enqueue_scripts() {
  // Google Fontsのプリコネクト
  wp_enqueue_style(
      'google-fonts-preconnect1',
      'https://fonts.googleapis.com',
      array(),
      null
  );
  wp_enqueue_style(
      'google-fonts-preconnect2',
      'https://fonts.gstatic.com',
      array(),
      null,
      false,
      array('crossorigin' => 'anonymous')
  );
  
  // Google Fontsのスタイルシート
  wp_enqueue_style(
      'google-fonts',
      'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap',
      array(),
      null
  );

  // テーマのスタイルシート
  wp_enqueue_style(
      'theme-style',
      get_theme_file_uri('/assets/css/style.css'),
      array(),
      filemtime(get_theme_file_path('/assets/css/style.css')) // キャッシュバスティング用
  );

  // SwiperのCSS
  wp_enqueue_style(
      'swiper-style',
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
      array(),
      null
  );

  // jQuery（defer属性付きで読み込み）
  wp_enqueue_script(
      'jquery',
      'https://code.jquery.com/jquery-3.6.0.js',
      array(),
      null,
      true // trueはフッターで読み込みを示す
  );

  // jQuery.inviewプラグイン
  wp_enqueue_script(
      'jquery-inview',
      get_theme_file_uri('/assets/js/jquery.inview.min.js'),
      array('jquery'), // jQueryに依存
      filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
      true
  );

  // SwiperのJavaScript
  wp_enqueue_script(
      'swiper-script',
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
      array(),
      null,
      true
  );

  // テーマのメインJavaScript
  wp_enqueue_script(
      'theme-script',
      get_theme_file_uri('/assets/js/script.js'),
      array('jquery'), // jQueryに依存
      filemtime(get_theme_file_path('/assets/js/script.js')),
      true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


//voiceページの1ページあたりの表示件数
function set_voice_archive_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'set_voice_archive_posts_per_page');