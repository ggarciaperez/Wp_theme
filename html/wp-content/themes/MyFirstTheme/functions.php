<?php
/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150,150);
/**
 * Filter the except length to 5 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 *//*
function wpdocs_custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
*/
?>