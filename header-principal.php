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

		<header id="masthead" class="site-header bg-light"
			style='background-image: linear-gradient(345deg, #13547a 0%, #80d0c7 100%), url(<?php echo get_template_directory_uri(); ?>/img/bg-header.png);'>
			<div class="container pt-2 pb-2 ">
				<div class="row align-items-center">
					<div class="col site-header__logo d-flex justify-content-center justify-content-md-start pt-1 ">
						<?php the_custom_logo();
						?>

					</div>

					<div class="col pt-2">
						<div class="search-container">


						</div>
					</div>

					<div class="col d-flex justify-content-end align-item-center">
						<div class="shadow-sm rounded-pill">
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

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





			<?php include get_template_directory() .'/components/menu_principal.php'; ?>
			<!-- #site-navigation -->
		</header><!-- #masthead -->