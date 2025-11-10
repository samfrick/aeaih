<?php
// Mise en file des styles/css
function aeaih_enqueue_scripts() {
    wp_enqueue_style('aeaih-style', get_template_directory_uri() . '/dist/assets/main.css', array(), null);
    wp_enqueue_script('aeaih-main', get_template_directory_uri() . '/dist/assets/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'aeaih_enqueue_scripts');

// Support du titre automatique
add_theme_support( 'title-tag' );

// Support des miniatures si besoin
add_theme_support( 'post-thumbnails' );

?>