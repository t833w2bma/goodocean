<?php
// タイトル
add_theme_support('title-tag');

// 外部ファイルの読み込み
add_action( 'wp_enqueue_scripts', function () {
    $uri = get_stylesheet_directory_uri();
    // CSSの読み込み
    wp_enqueue_style( 'reset',"$uri/css/reset.css" );
    wp_enqueue_style( 'main',"$uri/style.css" );
    wp_enqueue_style( 'lightbox',"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" );
    wp_enqueue_style( 'slick',"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" );
    wp_enqueue_style( 'animate',"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css");
    wp_enqueue_style( 'googleapis', "https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Marcellus&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap");

    // JavaScriptの読み込み
    wp_enqueue_script( 'jquery',"https://code.jquery.com/jquery-3.6.4.min.js" );
    wp_enqueue_script( 'lightbox_script',"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" );
    wp_enqueue_script( 'slick_script',"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" );
    wp_enqueue_script( 'inview',"https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js" );
    wp_enqueue_script( 'sc1',"$uri/js/script.js" );
    wp_enqueue_script( 'sc2',"$uri/js/custom-lightbox.js" );
    wp_enqueue_script( 's3',"$uri/js/slider.js" );
    }

);




// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// 管理画面｜投稿の名前変更
function change_menu_label(){
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function change_object_label(){
  global $wp_post_types;
  $name = 'お知らせ';
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
add_action( 'init', 'change_object_label' );
add_action( 'admin_menu', 'change_menu_label' );



add_filter( 'the_content', function ( $content ) {
    if ( is_singular( 'post' ) ) {
        $content .= '<div>記事本文の直後に出す</div>';
    }
    return $content;
});


//カスタムメニュー P233
add_action('after_setup_theme', function () {
  register_nav_menus([
    'main-menu' => 'Main Menu',
    'footer-menu' => 'Footer Menu'
  ]);
});


//ウィジェット P236
add_action('widgets_init', function () {
  register_sidebar([
    'name' => 'Archive Widgets',
    'id' => 'archive-widgets',
    'before_widget' => '<ul class="sidebar-list"',
    'after_widget' => '</ul>'
  ]);
  register_sidebar([
    'name' => 'Category Widgets',
    'id' => 'category-widgets',
    'before_widget' => '<ul class="sidebar-list"',
    'after_widget' => '</ul>'
  ]);
});