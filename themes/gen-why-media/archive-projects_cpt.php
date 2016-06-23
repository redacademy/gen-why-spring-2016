<?php
/**
 * The template for displaying archive pages.
 *
 * @package Genwhy_Theme
 */?>
<div class="projects-page">
	<?get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header" data-type="background" data-speed="10">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<!-- Upcoming Event -->
			<section id="scroll-target" class="events-services-container">
				<?php get_template_part( 'template-parts/content', 'events' ); ?><!-- .upcoming-event -->
			</section>

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
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
