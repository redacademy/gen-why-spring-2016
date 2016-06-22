<?php
/**
 * Template Name: Event Clips Page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

<?php

//Custom Function for setting Featured Image as header for events-clips page
function genwhy_events_clips_header() {

  if( !is_page_template( 'event-clips.php' ) ) {
    return ;
  }

  	CFS()->get('upload_background_image')

add_action( 'wp_enqueue_scripts', 'genwhy_events_clips_header' );


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="eventhero">
				<h1 class="header1">Event Clips</h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="eventone-bg watch-center">
			<?php get_template_part( 'template-parts/content', 'content-event-clip' ); ?>
        		<h2 class="header2-b h2-change"><?php the_title(); ?></h2>
        		<a href="#" class="button button-a fom-button">Find Out More</a>
      		</div>

		<?php endwhile; // End of the loop. ?>
		</main>
	</div>

<?php get_footer(); ?>
?>