<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Genwhy_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title header1">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		<!-- Stay Connected With Us -->
		<?php get_template_part( 'template-parts/content', 'social' ); ?><!-- .connect-us -->

	</div><!-- .entry-content -->
</article><!-- #post-## -->
