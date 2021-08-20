<?php
/*
* Template Name: Curso Padre 
* Template Post Type: page_cursos

*/
?>
<?php
get_header();
?>
<main class="container-fluid p-0" style="min-height: 50vh;">
<?php wpb_list_child_pages(); ?>
    <?php the_content(); ?>

</main>
<?php
get_footer();
