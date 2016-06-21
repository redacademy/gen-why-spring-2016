<?php
/**
 * Template Name: Services page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<!-- Want to Create Social Change? -->
			<?php get_template_part( 'template-parts/content', 'social-change' ); ?><!-- .create-change -->

			<!-- Previous Partners -->
			<?php get_template_part( 'template-parts/content', 'prev-parts' ); ?><!-- .prev-parts -->

			<!-- What we are doing -->
			<?php get_template_part( 'template-parts/content', 'what-we-do' ); ?><!-- .what-we-doing -->

			<!-- Stay Connected With Us -->
			<?php get_template_part( 'template-parts/content', 'social' ); ?><!-- .connect-us -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
