<?php
/**
 * TJ Genesis Child Theme.
 *
 * This file adds the theme styles and scripts to the TJ Genesis Child Theme.
 *
 * @package TJ Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */


add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
function genesis_sample_enqueue_scripts_styles() {

	wp_enqueue_style( 'tj-genesis-child-fonts', '//fonts.googleapis.com/css?family=Roboto:300,500,900', array(), CHILD_THEME_VERSION );

	wp_enqueue_style( 'dashicons' );

	//* Remove default stylesheet
	wp_deregister_style( 'tj-genesis-child-theme' );

	//* Add compiled stylesheet
	wp_register_style( 'tj-genesis-child-theme', get_stylesheet_directory_uri() . '/style.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'tj-genesis-child-theme' );

	wp_enqueue_script( 'tj-genesis-child-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );
	$output = array(
		'mainMenu' => __( 'Menu', 'tj-genesis-child' ),
		'subMenu'  => __( 'Menu', 'tj-genesis-child' ),
	);

	wp_localize_script( 'tj-genesis-child-responsive-menu', 'genesisSampleL10n', $output );

}
