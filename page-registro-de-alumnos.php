<?php
/**
 * The template REGISTRO
 *
 * @package daem_subsitios
 */

get_header('principal');
?>

	<main id="primary" class="site-main">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 ">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </div>
    </div>
</div>
	</main><!-- #main -->

<?php
get_footer();
