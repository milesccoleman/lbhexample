<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Doko
 */


?>

<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); 
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('doko-sidebar-widget') ) :
		endif;
	?>
</aside><!-- #secondary -->
