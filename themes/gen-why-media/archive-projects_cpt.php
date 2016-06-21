<?php
/**
 * The template for displaying archive pages.
 *
 * @package Genwhy_Theme
 */

get_header(); ?>
<h4 style="position:fixed;top:100px;left:0;z-index:600;">archive-projects.php</h4>

	<div id="primary" class="content-area projects-page">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<!-- Upcoming Event -->

			<?php get_template_part( 'template-parts/content', 'events' ); ?><!-- .upcoming-event -->

			<div class="sub-title">
				<h2 class="header2-a">Past Works</h2>
				<?php get_search_form(); ?>
			</div>
			<section class="past-works-container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content', 'past-works' );
					?>

				<?php endwhile; ?>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
