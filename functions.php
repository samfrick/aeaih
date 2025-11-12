<?php
function aeaih_enqueue_scripts() {
    wp_enqueue_style(
        'aeaih-style',
        get_template_directory_uri() . '/dist/appCSS.css',
        array(),
        filemtime(get_template_directory() . '/dist/appCSS.css')
    );

    wp_enqueue_style(
        'aeaih-custom',
        get_template_directory_uri() . '/assets/style/app.css',
        array('aeaih-style'), // le charge après le CSS principal
        filemtime(get_template_directory() . '/assets/style/app.css')
    );

    wp_enqueue_script(
        'aeaih-main',
        get_template_directory_uri() . '/dist/appJS.js',
        array(),
        filemtime(get_template_directory() . '/dist/appJS.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'aeaih_enqueue_scripts');

// Support du titre automatique
add_theme_support('title-tag');

// Support des miniatures si besoin
add_theme_support('post-thumbnails');
?>
