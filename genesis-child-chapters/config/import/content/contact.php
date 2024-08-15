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

$genesis_child_chapters_contact_header_image_url = CHILD_URL . '/config/import/images/about/Green-pattern-header.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"$genesis_child_chapters_contact_header_image_url","id":359,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="$genesis_child_chapters_contact_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"gbResponsiveSettings":{}} -->
<h1 class="wp-block-heading">Contact Us</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section fixed-700 padding-top-bottom-60"} -->
<div class="wp-block-group page-section fixed-700 padding-top-bottom-60"><!-- wp:paragraph -->
<p>Provide an email address and sentence explaining how your site visitors can contact you for media inquiries related to your chapter and/or area of expertise</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#27376a"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="mailto:info@chapter.com" style="background-color:#27376a">Contact Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
