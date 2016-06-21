<?php
/**
 * Template Name: Services page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Service Hero Banner -->
			<div class="service-hero">
				<h1 class="header1"><?php the_title(); ?></h1>
			</div>

			<?php echo CFS()->get( 'where' ); ?>

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
