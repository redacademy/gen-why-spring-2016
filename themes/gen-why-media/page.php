<?php
/**
 * The template for displaying all pages.
 *
 * @package Genwhy_Theme
 */

get_header(); ?>
<h4 style="position:fixed;top:100px;left:0;z-index:600;">page.php</h4>

<div id="primary" class="content-area contact-us-wrapper">
	<main id="main" class="site-main contact-us-container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
