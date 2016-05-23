<?php
/**
 * TJ Genesis Child Theme.
 *
 * This file adds functions to the TJ Genesis Child Theme.
 *
 * @package TJ Genesis Child
 * @author  StudioPress | Customized by Tim Jensen
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Setup Theme
include_once( CHILD_DIR . '/lib/theme-defaults.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'tj-genesis-child', apply_filters( 'child_theme_textdomain', CHILD_DIR . '/languages', 'tj-genesis-child' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'TJ Genesis Child Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '1.0.1' );

//* Enqueue Scripts and Styles
include_once( CHILD_DIR . '/lib/enqueue.php' );

//* Register support for theme features
include_once( CHILD_DIR . '/lib/theme-supports.php' );

//* Register support for theme features
include_once( CHILD_DIR . '/lib/setup-site-header.php' );

//* Register support for theme features
include_once( CHILD_DIR . '/lib/setup-site-inner.php' );

//* Register support for theme features
include_once( CHILD_DIR . '/lib/setup-site-footer.php' );
