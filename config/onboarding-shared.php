<?php
/**
 * Internet Chapters.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'Genesis Blocks', 'genesis-child-chapters' ),
			'slug'       => 'genesis-blocks/genesis-blocks.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
		],
	],
	'content'          => [
		'about'   => [
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
				'_genesis_hide_singular_image' => true,
			],
		],
        'projects'   => [
            'post_title'     => 'Projects',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/projects.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
        'single-projects'   => [
            'post_title'     => 'Single Projects',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/single-project.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
        'news'   => [
            'post_title'     => 'News',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/news.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
        'gallery'   => [
            'post_title'     => 'Gallery',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/gallery.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
        'get-involved'   => [
            'post_title'     => 'Get Involved',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/get-involved.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
        'announcements'   => [
            'post_title'     => 'Announcements',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/announcements.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
		'contact-us' => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],

        ],
            'terms-of-use'   => [
                'post_title'     => 'Terms of Use',
                'post_content'   => require dirname( __FILE__ ) . '/import/content/terms.php',
                'post_type'      => 'page',
                'post_status'    => 'publish',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
                'meta_input'     => [
                    '_genesis_layout'              => 'full-width-content',
                    '_genesis_hide_title' => true,
                    '_genesis_hide_singular_image' => true,
                ],
            ],
        'privacy-policy'   => [
            'post_title'     => 'Privacy Policy',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/privacy.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ],
	],
	'navigation_menus' => [
		'primary' => [
			'home' => [
				'title' => 'Home',
			],
			'about'    => [
				'title' => 'About Us',
			],
            'projects'  => [
                'title' => 'Projects',
            ],
            'gallery'  => [
                'title' => 'Gallery',
            ],
			'contact'  => [
				'title' => 'Contact Us',
			],
		],
	],
	'widgets'          => [
		'footer-1' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => '',
					'text'   => '<p>Footer Col One Goes here, Logo and Social Icons.<p>',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
        'footer-copyright' => [
            [
                'type' => 'text',
                'args' => [
                    'title'  => '',
                    'text'   => '<p>Footer Copyright One Goes Here.<p>',
                    'filter' => 1,
                    'visual' => 1,
                ],
            ],
        ],
	],
];
