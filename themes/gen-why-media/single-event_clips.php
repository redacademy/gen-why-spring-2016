<?php
/**
 * The template for displaying all single posts.
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

<div class="nav-background"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-video' ); ?>

			<?php the_post_navigation(); ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
