<?php
// Habilitar soporte para el título del sitio
add_theme_support('title-tag');

// Cargar Bootstrap y la hoja de estilos del tema
function mytheme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    // Tu hoja de estilos
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    // Bootstrap JS (opcional, para menús desplegables)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Registrar un menú de navegación principal
function mytheme_register_menus() {
    register_nav_menu('top-menu', __('Menú Superior', 'mytheme'));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Incluir el navwalker de Bootstrap
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function mytheme_enqueue_webpack_bundle() {
    $bundle = get_template_directory() . '/dist/bundle.js';
    if ( file_exists( $bundle ) ) {
        wp_enqueue_script(
            'mytheme-bundle',
            get_template_directory_uri() . '/dist/bundle.js',
            array(),
            filemtime( $bundle ),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_webpack_bundle'); 