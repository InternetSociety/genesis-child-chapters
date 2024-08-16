<?php
/**
 * Internet Chapters child theme.
 *
 * Theme supports.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-child-chapters/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 47,
		'width'       => 233,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 1,
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'genesis-child-chapters' ),
		'secondary' => __( 'Footer Menu', 'genesis-child-chapters' ),
	],
];
