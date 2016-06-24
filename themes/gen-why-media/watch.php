<?php
/**
 * Template Name: Watch Template
 *
 * @package Genwhy_Theme
 */?>
<div class="watch-page">

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="watchhero">
				<h1 class="main-header">Watch</h1>
			</div>
			<div id="scroll-target" class="eventbg watch-center">
				<h2 class="content-header-light h2-change">Event Clips</h2>
				<a href="<?php echo get_post_type_archive_link( 'event_clips' ); ?>" class="button button-font fom-button">Find Out More</a>
			</div>
			<div class="shortbg watch-center">
				<h2 class="content-header-light h2-change">Short Videos</h2>
				<a href="<?php echo get_post_type_archive_link( 'short_video' ); ?>" class="button button-font fom-button">Find Out More</a>
			</div>
			<div class="docbg watch-center">
				<h2 class="content-header-light h2-change">Documentary</h2>
				<a href="http://www.fracturedland.com/" class="button button-font fom-button">Find Out More</a>
			</div>
		</main>
	</div>
</div>

<?php get_footer(); ?>
