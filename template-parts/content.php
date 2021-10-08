<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daem_subsitios
 */

?>
<div class="container">
	<div class="row d-flex justify-content-center">


	
		<div class="col-md-10 col-sm-12 pb-5 pt-5">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

				<div style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;  background-size: cover; background-position: center; height: 400px;">
			</div>

				<div class="card px-5 pt-1 pb-4 bg-white border-0 rounded-0 shadow">

					<div class="entry-content justify-content-center align-self-center">

					<div class="shadow d-none">
				</div>

				<header class="entry-header">
					<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title display-6 text-info ">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
	?>

				</header>

						<?php the_content();?>
	</div>
	</div>
	
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>