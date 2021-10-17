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
global $NO_IMAGE_URL;
$NO_IMAGE_URL= '/image/noimg.png';
//画像を表示したいファイルに入力する
$thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().$NO_IMAGE_URL;




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
  // slickの読み込み
	wp_enqueue_script('slick.min', get_theme_file_uri('/slick/slick.min.js'), array(), '', true);
  // wowの読み込み
  wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'), array(), false, true);
	//js/script.jsを読み込み
	wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), array(), '', true);
}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

