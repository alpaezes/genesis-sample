<?php
/**
 * TJ Genesis Child Theme.
 *
 * This file sets up the functionality in the site-inner container of the TJ Genesis Child Theme.
 *
 * @package TJ Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */

//* Add Image Sizes
add_image_size( 'featured-image', 680, 400, TRUE );

add_filter( 'theme_page_templates', 'be_remove_genesis_page_templates' );

/**
 * Remove Genesis Page Templates
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/remove-genesis-page-templates
 *
 * @param array $page_templates
 * @return array
 */
function be_remove_genesis_page_templates( $page_templates ) {
    
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );

	return $page_templates;

}
