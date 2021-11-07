<?php 
// サイトタイトル
function insert_title(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'insert_title');
// サイト名-ページ名を、サイト名|ページ名にする
function change_title_separator($sep){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');





// 他のファイルでもnoimgを使えるようにglobalにしている(functions.phpで使う)
add_theme_support('post-thumbnails');

//画像を表示したいファイルに入力する
$thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png';




function add_css_js() {
	//CSSの読み込みはここから
  // slickの読み込み
	wp_enqueue_style('slick-theme', get_theme_file_uri('/slick/slick-theme.css'));
	wp_enqueue_style('slick', get_theme_file_uri('/slick/slick.css'));
  // animateの読み込み
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
  //css/reset.cssを読み込み
	wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'));
	//style.cssを読み込み
	wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));

	//JavaScriptの読み込みはここから
  //デフォルトの jQuery は読み込まない
  wp_deregister_script('jquery');
  // jqueryの読み込み
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js', array(), '', true);
  // particlesの読み込み
  wp_enqueue_script('particles.min', get_theme_file_uri('/js/particles.min.js'), array(), '', true);
  // slickの読み込み
	wp_enqueue_script('slick.min', get_theme_file_uri('/slick/slick.min.js'), array(), '', true);
  // wowの読み込み
  wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'), array(), false, true);
  //js/script.jsを読み込み
	wp_enqueue_script('particles', get_theme_file_uri('/js/particles-divination.js'), array(), '', true);
  //js/script.jsを読み込み
	wp_enqueue_script('particles-homepage', get_theme_file_uri('/js/particles-homepage.js'), array(), '', true);
	//js/script.jsを読み込み
	wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), array(), '', true);
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

// 投稿アーカイブ作成
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
    $slug = 'blog';
    $args['labels'] = array(
      'name' => 'ブログ'
    );
    $args['has_archive'] = $slug;
    // has_archive を有効にしただけではリライトが足りず、期待したURL /blog/ で記事一覧ページを表示できないので、リライトの設定を追加します。
    $args['rewrite'] = array(
      'slug' => $slug,
      // 単に rewrite を true にするだけだとパーマリンク構造が重複してしまう（記事一覧ページが /blog/blog/になってしまう）ので with_front を false にします。
      'with_front' => false,
    );
	}
	return $args;
}
// register_post_type_args は引数を2つ受け取るので、 $priority は初期値のまま 10 とし、 $accepted_args を 2 にします。
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
// パーマリンク設定すること




function max_excerpt_length( $string, $maxLength ) {
  // 文字数を取得
  // mb_strlen(文字数を取得したい文, 'UTF-8');
  $length = mb_strlen($string, 'UTF-8');
  if($length < $maxLength){
    return  str_replace('\n', '', strip_tags($string));
  } else {
  // str_replace(改行コードを削除)strip_tags(htmlタグを外す)
	$content= str_replace('\n', '', mb_substr(strip_tags($string), 0, 150,'UTF-8'));
	echo $content.'……';
  };
}





// パンくずアーカイブカスタマイズ
function bcn_add($bcnObj) {
	// 最後に追加
	if (is_post_type_archive('post')) {
        	// 新規のtrailオブジェクトを末尾に追加する
		$bcnObj->add(new bcn_breadcrumb('記事一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
		// trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
  // 途中に記事一覧を追加(個別ページ)
  elseif(is_single()) {
    $bcnObj->add(new bcn_breadcrumb('記事一覧', null, array('post-clumn-archive'), home_url('/blog'), null, true));
    // 上記を作った時点でまず記事一覧が生成され、記事一覧(trail[3])（生成されたものは一番左に来る）＞ホーム(trail[2])＞カテゴリー(trail[1])＞詳細(trail[0])となっており、
		$trail_tmp = clone $bcnObj->trail[3];
    // 上記で記事一覧(trail[3])を変数で取得
    $bcnObj->trail[3] = clone $bcnObj->trail[2];
    // 上記の左辺は記事一覧(trail[3])であり、clone $bcnObj->trail[2]とすることでホームに置き換えることができる
    $bcnObj->trail[2] =  $trail_tmp;
    // $bcnObj->trail[2] =  clone $bcnObj->trail[3];とすると$bcnObj->trail[3]はホームとしてしまったのでホームになってしまう、しかしあらかじめ$trail_tmp = clone $bcnObj->trail[3];を変数にしとくことで$trail_tmpは記事一覧になる
  }
  // 途中に記事一覧を追加(カテゴリーページ)
  elseif(is_category()) {
    $bcnObj->add(new bcn_breadcrumb('記事一覧', null, array('post-clumn-archive'), home_url('/blog'), null, true));
		$trail_tmp = clone $bcnObj->trail[2];
    $bcnObj->trail[2] = clone $bcnObj->trail[1];
    $bcnObj->trail[1] =  $trail_tmp;
  }
  elseif(is_search()) {
    $bcnObj->add(new bcn_breadcrumb('記事一覧', null, array('post-clumn-archive'), home_url('/blog'), null, true));
		$trail_tmp = clone $bcnObj->trail[2];
    $bcnObj->trail[2] = clone $bcnObj->trail[1];
    $bcnObj->trail[1] =  $trail_tmp;
  }
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');








/**
 * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
 */
function custom_search($search, $wp_query) {
  global $wpdb;
   
  //サーチページ以外だったら終了
  if (!$wp_query->is_search)
   return $search;
  
  if (!isset($wp_query->query_vars))
   return $search;
   
  // ユーザー名とか、タグ名・カテゴリ名も検索対象に
  $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
   if ( count($search_words) > 0 ) {
     $search = '';
     foreach ( $search_words as $word ) {
       if ( !empty($word) ) {
         $search_word = $wpdb->escape("%{$word}%");
         $search .= " AND (
             {$wpdb->posts}.post_title LIKE '{$search_word}'
             OR {$wpdb->posts}.post_content LIKE '{$search_word}'
             
             OR {$wpdb->posts}.ID IN (
               SELECT distinct r.object_id
               FROM {$wpdb->term_relationships} AS r
               INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
               INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
               WHERE t.name LIKE '{$search_word}'
             OR t.slug LIKE '{$search_word}'
             OR tt.description LIKE '{$search_word}'
             )
         ) ";
       }
     }
   }
   
   return $search;
   }
   add_filter('posts_search','custom_search', 10, 2);

   