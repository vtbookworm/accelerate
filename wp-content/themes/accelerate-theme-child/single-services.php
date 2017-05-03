<?php
/**
 * The template for displaying services
 *
 * This is the template that displays all service posts by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php 
						$service_image = get_field('service_image');
						$service_description = get_field('service_description');
						$size = "full";
					?>
				
					<div class="svc-container">
						<div class="svc">

							<div class="svc-title">
								<h2><?php the_title(); ?></h2>
							</div>

							<div class="svc-text">
								<p><?php echo $service_description; ?></p>
							</div>
						
						</div>

						<div class="svc-image">
							<?php if ($service_image) { 
								echo wp_get_attachment_image($service_image, $size); 
							} ?>
						
						</div>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>