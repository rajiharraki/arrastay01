<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header style="padding: 24px 0; background: #fff; box-shadow: 0 2px 12px #0001;">
    <div style="max-width:1100px;margin:auto;display:flex;align-items:center;justify-content:space-between;">
        <div class="site-branding">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <span style="font-size:1.4em;font-weight:bold;color:#673ab7;"><?php bloginfo('name'); ?></span>
            <?php } ?>
        </div>
        <nav>
            <?php wp_nav_menu([
                'theme_location' => 'main_menu',
                'container' => false,
                'menu_class' => 'arrastay-nav'
            ]); ?>
        </nav>
    </div>
</header>
<main style="max-width:1100px;margin:auto;padding:32px 8px 0 8px;">
