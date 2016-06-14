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
			<section class="what-we-doing">
				<div class="what-we-doing-img">
					<h1>What We're Doing</h1>
					<div class="find-out-btn">
						<a href="#" >Find Out More</a>
					</div>
				</div>
				<div class="blue-circle"></div>
			</section>

			<!-- What People Say -->
			<section class="what-people-say">
				<h1>What Are People Saying About Us</h1>
			</section>

			<!-- Latest Event Clips -->
			<section class="latest-event">
				<div class="latest-event-img">
					<h1>Latest Event Clips</h1>
					<div class="find-out-btn">
						<a href="#" >Find Out More</a>
					</div>
				</div>
			</section>

			<!-- Upcoming Events -->
			<section>
				<h1>Upcoming Event</h1>
			</section>

			<!-- Want to Create Social Change? -->
			<section class="create-change">
				<div class="create-change-img">
					<h1>Want to Create Social Change?</h1>
					<div class="inspire-btn">
						<a href="#" >Inspire Us</a>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
