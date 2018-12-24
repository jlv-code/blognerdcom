<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

function disable_things() {
    // Remove links to the extra feeds (e.g. category feeds)
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // Remove links to the general feeds (e.g. posts and comments)
    remove_action( 'wp_head', 'feed_links', 2 );
    // Remove link to the RSD service endpoint, EditURI link
    remove_action( 'wp_head', 'rsd_link' );
    // Remove link to the Windows Live Writer manifest file
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // Remove index link
    remove_action( 'wp_head', 'index_rel_link' );
    // Remove prev link
    remove_action( 'wp_head', 'parent_post_rel_link', 10 );
    // Remove start link
    remove_action( 'wp_head', 'start_post_rel_link', 10 );
    // Display relational links for adjacent posts
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10 );
    // Remove XHTML generator showing WP version
    remove_action( 'wp_head', 'wp_generator' );
    // Remove Emojis
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_things' );

function statics() {
    wp_enqueue_style( 'nerdcomblog', get_stylesheet_uri() );
    wp_enqueue_script( 'nerdcomblog-scripts', get_template_directory_uri() . '/dist/scripts.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'statics' );