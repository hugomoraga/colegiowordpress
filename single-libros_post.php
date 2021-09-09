<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package daem_subsitios
 */

get_header('principal');
?>
<style>
    .pdfemb-viewer {
        width: 80vw;
        height: 100%;
    }
    </style>

	<main id="primary " class="site-main" style="height: 60vh; background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg1.png); background-repeat: repeat; )">

    <?php the_content(); ?>
<div class="row justify-content-center d-flex">
<div class="col-md-10 col-12 p-0 p-5-md">
    <?php $book_url = get_post_meta( get_the_ID(), 'adjuntar-libro', true ); 
    $pdf_emb = '[pdf-embedder url="' . $book_url . '"]'?>
    <?php echo do_shortcode( $pdf_emb ); ?>
</div>
</div>

	</main><!-- #main -->

<?php
get_footer();
