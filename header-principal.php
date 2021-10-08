<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package daemelquisco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'daemelquisco'); ?></a>

		<header id="masthead" class="custom-header">
			<div class="container-fluid p-0 ">
				<div class="row align-items-center shadow">
					<div class="col-md-3 col-6 d-flex justify-content-center px-5 justify-content-md-start py-3">
					<?php the_custom_logo(); ?>
					</div>
					<div class="col-md-6 col-12 order-3 order-md-2 text-white">
					<?php include get_template_directory() .'/components/menu_principal.php'; ?>
					</div>
					<div class="col-md-3 col-6 order-2 order-md-3">

					<div class="col d-flex justify-content-center align-item-center">
						<div class="shadow-sm rounded-pill">
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

						</div>
					</div>
					</div>
				

			

				</div>
			</div>

			<style>
				.custom-logo {
					max-height: 150px;
					width: 100%;
				}
			</style>





			<!-- #site-navigation -->
		</header><!-- #masthead -->