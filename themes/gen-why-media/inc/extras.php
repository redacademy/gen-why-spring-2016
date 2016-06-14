<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Genwhy_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function genwhy_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'genwhy_body_classes' );

//Custom Function for setting Featured Image as header for Watch page
function genwhy_watch_header() {

	if( !is_page_template( 'watch.php' ) ) {
		return ;
	}

   $custom_css = 
           ".watchhero{
                  background:
                 linear-gradient(
                 rgba(51, 75, 127, 0.55),
                 rgba(51, 75, 127, 0.55)
                 ),
                 url('". CFS()->get('header_image') ."');
               display: flex;
               background-size: cover;
               background-position: bottom;
               height: 33.5vh;
               width: 100vw;
               padding-top: 0;
               justify-content: center; 
               align-items: center;
               color: white;
           }";
   wp_add_inline_style( 'genwhy-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'genwhy_watch_header' );
