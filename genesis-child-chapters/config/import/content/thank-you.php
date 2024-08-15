<?php
/**
 * Internet Chapters.
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_child_chapters_thanks_header_image_url = CHILD_URL . '/config/import/images/about/Green-pattern-header.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"$genesis_child_chapters_thanks_header_image_url","id":359,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="$genesis_child_chapters_thanks_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1>Submitted!</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Thank you for your submission.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section fixed-700 padding-top-bottom-60"} -->
<div class="wp-block-group page-section fixed-700 padding-top-bottom-60"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
