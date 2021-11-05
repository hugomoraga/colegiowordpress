<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daemelquisco
 */

?>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-10 col-sm-12 bg-white">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header py-3 bg-white">
					<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title display-6 text-info py-3">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
	?>

				</header>
				<div class="shadow d-none">
					<?php daemelquisco_post_thumbnail(); ?>
				</div>
				<div class="d-flex justify-content-end ">
					<?php daemelquisco_entry_header(); ?>
				</div>
				<div class="card px-5 pt-1 pb-4 bg-white border-0 rounded-0 shadow">

					<div class="entry-content justify-content-center align-self-center">
						<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text text-secondary"> "%s"</span>', 'daemelquisco' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'daemelquisco' ),
				'after'  => '</div>',
			)
		);
		?>
					</div><!-- .entry-content -->
				</div>

				<?php
			if ( 'post' === get_post_type() ) :
					?>
				<div class="entry-meta fs-6 card-footer d-flex justify-content-end">
					<?php
						daemelquisco_posted_on(); 
						daemelquisco_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
				<footer class=" entry-footer d-flex justify-content-end">
					<?php daemelquisco_entry_footer(); ?>

				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>