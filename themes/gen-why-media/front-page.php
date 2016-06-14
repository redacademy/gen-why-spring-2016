<?php
/**
 * The front page file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Hero Slider  -->


			<!-- Get Involved -->
			<section class="get-involved container">
				<div class="">
					<h1>Why Get Involved?</h1>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Community.png" alt="Community" />
							<h3>Community</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ShapeYourCity.png" alt="Shape Your City" />
							<h3>Shape Your City</h3>
						 </li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Collaborate.png" alt="Collaborate" class="collaborate"/>
							<h3>Collaborate</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Connect.png" alt="Connect" />
							<h3>Connect</h3>
						</li>
					</ul>
				</div>
			</section>


			<!-- What we are doing -->
			<section class="what-we-doing container">
				<div class="what-we-doing-img">
					<h1>What We're Doing</h1>
					<a href="#" class="find-out-btn">Find Out More</a>
				</div>
			</section>

			<!-- What People Say -->


			<!-- Latest Event Clips -->
			<section class="latest-event">
				<div class="latest-event-img">
					<h1>Latest Event Clips</h1>
					<a href="#" class="find-out-btn">Find Out More</a>
				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
