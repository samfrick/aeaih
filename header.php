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
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a>
            <nav class="main-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false
                ]);
                ?>
            </nav>
        </div>
    </header>

    <main data-taxi>
        <div data-taxi-view class="page-container">