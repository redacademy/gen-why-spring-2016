<?php
/**
 * Template part for displaying posts.
 *
 * @package Genwhy_Theme
 */

?>

	<section>
		<h2 class="header2-a">Upcoming Event</h2>
		<div class="clip-contain">
			<?php $eventclip =  array(
				'post_type' => 'event_clips_cpt',
				'posts_per_page' => 5,
				'order' => 'ASC',
				'orderby' => 'date');
			$eventclipposts = get_posts( $eventclip );
			foreach ( $eventclipposts as $post ) : setup_postdata( $post ); ?>
			
		</div><!-- .event-info -->
	<?php endforeach;
	wp_reset_postdata();?>
</section><!-- .event-container -->

