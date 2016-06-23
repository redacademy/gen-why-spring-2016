<?php
/**
 * Template part for displaying social media.
 *
 * @package Genwhy_Theme
 */

?>

<!-- Stay Connected With Us -->

<section class="connect-us">
	<h2 class="header2-a">Stay Connected With Us</h2>
	<div class="connect-container">

		<div class="twit-connect connect-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter-icon.png" alt="Twitter" />
			<a href="https://twitter.com/genwhymedia" class="connect-btn twit-btn">Follow</a>
		</div>

		<div class="insta-connect connect-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram-icon.png" alt="Instagram" />
			<img src="" alt="" />
			<a href="https://www.instagram.com/genwhymedia" class="connect-btn insta-btn">Follow</a>
		</div>

		<div class="email-connect connect-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail-icon.png" alt="Email" />
			<p>Want to know about our next event?</p>
			<input type="text" name="name" placeholder="Type your email here...">
			<a href="#" class="connect-btn email-btn">Subscribe</a>
		</div>

	</div><!-- .connect-container -->
</section><!-- .connect-us -->
