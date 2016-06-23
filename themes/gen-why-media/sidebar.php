<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Genwhy_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<h4 style="position:fixed;top:100px;left:0;z-index:600;">sidebar.php</h4>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->