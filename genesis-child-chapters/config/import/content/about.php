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

$genesis_child_chapters_about_header_image_url = CHILD_URL . '/config/import/images/about/Green-pattern-header.jpg';
$genesis_child_chapters_about_pattern_image_url = CHILD_URL . '/config/import/images/about/Green-pattern-medium-projects-page-1.jpg';


return <<<CONTENT
<!-- wp:group {"className":"inner-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"$genesis_child_chapters_about_header_image_url","id":359,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="$genesis_child_chapters_about_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"gbResponsiveSettings":{}} -->
<h1 class="wp-block-heading">About Us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">Use this line for a short intro about the Chapter.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"inner-fixed page-section"} -->
<div class="wp-block-group inner-fixed page-section"><!-- wp:paragraph -->
<p>This portion of the page should communicate a short story of where and how the chapter started. Place the mission statement and values within the area of the page, explain the current activity, and describe the chapter’s objectives.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section col-with-left-img inner-fixed padding-top-bottom-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section col-with-left-img inner-fixed padding-top-bottom-60"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_about_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"gbResponsiveSettings":{}} -->
<h2 class="wp-block-heading">Membership</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p>Use this area to describe what being a member of the chapter entails. Pair the description with an engaging photo or video of your members. Draw people in and entice them to join your chapter as a member.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://admin.internetsociety.org/622619/Dashboard/List" target="_blank" rel="noreferrer noopener">Join Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section inner-fixed blue-bg col-with-right-img last-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section inner-fixed blue-bg col-with-right-img last-section"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"gbResponsiveSettings":{}} -->
<h2 class="wp-block-heading">About Internet Society</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p>Founded in 1992 by Internet pioneers, the Internet Society is a global charitable organization advocating for an open, globally connected, secure, and trustworthy Internet for everyone. Working with its community of over 100,000 members and more than 120 chapters and special interest groups around the world, the nonprofit organization helps build, promote, and defend the Internet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_about_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum, ©&nbsp;Dolor Sit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
