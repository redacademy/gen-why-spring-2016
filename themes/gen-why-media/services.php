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
			<section class="services-hero-banner">

				<div class="services-hero-container">
						<div class="services-hero"></div>
						<div class="services-hero-title">
							<h1 class="header1"><?php the_title(); ?></h1>
						</div>
				</div><!-- .services-hero-container -->

				<div class="services-sub-banner">
					<div class="services-info">
							<p>Gen Why Media is a female owned and operated creative engagement agency. We specialize in new forms of public participation and cross-generational dialogue.</p>
					</div>
					<div class="services-ball"></div>
				</div><!-- .services-sub-banner -->
			</section><!-- .services-hero-banner -->

			<!-- What We Offer -->
			<section class="what-we-offer">

			</section>

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
