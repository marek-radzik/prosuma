<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MR_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container text-center pt-4 pb-4">
		<div class="site-info">
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			echo date('Y') . ' &copy; <a href="https://pro-suma.com">pro-suma.com</a>';
			?>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="scrollup-mr">&nbsp;</div>

<!-- Optional JavaScript -->
<!-- Bootstrap 4.5.2 -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- WOW -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!--Main JS-->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>