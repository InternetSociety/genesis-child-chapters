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
    /* not used by Henri
	'plugins'          => [
		[
			'name'       => __( 'Genesis Blocks', 'genesis-child-chapters' ),
			'slug'       => 'genesis-blocks/genesis-blocks.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-blocks/',
		],
	],
    */
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
        'blog'   => [
            'post_title'     => 'News',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/blog.php',
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
        'search'   => [
            'post_title'     => 'Search',
            'post_content'   => require dirname( __FILE__ ) . '/import/content/search.php',
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'meta_input'     => [
                '_genesis_layout'              => 'full-width-content',
                '_genesis_hide_title' => true,
                '_genesis_hide_singular_image' => true,
            ],
        ]
	],
     /* not used by Henri
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
    */
	'widgets'          => [
		'footer-1' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => '',
					'text'   => '<section id="simple-social-icons-2" class="widget simple-social-icons">
                    <ul class="aligncenter">
                        <li class="ssi-facebook">
                            <a href="https://www.facebook.com/InternetSociety" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/facebook.svg">
                            </a>
                        </li>
                        <li class="ssi-instagram">
                            <a href="https://www.instagram.com/internetsociety/" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/instagram.svg">
                            </a>
                        </li>
                        <li class="ssi-linkedin">
                            <a href="https://www.linkedin.com/company/internet-society/" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/linkedin.svg">
                            </a>
                            </li>
                        <li class="ssi-rss">
                            <a href="https://www.internetsociety.org/feed/" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/rss.svg">
                            </a>
                        </li>
                        <li class="ssi-twitter">
                            <a href="https://twitter.com/internetsociety" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/X.svg"></a>
                        </li>
                        <li class="ssi-youtube"><a href="https://www.youtube.com/user/InternetSocietyVideo" target="_blank" rel="noopener noreferrer">
                            <img width="30" height="30" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/social/white/youtube.svg"></a>
                        </li>
                    </ul>
                    </section>',
					'filter' => 1,
					'visual' => 0,
				],
			],
        ],

        'footer-2' => [
            [
                'type' => 'text',
                'args' => [
                    'title'  => '',
                    'text'   => '<section id="media_image-2" class="widget widget_media_image"><div class="widget-wrap"><a href="https://assets.internetsociety.org/%20style%20guide/#page/F92B2B59-A837-42C4-BCA14EEBF43CD20BURL"><img width="300" height="300" src="/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg" class="image wp-image-838  attachment-medium size-medium" alt="Internet Society Logo Header 233px 47" style="max-width: 100%; height: auto;" decoding="async" loading="lazy" srcset="https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 150w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 300w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 1024w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 1536w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 2048w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 750w, https://chapter-template.internetsociety.org/wp-content/uploads/2024/01/internet-society-logo-header-233px-47.svg 600w" sizes="(max-width: 300px) 100vw, 300px"></a></div></section>',
                    'filter' => 0,
                    'visual' => 0,
                ],
            ],
		],
        'footer-copyright' => [
            [
                'type' => 'text',
                'args' => [
                    'title'  => '',
                    'text'   => '<p class="footer-address">Physical Address
                                of the Chapter
                                +1-111-111-111</p>
                                <p class="footer-copy"><small>© [year] Internet Society Chapter</small></p>',
                    'filter' => 1,
                    'visual' => 1,
                ],
            ],
        ],
	],
];
