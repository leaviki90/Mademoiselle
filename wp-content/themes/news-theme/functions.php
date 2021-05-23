<?php

//ADD STYLE

function news_theme_style() {
    wp_enqueue_style("owl-carousel", get_template_directory_uri() . "/frontend/css/owl.carousel.css", array(), "v2.3.4");
    wp_enqueue_style("owl-theme-default", get_template_directory_uri() . "/frontend/css/owl.theme.default.css", "owl-carousel", "v2.3.4");
    wp_enqueue_style("theme", get_template_directory_uri() . "/frontend/css/theme.css", array(), "v1.0.0");
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css", array(), "v1.0.0");
}

add_action('wp_enqueue_scripts', 'news_theme_style');

//ADD SCRIPTS

function news_theme_scripts() {
    wp_enqueue_script("jQuery", get_template_directory_uri() . "/frontend/js/jquery.js", array(), "v3.5.1", true);
    wp_enqueue_script("bootstrap-bundle", get_template_directory_uri() . "/frontend/js/bootstrap.bundle.min.js", "jQuery", "v5.0.0-beta1", true);
    wp_enqueue_script("font-awesome", 'https://kit.fontawesome.com/e2e5f5e8b9.js', array(), "v5.3.0", false);
    wp_enqueue_script("owl-carousel", get_template_directory_uri() . "/frontend/js/owl.carousel.min.js", "jQuery", "v2.3.4", true);
    wp_enqueue_script("main-js", get_template_directory_uri() . "/frontend/js/main.js", "jQuery", "v1.0.0", true);
}

add_action('wp_enqueue_scripts', 'news_theme_scripts');

//THEME SETUP

function news_theme_setup() {
    add_theme_support('automatic-feed-links');
    load_theme_textdomain('news-theme', get_template_directory() . '/languages');
    add_theme_support('custom-logo', array(
        'height' => 30.5,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'unlink-homepage-logo' => false,
    ));
    register_nav_menus(array(
        "main-menu" => __("Main Menu", "news-theme"),
        "social" => __("Social", "news-theme")
    ));
    add_theme_support('post-thumbnails');
    add_image_size("blog-thumb", 360, 240, true);
    add_image_size("blog-single", 748, 498, true);
    add_image_size("service-thumb", 570, 487, true);
    
    
}

add_action('after_setup_theme', 'news_theme_setup');

function news_theme_create_post_type() {

    register_post_type('our-services', array(
        'labels' => array(
            'name' => __("Services", "news-theme"),
            'singular_name' => __("Service", "news-theme"),
            'plural_name' => __("Services", "news-theme"),
            'all_items' => __("All Services", "news-theme"),
            'add_new' => __("Add New Service", "news-theme"),
            'add_new_item' => __("Add New Service item", "news-theme"),
            'new_item' => __("New Service", "news-theme"),
            'edit' => __("Edit", "news-theme"),
            'edit_item' => __("Edit Service item", "news-theme"),
            'view' => __("View Service", "news-theme"),
            'view_item' => __("View Service Item", "news-theme"),
            'featured_image' => __("Featured Image for this Service item", "news-theme"),
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-list-view',
        'menu_position' => 17,
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));

    register_post_type('team-members', array(
        'labels' => array(
            'name' => __("Team Members", "news-theme"),
            'singular_name' => __("Team Member", "news-theme"),
            'plural_name' => __("Team Members", "news-theme"),
            'all_items' => __("All Team Members", "news-theme"),
            'add_new' => __("Add New Team Member", "news-theme"),
            'add_new_item' => __("Add New Team Member item", "news-theme"),
            'new_item' => __("New Team member", "news-theme"),
            'edit' => __("Edit", "news-theme"),
            'edit_item' => __("Edit Team Member item", "news-theme"),
            'view' => __("View Team Member", "news-theme"),
            'view_item' => __("View Team Member Item", "news-theme"),
            'featured_image' => __("Featured Image for this Team Member item", "news-theme"),
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-businesswoman',
        'menu_position' => 18,
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'news_theme_create_post_type');

function news_theme_sidebars() {

    register_sidebar(
            array(
                'id' => 'page-sidebar',
                'name' => __('Page Sidebar', "news-theme"),
                'description' => __('A page sidebar', "news-theme"),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );

    register_sidebar(
            array(
                'id' => 'sidebar-search',
                'name' => __('Sidebar search', "news-theme"),
                'description' => __('A sidebar for search form', "news-theme"),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
}

add_action('widgets_init', 'news_theme_sidebars');

require get_template_directory() . "/inc/widget-news.php";
require get_template_directory() . "/inc/widget-form.php";
require get_template_directory() . "/inc/options.php";
