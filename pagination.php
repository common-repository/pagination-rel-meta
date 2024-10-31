<?php
/*
Plugin Name: Pagination Rel Meta
Plugin URI: http://beaudierman.com
Description: This plugin adds the rel next and previous meta tags for your paginated pages.  Using rel next and previous meta tags will help Google understand your pagination and remove the need for you to noindex anything after the first page.
Version: 1.0
Author: Beau Dierman
Author URI: http://beaudierman.com
License: GPLv2
*/

function rel_next_prev()
{
	global $paged;

	if(is_archive())
	{
		if(get_previous_posts_link())
		{ ?>
			<link rel="prev" href="<?php echo get_pagenum_link($paged - 1) ?>" />
		<?php }

		if(get_next_posts_link())
		{ ?>
			<link rel="next" href="<?php echo get_pagenum_link($paged + 1) ?>" />
		<?php }
	}
}

add_action('wp_head', 'rel_next_prev');