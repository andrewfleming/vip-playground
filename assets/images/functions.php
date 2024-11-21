<?php

function vippg_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'] );
}
add_action( 'wp_enqueue_scripts', 'vippg_child_theme_enqueue_styles' );