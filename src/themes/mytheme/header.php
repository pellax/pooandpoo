<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center p-0 m-0">
    <div class="container-fluid justify-content-center p-0 m-0">
        <a class="navbar-brand mx-auto d-flex flex-column align-items-center p-0 m-0" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/pooandpoo.png" alt="" class="site-logo">
            <!-- Optional: Add site name below the logo -->
            <!-- <span class="h4 mt-2 text-white"><?php bloginfo('name'); ?></span> -->
        </a>
    </div>
</nav>
