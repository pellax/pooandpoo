<?php
get_header();
?>
<div id="main-content">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
get_footer();
?>
</div>
