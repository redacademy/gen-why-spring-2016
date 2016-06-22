<?php
/**
 * Template part for displaying posts.
 *
 * @package Genwhy_Theme
 */

?>

<section class="event-container">
		<h2 class="header2-a">Upcoming Events</h2>
		<div class=" event-info">
			<?php $event =  array(
				'post_type' => 'events_cpt',
				'posts_per_page' => 1,
				'order' => 'ASC',
				'orderby' => 'date');
			$eventposts = get_posts( $event );
			foreach ( $eventposts as $post ) : setup_postdata( $post ); ?>
			<h3 class="header3"><?php the_title(); ?></h3>
			
			<div class="event-time-container">
				<div class="calender-icon">
					<div class="event-date">
						<h5 class="header5-b"><?php echo CFS()->get( 'month' ); ?></h5>
						<h5 class="header5-b"><?php echo CFS()->get( 'day' ); ?></h5>
					</div>
				</div>

				<div class="event-when-where">
					<p><span class="bold">When: </span><?php echo CFS()->get( 'when' ); ?></p>
					<p><span class="bold">Where: </span><?php echo CFS()->get( 'where' ); ?></p>
				</div>
			</div>

			<h5 class="header5-b">What's Happening...</h5>
			<div class="body"><?php echo CFS()->get( 'description' ); ?></div>
			<?php echo CFS()->get( 'eventbrite_url' ); ?>

		</div><!-- .event-info -->
	<?php endforeach;
	wp_reset_postdata();?>
</section><!-- .event-container -->
