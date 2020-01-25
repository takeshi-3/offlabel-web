<?php
/**
* OFF LABEL
* @theme offlabel
* @autor Chun
*/

// ------------------------------------
// 投稿にアイキャッチ画像を設定
// ------------------------------------
add_theme_support('post-thumbnails');

// ------------------------------------
// wordpress Ver. 非表示
// ------------------------------------
remove_action ('wp_head','wp_generator');

//---------------------------------
// 投稿の順序を自由に変更
//---------------------------------
add_post_type_support( 'post', 'page-attributes' );

//---------------------------------
// ログイン画面カスタマイズ
//---------------------------------
function my_login_style() {
    wp_enqueue_style('custom-login', get_template_directory_uri().'/css/login.css');
}
add_action('login_enqueue_scripts', 'my_login_style');

//---------------------------------
// カスタム投稿 : ニュース
//---------------------------------
function create_news_post_type() {
    register_post_type('news', array(
        'labels' => array(
            'name' => __('ニュース')
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
    ));
}
add_action('init', 'create_news_post_type');

//---------------------------------
// カスタム投稿 : 講演者
//---------------------------------
function create_speaker_post_type() {
    register_post_type('speaker', array(
        'labels' => array(
            'name' => __('講演者')
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
    ));
}
add_action('init', 'create_speaker_post_type');

//---------------------------------
// カスタム投稿 : イベント
//---------------------------------
function create_event_post_type() {
    register_post_type('event', array(
        'labels' => array(
            'name' => __('イベント')
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
    ));
}
add_action('init', 'create_event_post_type');
?>
