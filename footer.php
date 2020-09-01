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

<div class="section-contact">
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="pro-suma.com logo footer" />
				<div class="mt-2 d-block"><?php esc_html_e('Ein Service der überzeugt!', 'mr-theme'); ?></div>
			</div>
			<div class="col-md-6">
				<div class="d-block mb-2"><i class="fas fa-home" aria-hidden="true"></i> D-21635 Jork, Groß Hove 5</div>
				<div class="d-block mb-2"><i class="fas fa-phone" aria-hidden="true"></i> Telefon: + 49 (0) 4162 – 900 589</div>
				<div class="d-block"><i class="far fa-envelope" aria-hidden="true"></i> E-Mail: <a href="mailto:contact@pro-suma.com">contact@pro-suma.com</a></div>
			</div>
		</div>
	</div>
</div>

<footer id="colophon" class="site-footer">
	<div class="container text-center pt-4 pb-4">
		<div class="row">
			<div class="col-md-3"><a class="impressum" href="/impressum/">Impressum</a> <a class="datenschutz" href="/datenschutz/">Datenschutz</a></div>
			<div class="col-md-6">
				<div class="site-info">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					echo date('Y') . ' &copy; <a href="https://pro-suma.com">pro-suma.com</a>';
					?>
					<!-- <a href='https://freepik.com/'>freepik.com</a> -->
					<!-- <a href='https:///flaticon.com/'>flaticon.com</a> -->
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="scrollup-mr">&nbsp;</div>

<!-- Optional JavaScript -->
<!-- Bootstrap 4.5.2 -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.1.min.js" integrity="sha256-APllMc0V4lf/Rb5Cz4idWUCYlBDG3b0EcN1Ushd3hpE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!--Main JS-->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>