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
			<?php
$slugsite = str_replace( '/', '', get_blog_details()->path );

?>

<main id="primary" class="site-main" style="min-height:80vh;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 p-0 bg-<?php echo $slugsite ?> ">
				
				<!-- SECCION BIENVENIDA -->
				
				<?php include get_template_directory() .'/components/bienvenida.php'; ?>
			</div>
			<div class="d-none col-md-3 col-sm-12 lateral-<?php echo $slugsite ?> "
				style="">

				<div class="p-4">


					<div class="card bg-primary shadow rounded-0 border-0">

						<div class="text-start">

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

			
				</div>
			</div>
		</div>
	</div>
			 <!-- SECCIONES FRONT PAGE -->

	<div class="container-fluid" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg1.png); background-repeat: repeat; )">
		<div class="container py-4">
			<?php include get_template_directory() .'/components/noticias.php'; ?>
			
			<?php include get_template_directory() .'/components/actividades.php'; ?>
		</div>
	</div>


</main>
<?php

get_footer();