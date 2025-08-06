<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>

<a href="<?php echo home_url('/'); ?>">
  <img src="<?php echo get_template_directory_uri(); ?>/pooandpoo.png" alt="" class="site-logo d-block mx-auto">
</a>


<!-- Menú lateral (offcanvas) -->
<div class="sidebar bg-black text-white position-fixed h-100" >
  <div class="p-3">
    <h5>Menú</h5>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo get_permalink(get_page_by_path('nuestras-obras')); ?>"><span class="diamond"></span><span class="menu-text">Nuestras obras</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo get_permalink(get_page_by_path('biografia')); ?>"><span class="diamond"></span><span class="menu-text">Biografía</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo get_permalink(get_page_by_path('exposiciones')); ?>"><span class="diamond"></span><span class="menu-text">Exposiciones</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo get_permalink(get_page_by_path('publicaciones')); ?>"><span class="diamond"></span><span class="menu-text">Publicaciones</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo get_permalink(get_page_by_path('contacto')); ?>"><span class="diamond"></span><span class="menu-text">Contacto</span></a>
      </li>
      <!-- Agrega más enlaces aquí -->
    </ul>
  </div>
</div>
