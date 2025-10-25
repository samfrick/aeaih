<?php
// Mise en file des styles/css
function aeaih_theme_scripts() {
  wp_enqueue_style( 'aeaih-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'aeaih_theme_scripts' );

// Support du titre automatique
add_theme_support( 'title-tag' );

// Support des miniatures si besoin
add_theme_support( 'post-thumbnails' );

?>