<?php
/**
 * The template for displaying archived case studies
 *
 * This is the template that displays all case studies by default.
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
				<div class="clearfix">
					<?php 
						$services = get_field('services');
						$image_1 = get_field('image_1');
						$size = "full";
					?>
					
					<article class="case-study-details">

						<aside class="case-study-aside">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<h5><?php echo $services; ?></h5>
							<div class="archive-page read-more">
								<?php the_excerpt(); ?>
							</div>
							
							<p><strong><a href="<?php the_permalink() ?>">View Project</a></strong></p>
						</aside>
						
						<div class="case-study-images">
							<?php if($image_1) { ?>
								<a href="<?php the_permalink() ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
							<?php } ?>
							
						</div>
					
						
					</article>
				<div>
			
			
			
			
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>