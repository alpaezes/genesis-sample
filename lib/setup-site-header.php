<?php
/**
 * Genesis Starter.
 *
 * This file sets up the functionality in the site-header container of the TJ Genesis Child Theme.
 *
 * @package Genesis Starter
 * @author  Tim Jensen
 * @license GPL-2.0+
 */

//* Add SVG definitions to <head>.
add_action( 'wp_head', 'genesis_sample_include_svg_icons', 999 );
function genesis_sample_include_svg_icons() {

	// Define SVG sprite file.
	$svg_icons = get_template_directory() . 'images/svg-icons.svg';

	// If it exsists, include it.
	if ( file_exists( $svg_icons ) ) {
		require_once( $svg_icons );
	}
}
