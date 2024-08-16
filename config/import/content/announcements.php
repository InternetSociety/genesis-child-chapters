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

$genesis_child_chapters_ann_header_image_url = CHILD_URL . '/config/import/images/projects/blue-pattern-header.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header dark-blue-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header dark-blue-heading"><!-- wp:cover {"url":"$genesis_child_chapters_ann_header_image_url","id":416,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","className":"dark-overlay"} -->
<div class="wp-block-cover dark-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="Blue Pattern Header" src="$genesis_child_chapters_ann_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1>Announcements</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#eef2ec"}},"className":"inner-fixed announcements-search-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-fixed announcements-search-wrap has-background" style="background-color:#eef2ec"><!-- wp:shortcode -->
[ivory-search id="551" title="Announcements Search"]
<!-- /wp:shortcode --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#eef2ec"}},"className":"news-section page-section inner-fixed padding-top-bottom-60"} -->
<div class="wp-block-group news-section page-section inner-fixed padding-top-bottom-60 has-background" style="background-color:#eef2ec"><!-- wp:shortcode -->
[ajax_load_more id="announcements-all" container_type="div" css_classes="announcements-container" post_type="announcement" posts_per_page="12"]
<!-- /wp:shortcode --></div>
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
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum, ©&nbsp;Dolor Sit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
