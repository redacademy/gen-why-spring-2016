<?php
/**
 * Template for showing Archive Short Video
 *
 * @package Genwhy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="watchhero">
				<h1 class="header1">Short Videos</h1>
			</div>
			<div id="scroll-target" class="docbg watch-center">
				<?php $event =  array(
				'post_type' => 'short_video_cpt',
				'posts_per_page' => 5,
				'order' => 'ASC',
				'orderby' => 'date');
			$eventposts = get_posts( $event );
			foreach ( $eventposts as $post ) : setup_postdata( $post ); ?>

					<h2 class="header2-b h2-change"><?php the_title(); ?></h2>
					<a href="#" class="button button-a fom-button">Find Out More</a>
			</div>
			<!-- <div class="shortbg watch-center">
				<h2 class="header2-b h2-change"></h2>
				<a href="short-videos" class="button button-a fom-button">Find Out More</a>
			</div> -->
		</main>
		<?php endforeach;
	wp_reset_postdata();?>
	</div>
<?php get_footer(); ?>