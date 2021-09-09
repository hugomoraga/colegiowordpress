<?php
/*
* Template Name: Cursos
* Template Post Type: page_cursos

*/
?>
<?php
get_header();
?>
<main class="container-fluid p-0" style="min-height: 50vh; background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg1.png); background-repeat: repeat; )">

<h2 class="text-center  p-2"> <?php echo  get_the_title() ?></h2>
<div class="container">
<div class="row p-4">
    
<div class="col-md-8">
    <div class="card shadow p-3">
<?php the_content(); ?>
</div>
</div>
<div class="col-md-4 ">
    <div class="card shadow">
       <h4 class="p-2 text-info"> Asignaturas del Curso:</h4>
<?php echo do_shortcode( '[elementor-template id="483"]' ); ?>
</div>
</div>
</div>
</main>
<?php
get_footer();
