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


//管理画面の『投稿』を『ブログ』に
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
    add_action( 'init', 'Change_objectlabel' );
    add_action( 'admin_menu', 'Change_menulabel' );


//campaignページの1ページあたりの表示件数
function set_campaign_archive_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('campaign')) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'set_campaign_archive_posts_per_page');

//voiceページの1ページあたりの表示件数
function set_voice_archive_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('voice')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'set_voice_archive_posts_per_page');

//ページネーション
// WP-PageNaviのHTMLをカスタマイズする
function custom_pagenavi_html($html) {
    // クラスの置換
    $html = str_replace('<div class=\'wp-pagenavi\'>', '<ul class="pagination__list">', $html);
    $html = str_replace('</div>', '</ul>', $html);
    $html = str_replace('<a', '<li class="pagination__item"><a', $html);
    $html = str_replace('</a>', '</a></li>', $html);
    $html = str_replace('<span class=\'pages\'', '<li class="pagination__item is-active"><span', $html);
    $html = str_replace('</span>', '</span></li>', $html);

    // 前へ/次へボタンのカスタマイズ
    $html = str_replace('<a class="previouspostslink"', '<a class="pagination__prev"', $html);
    $html = str_replace('<a class="nextpostslink"', '<a class="pagination__next"', $html);

    return $html;
}
add_filter('wp_pagenavi', 'custom_pagenavi_html');

// 閲覧数セット
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==""){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// 閲覧数取得
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);

	if($count==""){ //カウントがなければ0をセット
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}

	return $count.' Views';
}

// 管理画面に閲覧数項目を追加する
function count_add_column( $columns ) {
    $columns['views'] = '閲覧数';
    return $columns;
}
add_filter( 'manage_posts_columns', 'count_add_column' ); // 投稿ページに追加


// 管理画面にページビュー数を表示する
function count_add_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'views' :
					echo getPostViews($post_id); // 閲覧数を取得する
				break;
    }
}
add_action( 'manage_posts_custom_column' , 'count_add_column_data', 10, 2 ); // 投稿ページに追加

// 閲覧数を並び替え可能にする
function column_views_sortable($columns) {
    $columns['views'] = 'views_sort';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'column_views_sortable');


// 閲覧数クリックで並び替えを実行
function my_add_sort_by_meta( $query ) {
  if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
    switch( $orderby ) {
      case 'views_sort':
        $query->set( 'meta_key', 'post_views_count' );
        $query->set( 'orderby', 'meta_value_num' );
        break;
    }
  }
}
add_filter( 'manage_edit-post_sortable_columns', 'column_views_sortable' ); // 投稿ページに追加

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//Contact Form 7 セレクトボックスの選択肢をカスタム投稿のタイトルから自動生成
function job_selectlist($tag, $unused)
{
    // セレクトボックスの名前が 'menu' かどうか確認
    if ($tag['name'] != 'menu') {
        return $tag;
    }

    // get_posts()でセレクトボックスの中身を作成する
    // クエリの作成
    $args = array(
        'numberposts' => -1,
        'post_type'   => 'campaign', // カスタム投稿タイプを指定
        // 並び順 ⇒ セレクトボックス内の表示順
        'orderby'     => 'ID',
        'order'       => 'ASC'
    );

    // クエリをget_posts()に入れる
    $job_posts = get_posts($args);

    // クエリがなければ戻す
    if (!$job_posts) {
        return $tag;
    }

    // 最初に「キャンペーン内容を選択」をプラセボ（選択不可）として追加
    $tag['raw_values'][] = 'キャンペーン内容を選択';
    $tag['values'][]     = 'キャンペーン内容を選択';
    $tag['labels'][]     = 'キャンペーン内容を選択';

    // 自動生成されたキャンペーンタイトルをセレクトボックスに追加
    foreach ($job_posts as $job_post) {
        $tag['raw_values'][] = $job_post->post_title;
        $tag['values'][]     = $job_post->post_title;
        $tag['labels'][]     = $job_post->post_title;
    }

    // 最初の項目「キャンペーン内容を選択」に選択不可と選択状態を追加
    $tag['options'] = array('placeholder' => 'キャンペーン内容を選択', 'disabled', 'selected');

    return $tag;
}

add_filter('wpcf7_form_tag', 'job_selectlist', 10, 2);

//月別アーカイブ
// 指定年の投稿数を取得
function get_year_archives_num( $year ) {
    global $wpdb;
    $cnt = $wpdb->get_var(
      "SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND DATE_FORMAT(post_date, '%Y') = '".$year."';"
    );
    return $cnt;
  }
  // 指定年月の投稿数を取得
  function get_month_archives_num( $year, $month ) {
    global $wpdb;
    $cnt = $wpdb->get_var(
      "SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND DATE_FORMAT(post_date, '%Y%m') = '".$year.str_pad($month, 2, 0, STR_PAD_LEFT)."';"
    );
    return $cnt;
  }
  // 一番古い記事の年を取得
  function get_oldest_year() {
    global $wpdb;
    $oldest_date = $wpdb->get_var(
      "SELECT post_date FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date ASC LIMIT 1;"
    );
    return idate('Y', strtotime($oldest_date) ); //投稿日の年だけ数値で取得
  }
  //自動的に追加される <p> タグを無効化
 remove_filter('the_excerpt', 'wpautop');