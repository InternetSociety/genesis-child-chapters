<?php
/**
 * Internet Chapters child theme.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-child-chapters/
 */

/**
 * Genesis responsive menus settings. (Requires Genesis 3.0+.)
 */
return [
    'script' => [
        'mainMenu'          => sprintf( '<span></span><span></span><span></span><span class="sr-only">Menu Navigation</span>', __( '', 'genesis-child-chapters' ) ),
        'menuClasses' => [
            'others' => [ '.nav-primary' ],
        ],
    ],
    'extras' => [
        'media_query_width' => '1180px',
    ],
];
