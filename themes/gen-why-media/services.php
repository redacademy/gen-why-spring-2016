<?php
/**
 * Template Name: Services page
 *
 * @package Genwhy_Theme
 */?>
<div class="services-page">

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Service Hero Banner -->
			<section class="services-hero-container">

				<div class="services-hero-banner">
						<div class="services-hero" data-type="background" data-speed="10"></div>
						<div class="services-hero-title">
							<h1 class="main-header"><?php the_title(); ?></h1>
						</div>
				</div><!-- .services-hero-banner -->

				<div id="scroll-target" class="services-sub-banner">
					<div class="services-info">
							<p>Gen Why Media is a female owned and operated creative engagement agency. We specialize in new forms of public participation and cross-generational dialogue.</p>
					</div>
					<div class="services-circle"></div>
				</div><!-- .services-sub-banner -->
			</section><!-- .services-hero-container -->

			<!-- What We Offer -->

			<section class="what-we-offer container">
				<div>
					<h2 class="content-header-dark">What We Offer</h2>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/connect-icon.png" alt="Web" />
							<h3 class="colored-header-dark">Web</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/collaborate-icon.png" alt="Engagement" class="engagement" />
							<h3 class="colored-header-dark">Engagement</h3>
						 </li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/public-art.png" alt="Public Art" />
							<h3 class="colored-header-dark">Public Art</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/events.png" alt="Events" />
							<h3 class="colored-header-dark">Events</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/film.png" alt="Film" />
							<h3 class="colored-header-dark">Film</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/audience.png" alt="Connect" />
							<h3 class="colored-header-dark">Audience</h3>
						</li>
					</ul>
				</div>
			</section><!-- .what-we-offer -->


			<!-- Want to Create Social Change? -->
			<?php get_template_part( 'template-parts/content', 'social-change' ); ?>

			<!-- Our Story -->

			<section class="our-story-container">
					<div class="founder-banner" data-type="background" data-speed="10">
						<h2 class="content-header-dark about-us">About Us</h2>
						<div class="our-story-circle"></div>
					</div>
					<h2 class="content-header-dark our-story-title">Our Story</h2>
					<div class="our-story-info">
							<?php echo wp_kses_post(CFS()->get( 'our_story' )); ?>
					</div>
			</section><!-- .our-story-container -->

			<!-- Our Team -->

			<section class="our-team-container">
				<iframe src="https://player.vimeo.com/video/23997768" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div class="our-team-info">
						<h2 class="content-header-dark our-story-title">Our Team</h2>
					<?php echo wp_kses_post(CFS()->get( 'our_team' )); ?>
				</div>
			</section>

			<!-- Previous Partners -->
			<section class="prev-part-display">
					<?php get_template_part( 'template-parts/content', 'prev-parts' ); ?>
			</section>


			<!-- What we are doing -->
			<?php get_template_part( 'template-parts/content', 'what-we-do' ); ?>

			<!-- Stay Connected With Us -->
			<?php get_template_part( 'template-parts/content', 'social' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
