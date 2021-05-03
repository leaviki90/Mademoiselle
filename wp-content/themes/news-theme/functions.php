<?php

//ADD STYLE

function news_theme_style(){
    wp_enqueue_style("owl-carousel", get_template_directory_uri()."/frontend/css/owl.carousel.css", array(), "v2.3.4");
    wp_enqueue_style("owl-theme-default", get_template_directory_uri()."/frontend/css/owl.theme.default.css", "owl-carousel", "v2.3.4");
    wp_enqueue_style("theme", get_template_directory_uri()."/frontend/css/theme.css", array(), "v1.0.0");
    wp_enqueue_style("style", get_template_directory_uri()."/style.css", array(), "v1.0.0");
}

add_action( 'wp_enqueue_scripts', 'news_theme_style' );

//ADD SCRIPTS

function news_theme_scripts(){
    wp_enqueue_style("jQuery", get_template_directory_uri()."/frontend/js/jquery.js", array(), "v3.5.1", true);
    wp_enqueue_style("bootstrap-bundle", get_template_directory_uri()."/frontend/js/bootstrap.bundle.min.js", "jQuery", "v5.0.0-beta1", true);
    wp_enqueue_style("font-awesome", "https://kit.fontawesome.com/e2e5f5e8b9.js", array(), "v5.0.0", true);
    wp_enqueue_style("owl-carousel", get_template_directory_uri()."/frontend/js/owl.carousel.min.js", "jQuery", "v2.3.4", true);
    wp_enqueue_style("main-js", get_template_directory_uri()."/frontend/js/main.js", "jQuery", "v1.0.0", true);
}

add_action( 'wp_enqueue_scripts', 'news_theme_scripts' );

//THEME SETUP

function  news_theme_setup(){
    add_theme_support( 'automatic-feed-links' );
    load_theme_textdomain( 'news-theme', get_template_directory() . '/languages' );
    add_theme_support( 'custom-logo', array(
        'height'               => 30.5,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'unlink-homepage-logo' => false, 
    ) );
    register_nav_menus(array(
        "main-menu" => __("Main Menu", "news-theme"),
        "social" => __("Social", "news-theme")
    ));
    
}

add_action( 'after_setup_theme', 'news_theme_setup' );