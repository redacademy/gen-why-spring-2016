<?php
/**
 * Template part for displaying posts.
 *
 * @package Genwhy_Theme
 */

?>

	<section class="video-container">
		<div class="clip-contain">
				<div class="video-banner-imgs">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full' ); ?>
					<?php endif; ?>
				</div>
				<div class="video-title-button">
					<?php the_title( sprintf( '<h2 class="entry-title header2-a"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<a href="<?php echo esc_url( get_permalink() ) ?>" class="button fom-button">Find Out More</a>
				</div>
		</div><!-- .clip-contain -->
</section><!-- .event-clip-container -->