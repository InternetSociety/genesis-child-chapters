<?php
/**
 * Internet Chapters.
 *
 * Homepage content optionally installed after theme activation.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_child_chapters_homepage_header_image_url = CHILD_URL . '/config/import/images/home/Header-Pattern-Green-1.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"https://chapter-template.isoc.org/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg","id":359,"alt":"Green Pattern Header","dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="https://chapter-template.isoc.org/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Wordpress theme for Internet Society Chapters</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">Content to be defined</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
CONTENT;
