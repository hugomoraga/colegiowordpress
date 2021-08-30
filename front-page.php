<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package daemelquisco
 */

get_header('principal');
?>

<main id="primary" class="site-main"
	style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg1.png); background-repeat: repeat; )">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-12 p-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-colegios.png); background-repeat: cover; )">
			
<!-- SECCION BIENVENIDA -->

<?php include get_template_directory() .'/components/bienvenida.php'; ?>
			
			</div>
			<div class="col-md-3 col-sm-12"
				style="background: linear-gradient(to bottom right, rgba(19,84,122, 0.8), rgba(10,21,120, 0.8)), url('<?php echo get_template_directory_uri(); ?>/img/bg-orange.jpg');">

				<div class="p-4">
					<p class="fs-3 text-center p-2 fw-bold text-white"> Titulo </p>


					<div class="card bg-primary shadow py-3">

						<div class=" text-start py-4">

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'lateral-menu',
									'items_wrap'      => '<ul id="%1$s" class="%2$s list-unstyled">%3$s </ul>',
									'link_after'	 => '<i class="fas fa-chevron-circle-right float-end my-1"></i>'

								)
							);
							?>

						</div>
					</div>

					<div class="card bg-secondary px-5 py-4">

					</div>
				</div>
			</div>
		</div>
	</div>



<?php the_content(); ?>

</main>
<?php

get_footer();