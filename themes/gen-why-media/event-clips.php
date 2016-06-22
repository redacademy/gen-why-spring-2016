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
				<h1 class="header1"><?php the_title(); ?></h1>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="eventone-bg watch-center">
			<?php get_template_part( 'template-parts/content', 'content-event-clip' ); ?>
        		<h2 class="header2-b h2-change">Bring Your Boomers 2016</h2>
        		<a href="#" class="button button-a fom-button">Find Out More</a>
      		</div>

		<?php endwhile; // End of the loop. ?>
		</main>
	</div>

<?php get_footer(); ?>