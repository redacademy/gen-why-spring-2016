<?php
/**
 * Template Name: Short Videos Page
 *
 * @package Genwhy_Theme
 */

get_header(); ?>
<h4 style="position:fixed;top:100px;left:0;z-index:600;">short-videos.php</h4>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="watchhero .shortbg">
				<h1 class="header1">Short Videos</h1>
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