<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/pooandpoo.png" alt="<?php bloginfo( 'name' ); ?>" class="site-logo">
    </a>
    <p><?php bloginfo( 'description' ); ?></p>
</header>