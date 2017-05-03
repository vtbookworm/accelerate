<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays the About page.
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<?php 
$section_title = get_field('section_title');
$section_description = get_field('section_description');
$contact_msg = get_field('contact_message');
$button_msg = get_field('button_message');
?>
<section class="about-page">
	<div class="site-content">
		<div class="experimental">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-header-text">
				<h2><?php the_content(); ?></h2>
			</div>
			<div class="services-title">
				<h3><?php echo $section_title ?></h4>
				<p><?php echo $section_description ?></p>
			</div><!-- .services-title -->
		</div> <!-- experiental -->
			<div class="services-section">
				<?php query_posts('post_type=services'); ?>
				
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="svc-area">
						<?php
							$image = get_field('service_image');
							$size = "full";
							$svc_text = get_field('service_description');
							if ($wp_query->current_post % 2 == 0) {
								$image_side = "left-aligned";
								$text_side = "right-aligned";
							}
							else {
								$image_side = "right-aligned";
								$text_side = "left-aligned";
							}
						?>
						<div class="svc">
							<figure class="svc-image <?php echo $image_side; ?>">
								<?php if ($image) {
									echo wp_get_attachment_image($image, $size);
								} ?>
							</figure>
		
							<div class="services-text">
								<h3 class="svc-title"><?php echo the_title(); ?></h3>
								<p class="svc-text <?php echo $text_side; ?>"><?php echo $svc_text; ?></p>
							</div> <!-- services-text -->
						</div> <!-- svc -->
					</div><!-- svc-area -->	
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>
			</div><!-- services-section -->				
	
			<div class="about-contact">	
				<h2><?php echo $contact_msg ?></h2>
				<a class="button contact-button" href="<?php echo home_url(); ?>/contact"><?php echo $button_msg ?></a>
			</div><!-- .about-contact -->
		<?php endwhile; ?>
		
	</div><!-- .site-content -->
</section><!-- .about-page -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>