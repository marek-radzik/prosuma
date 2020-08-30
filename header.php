<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MR_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap 4.5.2 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

	<?php if (!is_front_page()) { ?>
		<!-- Font Awesome 5 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mr-theme'); ?></a>

		<header id="masthead" class="site-header">
			<?php if (is_front_page() && is_home()) { ?>
				<nav class="navbar navbar-expand-md navbar-light" role="navigation">
				<?php } else { ?>
					<nav class="navbar navbar-expand-md navbar-light menu" role="navigation">
					<?php } ?>
					<div class="col-md-3 text-center">
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
							<div class="site-branding">
								<?php
								the_custom_logo();
								if (is_front_page() && is_home()) :
								?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
								else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php
								endif;
								$mr_theme_description = get_bloginfo('description', 'display');
								if ($mr_theme_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $mr_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
								<?php endif; ?>
							</div><!-- .site-branding -->
						</a>
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="mb-4 navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					<div class="col-md-6 mt-2">
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
					</div>
					<div class="col-md-3 text-center mt-2">
						<a href="/kontaktformular-kunde-schritt-1-von-4/" class="btn btn-outline-success  mr-2 btn-sign"><span class="img-sign"></span> <?php esc_html_e('Jetzt Personal anfragen', 'mr-theme'); ?></a><a href="/kwestionariusz-osobowy/" class="btn polish-flag mt-2"><img src="<?php echo get_template_directory_uri(); ?>/img/poland.png" alt="pro-suma.com polish language" /></a>
					</div>
					</nav>
		</header><!-- #masthead -->