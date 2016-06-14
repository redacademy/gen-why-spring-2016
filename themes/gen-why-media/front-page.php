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
				<h2 class="header2-a">What Are People Saying About Us</h2>
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
				<h2 class="header2-a">Upcoming Event</h2>
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

			<!-- About Us -->
			<section class="about-us">
					<h2 class="header2-a">About Us</h2>

					<h2 class="header2-a">Our Team</h2>
					<div class="founder-profile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tara-pic.png" alt="Tara" />
						<h3 class="header3">Tara Mahoney</h3>
						<p>Meet our Co-Founder Tara. Creative director, documentary maker, and exhuberant PhD academic with a heart for social change!</p>
						<p class="display-on-desk">Tara is currently completing her PhD in Communications at Simon Fraser University. Her research explores emerging cultural forms of political engagement.</p>
					</div>
					<div class="founder-profile">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fiona-pic.png" alt="Fiona" />
						<h3 class="header3">Fiona Rayher</h3>
						<p>Fiona is Gen Why's other half. Co-founder, Artistic director and social minded documentary maker. Fiona is a human rights activist to the core.</p>
						<p class="display-on-desk"> Social minded documentary maker, in various human rights groups and hopes to bring change. Her first feature documentary, recently released, titled Fractured Land, has been extensively reviewed by the CBC, Globe and Mail, National Post, Huffington Post, and others.</p>
					</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
