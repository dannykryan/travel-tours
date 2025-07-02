<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', get_template_directory_uri() . "/reset.css", array(), '8.0.1', 'all' );
}

add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Custoim image sizes
function custom_image_sizes() {
    add_image_size( 'card', 36, 24, true ); // Custom pay-option card size
}
add_action( 'after_setup_theme', 'custom_image_sizes' );