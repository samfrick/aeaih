<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<!DOCTYPE html>
<html <?= get_language_attributes() ?>>
<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="header relative w-auto h-auto">
        <div class="container w-full flex items-center justify-between py-4 absolute">
            <a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a>
            <nav class="main-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'menu_class' => 'main-menu',
                ]);
                ?>
            </nav>
        </div>
    </header>

    <main data-taxi>
        <div data-taxi-view class="page-container">