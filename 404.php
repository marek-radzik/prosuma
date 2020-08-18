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

		<section class="error-404 not-found">
			<header class="page-header">
				<i class="mt-4 far fa-frown fa-5x"></i>
				<h2 class="page-title"><?php esc_html_e('Entschuldigung, die ausgewählte Seite existiert nicht.', 'mr-theme'); ?></h2>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->

	</div>
</main><!-- #main -->
<?php
get_footer();
