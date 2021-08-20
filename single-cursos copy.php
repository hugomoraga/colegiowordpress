<?php
/*
* Template Name: Cursos
*/
?>
<?php
get_header();
?>
<main class="container-fluid p-0" style="min-height: 50vh;">
<?php echo do_shortcode( '[elementor-template id="357"]' ); ?>



    <?php the_content(); ?>

</main>
<?php
get_footer();
