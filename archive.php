<?php
/**
 * The archive file
 * 
 */

get_header();

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', 'excerpt' );
	}

	// Previous/next page navigation.
	the_posts_pagination();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
