<?php
/**
 * The front page file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<h4 style="position:absolute;top:0;left:0;">front-page.php</h4>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Hero Slider  -->


			<!-- Get Involved -->
			<section class="get-involved container">
				<div class="">
					<h2 class="header2-a">Why Get Involved?</h2>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/community.png" alt="Community" />
							<h3 class="header3-b">Community</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/shape-your-city.png" alt="Shape Your City" />
							<h3 class="header3-b">Shape Your City</h3>
						 </li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/collaborate.png" alt="Collaborate" class="collaborate"/>
							<h3 class="header3-b">Collaborate</h3>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/connect.png" alt="Connect" />
							<h3 class="header3-b">Connect</h3>
						</li>
					</ul>
				</div>
			</section>


			<!-- What we are doing -->
			<section class="what-we-doing">
				<div class="what-we-doing-img">
					<h2 class="header2-b">What We're Doing</h2>
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
					<h2 class="header2-b">Latest Event Clips</h2>
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
					<h2 class="header2-b">Want to Create Social Change?</h2>
					<div class="inspire-btn">
						<a href="/contact" >Inspire Us</a>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
