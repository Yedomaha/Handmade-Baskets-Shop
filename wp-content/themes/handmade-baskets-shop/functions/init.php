<?php

/**
 * Css/Js includes
 */
function enqueue_css() {
    $app_css_ver = filemtime( get_template_directory() . '/dist/css/app.css' );
    wp_enqueue_style( 'css_style', get_stylesheet_uri(), array(), '' );
    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/dist/css/app.css', '', $app_css_ver );
}

add_action( 'wp_enqueue_scripts', 'enqueue_css' );

/**
 * app.ajax_url
 * app.post_type
 */
function enqueue_app_js() {
    $app_js_ver = filemtime( get_template_directory() . '/dist/js/app.js' );

    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/dist/js/app.js', '', $app_js_ver, true );
    wp_localize_script( 'app_js', 'app', array(
        'ajax_url'  => admin_url( 'admin-ajax.php' ),
        'post_type' => get_post_type(),
        'nonce'     => wp_create_nonce( 'app-nonce' ),
        'user_id'   => get_current_user_id()
    ) );
}

add_action( 'wp_enqueue_scripts', 'enqueue_app_js' );