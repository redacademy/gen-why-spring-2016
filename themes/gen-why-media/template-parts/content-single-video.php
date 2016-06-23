<?php
/**
 * Template part for displaying single video posts.
 *
 * @package Genwhy_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="video-container">
		<div class="entry-header video-banner-imgs">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</div><!-- .entry-header -->

		<div class="content-title video-title-button">
					<?php the_title( '<h1 class="entry-title header1">', '</h1>' ); ?>
		</div>
	</section>

		<div id="scroll-target" class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

</article><!-- #post-## -->
