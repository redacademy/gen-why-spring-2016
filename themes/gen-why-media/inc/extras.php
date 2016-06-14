<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//Custom Function for setting Featured Image as Splash for About Page
function 'header_image'() {

	if( !is_page_template( 'watch.php' ) ) {
		return ;
	}

   $custom_css = 
           ".watchhero{
                   background:
                       linear-gradient( 
                            rgba(0,0,0,0.4),
                            rgba(0,0,0,0.4)
                        ),
                       url('". CFS()->get('header_image') ."');
                   display: flex;
                   background-size: cover;
                   background-position: bottom;
                   height: 25vh;
                   width: 100vw;
                   padding-top: 0;
                   justify-content: center; 
                   align-items: center;
                   color: white;
           }";
   wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'header_image' );
