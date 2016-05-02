<?php
/**
 * Genesis Starter.
 *
 * This file sets up the functionality in the site-footer container of the TJ Genesis Child Theme.
 *
 * @package Genesis Starter
 * @author  Tim Jensen
 * @license GPL-2.0+
 */

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}
