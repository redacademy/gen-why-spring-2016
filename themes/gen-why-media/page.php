<?php
/**
 * The template for displaying all pages.
 *
 * @package Genwhy_Theme
 */?>
<div class="contact-us-page">

	<?get_header(); ?>

	<div id="primary" class="content-area contact-us-wrapper">
		<main id="main" class="site-main contact-us-container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>
