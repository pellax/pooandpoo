<?php get_header(); ?>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Primer slide</h5>
        <p>Texto descriptivo del primer slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Segundo slide</h5>
        <p>Texto descriptivo del segundo slide.</p>
      </div>
    </div>
    <!-- Agrega más slides aquí -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<?php get_footer(); ?>
