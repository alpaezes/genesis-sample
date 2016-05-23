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

/**
 * Enqueue theme styles and scripts
 */
function genesis_sample_enqueue_scripts_styles() {

	wp_enqueue_style( 'tj-genesis-child-fonts', '//fonts.googleapis.com/css?family=Roboto:300,500,900', array(), CHILD_THEME_VERSION );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'tj-genesis-child-theme', CHILD_URL . '/style.css', array(), CHILD_THEME_VERSION );

	wp_enqueue_script( 'tj-genesis-child-responsive-menu', CHILD_URL . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );

	wp_localize_script( 'tj-genesis-child-responsive-menu', 'genesisSampleL10n', $output );

		$output = array(
			'mainMenu' => __( 'Menu', 'tj-genesis-child' ),
			'subMenu'  => __( 'Menu', 'tj-genesis-child' ),
		);

}
