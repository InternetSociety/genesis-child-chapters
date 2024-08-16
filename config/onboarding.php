<?php
/**
 * Internet Chapters.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_child_chapters_shared_content = genesis_get_config( 'onboarding-shared' );

return [
	'starter_packs' => [
		'color'       => [
			'title'       => __( 'Chapters', 'genesis-child-chapters' ),
			'description' => __( 'A pack with a homepage designed for Chapters.', 'genesis-child-chapters' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-color.jpg',
			'demo_url'    => 'https://demo.studiopress.com/genesis-child-chapters/home-color/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $genesis_child_chapters_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Demo Home',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/home-color.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$genesis_child_chapters_shared_content['content']
				),
				'navigation_menus' => $genesis_child_chapters_shared_content['navigation_menus'],
				'widgets'          => $genesis_child_chapters_shared_content['widgets'],
			],
		],
	],
];
