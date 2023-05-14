<?php 
    //define( 'THEME_URL', get_template_directory_uri());



// <?php 
/** 
@ Khai bao hang gia tri
    @ THEME_URL = lay duong dan thu muc theme
    @ CORE = Lay duong dan cua thu muc /core
**/
define( 'THEME_URL', get_template_directory_uri());
// define( 'CORE', THEME_URL . "/core");

// /**
// @ Nhung file /core/init.php
// **/
// require_once( CORE . "/init.php");

// /**
// @ Thiet lap chieu rong noi dung
// **/
// if( !isset($content_width) ) {
//     $content_width = 620;
// }

/**
@ Khai bao chuc nang cua theme
**/
if( !function_exists('svgb_theme_setup') ) {
    function svgb_theme_setup() {
        /** Thiet lap textdomain */
        // $language_folder = THEME_URL . "/languages";
        // $load_theme_textdomain( 'english', $language_folder);

        /** Tu dong them link RSS len <head> */
        add_theme_support( 'automatic-feed-links' );

        /** Them post thumbnail */
        add_theme_support( 'post-thumbnails' );

        /**Post format */
        add_theme_support( 'post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ) );

        /**Them title-tag */
        add_theme_support( 'title-tag' );

        /**Theme custom background */
        $default_background = array(
            'default-color' => '#FF0000'
        );
        add_theme_support( 'custom-background' , $default_background);

        /**Theme menu */
        register_nav_menu( 'primary-menu', 'Primary menu' );
        
    }
    add_action( 'init', 'svgb_theme_setup');
}

