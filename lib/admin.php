<?php
/**
 * TJ Genesis Child Theme.
 *
 * This file configures Genesis Admin options
 *
 * @package TJ Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */


//* Unregister content/sidebar layout setting
//genesis_unregister_layout( 'content-sidebar' );

//* Unregister sidebar/content layout setting
//genesis_unregister_layout( 'sidebar-content' );

//* Unregister content/sidebar/sidebar layout setting
genesis_unregister_layout( 'content-sidebar-sidebar' );

//* Unregister sidebar/sidebar/content layout setting
genesis_unregister_layout( 'sidebar-sidebar-content' );

//* Unregister sidebar/content/sidebar layout setting
genesis_unregister_layout( 'sidebar-content-sidebar' );

//* Unregister full-width content layout setting
//genesis_unregister_layout( 'full-width-content' );

//* Update theme settings on reset
add_filter( 'genesis_theme_settings_defaults', 'tj_genesis_child_theme_defaults' );

//* Update theme settings on activation
add_action( 'after_switch_theme', 'tj_genesis_child_theme_setting_defaults' );

/**
* Updates theme settings on reset.
*
*/
function tj_genesis_child_theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 5;
	$defaults['content_archive']           = 'excerpts';
	$defaults['content_archive_limit']     = 0;
	$defaults['content_archive_thumbnail'] = 1;
    $defaults['image_size']                = 'medium';
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}


/**
* Updates theme settings on activation.
*
*/
function tj_genesis_child_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 5,
			'content_archive'           => 'excerpts',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 1,
            'image_size'                => 'medium',
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );

	}

	update_option( 'posts_per_page', 5 );

}
