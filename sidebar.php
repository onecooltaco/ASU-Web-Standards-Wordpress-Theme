<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package asu-wordpress-web-standards-theme
 */
?>
	<div id="secondary" class="widget-area row" role="complementary">
		<?php 
		if ( is_active_sidebar( 'footer' ) ) :
			dynamic_sidebar( 'footer' );
		endif; 
		?>
	</div><!-- #secondary -->
