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

<!-- Video custom fields -->
<div class="vid-post-contain">
	<div class="video-one">
		<?php
			$youtube = get_post_meta($post->ID, 'video_one_url', true);
				echo '<object width="560" height="315"><param name="movie" value="' . $youtube . '?version=3&hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="' . $youtube . '?version=3&hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
		?>
	</div>

	<div class="video-two">
		<?php
			$youtube = get_post_meta($post->ID, 'video_two_url', true);
				echo '<object width="560" height="315"><param name="movie" value="' . $youtube . '?version=3&hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="' . $youtube . '?version=3&hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
		?>
	</div>

	<div class="video-three">
		<?php
			$youtube = get_post_meta($post->ID, 'video_three_url', true);
				echo '<object width="560" height="315"><param name="movie" value="' . $youtube . '?version=3&hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="' . $youtube . '?version=3&hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
		?>
	</div>
</div>			
		</div><!-- .event-info -->
	<?php endforeach;
	wp_reset_postdata();?>
</section><!-- .event-container -->

