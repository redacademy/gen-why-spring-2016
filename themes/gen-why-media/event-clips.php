<?php
/**
 * Template Name: Event Clips Page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="eventhero">
				<h1 class="header1">Event Clips</h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
		</main>
	</div>

<?php get_footer(); ?>