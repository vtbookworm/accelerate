<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
 
// Custom post types function
function create_custom_post_types() {
	// create a case studies custom post type
	register_post_type( 'case_studies',
		array( 
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 
				'slug' => 'case-studies' 
			),
		)
	);
}
 
// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );

// change excerpt symbol
function custom_excerpt_more($more) {
	return '...<div class="read-more read-more-custom"><a href="'. get_permalink() . '">Read more <span>&raquo;</span></a></div>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// enqueue scripts and stypes
function accelerate_child_scripts() {
	wp_enqueue_style('accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300italic,400italic,600italic,400,600,700,300');
}

add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Remove 'Accelerate' in the description - call in footer.php ONLY
function green_accelerate_footer() {
	add_filter( 'option_blogdescription', 'accelerate_change_description_footer', 10, 2 );
	
	function accelerate_change_description_footer( $description ) {
		$description = str_replace('Accelerate','', $description);
		return $description;
	}
};

// add_filter( 'storm_social_icons_type', create_function('', 'return "icon-sign";'));


// Add specific class to Contact page 

function accelerate_body_classes($classes) {
	if (is_page('contact') ) {
		$classes[] = 'contact';
	}
	return $classes;
}
add_filter( 'body_class','accelerate_body_classes' );


