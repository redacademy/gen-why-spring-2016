<?php
/**
 * Template Name: Event Clips Page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="watchhero">
				<h1 class="header1">Event Clips</h1>
			</div>
			<div id="scroll-target" class="docbg watch-center">
				<h2 class="header2-b h2-change"><?php the_title(); ?></h2>
				<a href="event-clips" class="button button-a fom-button">Find Out More</a>
			</div>
			<div class="shortbg watch-center">
				<h2 class="header2-b h2-change"></h2>
				<a href="short-videos" class="button button-a fom-button">Find Out More</a>
			</div>
		</main>
	</div>

<?php get_footer(); ?>