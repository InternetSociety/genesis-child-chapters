<?php
/**
 * Internet Chapters appearance settings.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_child_chapters_default_colors = [
	'link'   => '#2B72D6',
	'accent' => '#40B2A4',
	'ground-navy' => '#0c1c2c',
	'neutral-white' => '#eff2ec',
	'neutral-putty' => '#DEDAD0',
	'depth-green' => '#085856',
	'depth-blue' => '#24366E',
	'accent-purple' => '#7E245C',
	'depth-teal' => '#143E50',
	'accent-orange' => '#D25238',
	'accent-yellow' => '#EECA4A',
	'neutral-green' => '#D0E6DA',
];

$genesis_child_chapters_link_color = get_theme_mod(
	'genesis_child_chapters_link_color',
	$genesis_child_chapters_default_colors['link']
);
$genesis_child_chapters_accent_color = get_theme_mod(
	'genesis_child_chapters_accent_color',
	$genesis_child_chapters_default_colors['accent']
);
$genesis_child_chapters_ground_navy_color = get_theme_mod(
	'genesis_child_chapters_ground_navy_color',
	$genesis_child_chapters_default_colors['ground-navy']
);
$genesis_child_chapters_neutral_white_color = get_theme_mod(
	'genesis_child_chapters_neutral_white_color',
	$genesis_child_chapters_default_colors['neutral-white']
);
$genesis_child_chapters_neutral_putty_color = get_theme_mod(
	'genesis_child_chapters_neutral_putty_color',
	$genesis_child_chapters_default_colors['neutral-putty']
);
$genesis_child_chapters_depth_green_color = get_theme_mod(
	'genesis_child_chapters_depth_green_color',
	$genesis_child_chapters_default_colors['depth-green']
);
$genesis_child_chapters_depth_blue_color = get_theme_mod(
	'genesis_child_chapters_depth_blue_color',
	$genesis_child_chapters_default_colors['depth-blue']
);
$genesis_child_chapters_accent_purple_color = get_theme_mod(
	'genesis_child_chapters_accent_purple_color',
	$genesis_child_chapters_default_colors['accent-purple']
);
$genesis_child_chapters_depth_teal_color = get_theme_mod(
	'genesis_child_chapters_depth_teal_color',
	$genesis_child_chapters_default_colors['depth-teal']
);
$genesis_child_chapters_accent_orange_color = get_theme_mod(
	'genesis_child_chapters_accent_orange_color',
	$genesis_child_chapters_default_colors['accent-orange']
);
$genesis_child_chapters_accent_yellow_color = get_theme_mod(
	'genesis_child_chapters_accent_yellow_color',
	$genesis_child_chapters_default_colors['accent-yellow']
);
$genesis_child_chapters_neutral_green_color = get_theme_mod(
	'genesis_child_chapters_neutral_green_color',
	$genesis_child_chapters_default_colors['neutral-green']
);

$genesis_child_chapters_link_color_contrast   = genesis_child_chapters_color_contrast( $genesis_child_chapters_link_color );
$genesis_child_chapters_link_color_brightness = genesis_child_chapters_color_brightness( $genesis_child_chapters_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1280,
	'button-bg'            => $genesis_child_chapters_link_color,
	'button-color'         => $genesis_child_chapters_link_color_contrast,
	'button-outline-hover' => $genesis_child_chapters_link_color_brightness,
	'link-color'           => $genesis_child_chapters_link_color,
	'default-colors'       => $genesis_child_chapters_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Blue', 'genesis-child-chapters' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_child_chapters_link_color,
		],
		[
			'name'  => __( 'Green', 'genesis-child-chapters' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_child_chapters_accent_color,
		],
		[
			'name'  => __( 'Ground Navy', 'genesis-child-chapters' ),
			'slug'  => 'ground_navy',
			'color' => $genesis_child_chapters_ground_navy_color,
		],
		[
			'name'  => __( 'Neutral White', 'genesis-child-chapters' ),
			'slug'  => 'neutral_white',
			'color' => $genesis_child_chapters_neutral_white_color,
		],
				[
			'name'  => __( 'Neutral Putty', 'genesis-child-chapters' ),
			'slug'  => 'neutral_putty',
			'color' => $genesis_child_chapters_neutral_putty_color,
		],
		[
			'name'  => __( 'Depth Green', 'genesis-child-chapters' ),
			'slug'  => 'depth_green',
			'color' => $genesis_child_chapters_depth_green_color,
		],
		[
			'name'  => __( 'Depth Blue', 'genesis-child-chapters' ),
			'slug'  => 'depth_blue',
			'color' => $genesis_child_chapters_depth_blue_color,
		],
		[
			'name'  => __( 'Accent Purple', 'genesis-child-chapters' ),
			'slug'  => 'accent_purple',
			'color' => $genesis_child_chapters_accent_purple_color,
		],
		[
			'name'  => __( 'Depth Teal', 'genesis-child-chapters' ),
			'slug'  => 'depth_teal',
			'color' => $genesis_child_chapters_depth_teal_color,
		],
		[
			'name'  => __( 'Accent Orange', 'genesis-child-chapters' ),
			'slug'  => 'accent_orange',
			'color' => $genesis_child_chapters_accent_orange_color,
		],
		[
			'name'  => __( 'Accent Yelow', 'genesis-child-chapters' ),
			'slug'  => 'accent_yellow',
			'color' => $genesis_child_chapters_accent_yellow_color ,
		],
		[
			'name'  => __( 'Neutral Teal', 'genesis-child-chapters' ),
			'slug'  => 'neutral_green',
			'color' => $genesis_child_chapters_neutral_green_color,
		],
	],
	'editor-font-sizes'    => [
		[
			'name' => __( 'Small', 'genesis-child-chapters' ),
			'size' => 16,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'genesis-child-chapters' ),
			'size' => 20,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'genesis-child-chapters' ),
			'size' => 24,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'genesis-child-chapters' ),
			'size' => 28,
			'slug' => 'larger',
		],
	],
];
