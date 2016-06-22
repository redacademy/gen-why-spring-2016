<?php
/**
 * The front page file.
 *
 * @package Genwhy_Theme
 */?>

 <div class="front-page">
 	<?php 	get_header(); ?>
 </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Hero Slider  -->

			<section class="hero-slider-container">

				<ul class="bxslider-hero hero-banner-list">
					<?php $hero_image = array(
						'post_type' => 'banner_images',
						'posts_per_page' => 10,
						'order' => 'ASC',
						'orderby' => 'name');
            $herobanner = get_posts( $hero_image );
      			foreach ( $herobanner as $post ) : setup_postdata( $post ); ?>

						<li>
							<div class="banner-wrap">
								<div class="banner-image">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="banner-info">
									<h2 class="header2-b">We Value...</h2>
									<h1 class="header1"><?php the_title(); ?></h1>
									<div class="header4-sub"><?php the_content(); ?></div>
								</div>
							</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul>

			</section>

			<!-- Get Involved -->

			<section id="scroll-target" class="get-involved container">
				<div class="">
					<h2 class="header2-a">Why Get Involved?</h2>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/community-icon.png" alt="Community" />
							<h3 class="header3-b">Community</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/shape-your-city.png" alt="Shape Your City" />
							<h3 class="header3-b">Shape Your City</h3>
						 </li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/collaborate-icon.png" alt="Collaborate" class="collaborate"/>
							<h3 class="header3-b">Collaborate</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/connect-icon.png" alt="Connect" />
							<h3 class="header3-b">Connect</h3>
						</li>
					</ul>
				</div>
			</section><!-- .get-involved -->

			<!-- What we are doing -->

			<?php get_template_part( 'template-parts/content', 'what-we-do' ); ?><!-- .what-we-doing -->

			<!-- What People Say -->

		<section class="reviews-container">
				<h2 class="header2-a">What Are People Saying About Us</h2>

					<ul class="bxslider-review reviews-list">
						<?php $review_loop = array(
							'post_type' => 'review_cpt',
							'posts_per_page' => 4,
							'order' => 'ASC',
							'orderby' => 'date');
              $reviewposts = get_posts( $review_loop );
        			foreach ( $reviewposts as $post ) : setup_postdata( $post ); ?>
							<li>
								<div class="review-wrap">
									<div class="review-profile">
										<div class="review-image">
													<?php the_post_thumbnail('small'); ?>
										</div>
										<h1 class="body-b"><?php the_title(); ?></h1>
									</div>
									<div class="review-content">
										<div class="form-font"><?php the_content(); ?></div>
									</div>
								</div>
							</li>
						<?php endforeach;
										wp_reset_postdata(); ?>
					</ul>
			</section><!-- .what-people-say -->

			<!-- Latest Event Clips -->

			<section class="latest-event">
				<div class="latest-event-img" data-type="background" data-speed="10">
					<h2 class="header2-b">Latest Event Clips</h2>
					<div class="find-out-btn">
						<a href="event-clips">Find Out More</a>
					</div>
				</div>
			</section><!-- .latest-event -->

			<!-- Upcoming Event -->
      <section class="events-front-page">
        			<?php get_template_part( 'template-parts/content', 'events' ); ?><!-- .upcoming-event -->
      </section>


			<!-- Want to Create Social Change? -->

			<?php get_template_part( 'template-parts/content', 'social-change' ); ?><!-- .create-change -->

			<!-- About Us -->

			<section class="about-us">
					<h2 class="header2-a">About Us</h2>

					<div class="video-wrapper">
						<iframe width: "560"; height: "349"; src="https://www.youtube.com/embed/SfAVSLcA250" frameborder="0" allowfullscreen
						></iframe>
					</div><!-- .video-wrapper-->

					<h2 class="header2-a our-team">Our Team</h2>
					<div class="founder-profile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tara-pic.png" alt="Tara" />

						<div class="about-text">
							<h3 class="header3">Tara Mahoney</h3>
							<p class="body-a">Meet our Co-Founder Tara. Creative director, documentary maker, and exhuberant PhD academic with a heart for social change!</p>
							<p class="display-on-desk body-a">Tara is currently completing her PhD in Communications at Simon Fraser University. Her research explores emerging cultural forms of political engagement.</p>
						</div>
					</div><!-- .founder-profile -->

					<div class="founder-profile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fiona-pic.png" alt="Fiona" />

						<div class="about-text">
							<h3 class="header3">Fiona Rayher</h3>
							<p class="body-a">Fiona is Gen Why's other half. Co-founder, Artistic director and social minded documentary maker. Fiona is a human rights activist to the core.</p>
							<p class="display-on-desk body-a"> Social minded documentary maker, in various human rights groups and hopes to bring change. Her first feature documentary, recently released, titled Fractured Land, has been extensively reviewed by the CBC, Globe and Mail, National Post, Huffington Post, and others.</p>
						</div>
					</div><!-- .founder-profile -->
			</section><!-- .about-us -->

			<!-- Previous Partners -->

			<?php get_template_part( 'template-parts/content', 'prev-parts' ); ?><!-- .prev-parts -->

			<!-- Stay Connected With Us -->

			<?php get_template_part( 'template-parts/content', 'social' ); ?><!-- .connect-us -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
