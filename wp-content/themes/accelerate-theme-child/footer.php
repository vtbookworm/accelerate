<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
				
				<!-- Modified to make company name appear in a different color -->
				<!-- <p> --><?php //bloginfo('description'); ?><!-- </p> -->
				<?php green_accelerate_footer(); ?>
				<p><span><?php bloginfo( 'name' ); ?></span><?php bloginfo( 'description' ); ?>
				<!-- End modification -->
				
				<p class="copyright">&copy; <?php bloginfo('title'); ?>, LLC
				</div>
				
			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>