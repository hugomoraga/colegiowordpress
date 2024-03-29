<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daemelquisco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="text-white text-center p-3 m-0 bg-secondary">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content p-3" style="height: 60vh; background-image: url(https://daemelquisco.cl/escuelaeltotoral/wp-content/themes/colegiowordpress/img/bg1.png); background-repeat: repeat; )">
	
		<?php
		the_content();


		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'daemelquisco' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->