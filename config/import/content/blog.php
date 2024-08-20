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

$blog_url = site_url() .'/blog/';

$genesis_child_chapters_news_header_image_url = CHILD_URL . '/config/import/images/projects/blue-pattern-header.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header dark-blue-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header dark-blue-heading"><!-- wp:cover {"url":"$genesis_child_chapters_news_header_image_url","id":416,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","className":"dark-overlay"} -->
<div class="wp-block-cover dark-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="Blue Pattern Header" src="$genesis_child_chapters_news_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"gbResponsiveSettings":{}} -->
<h1 class="wp-block-heading">Blog</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section inner-fixed padding-top-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section inner-fixed padding-top-60"><!-- wp:paragraph -->
<p>Use this area to give a summary of the types of blog posts and announcements people can expect to find on this page (e.g., informative stories about chapter work, announcements about upcoming events/volunteer opportunities, etc.)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-section page-section inner-fixed padding-top-bottom-60"} -->
<div class="wp-block-group news-section page-section inner-fixed padding-top-bottom-60"><!-- wp:heading {"gbResponsiveSettings":{}} -->
<h2 class="wp-block-heading">Blog</h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[allRecent]
<!-- /wp:shortcode -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="$blog_url">Read More Posts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-section page-section inner-fixed padding-top-bottom-60"} -->
<div class="wp-block-group news-section page-section inner-fixed padding-top-bottom-60"><!-- wp:heading {"gbResponsiveSettings":{}} -->
CONTENT;
