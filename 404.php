<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MR_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container text-center">

		<section class="mt-4 error-404 not-found">
			<header class="page-header">
				<img src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" alt="page not found" />
				<h2 class="page-title mb-4"><?php esc_html_e('Entschuldigung, die ausgewählte Seite existiert nicht.', 'mr-theme'); ?></h2>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->

	</div>
</main><!-- #main -->
<?php
get_footer();
