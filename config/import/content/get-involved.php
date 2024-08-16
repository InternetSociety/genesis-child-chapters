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
$projects_url = site_url() .'/projects/';

$genesis_child_chapters_get_header_image_url = CHILD_URL . '/config/import/images/projects/blue-pattern-header.jpg';
$genesis_child_chapters_get_pattern_image_url = CHILD_URL . '/config/import/images/about/Green-pattern-medium-projects-page-1.jpg';


return <<<CONTENT
<!-- wp:group {"className":"inner-page-header dark-blue-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header dark-blue-heading"><!-- wp:cover {"url":"$genesis_child_chapters_get_header_image_url","id":416,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","className":"dark-overlay white-text"} -->
<div class="wp-block-cover dark-overlay white-text" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="Blue Pattern Header" src="$genesis_child_chapters_get_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"gbResponsiveSettings":{}} -->
<h1 class="wp-block-heading">Get Involved</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">Summarize the type of information people will receive if they subscribe to your email updates (e.g., latest news, reports, upcoming events, etc.).</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:genesis-blocks/gb-spacer -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:30px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:group {"className":"page-section col-with-project-img fixed-width fixed-960 padding-bottom-40","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section col-with-project-img fixed-width fixed-960 padding-bottom-40"><!-- wp:heading {"textAlign":"center","gbResponsiveSettings":{}} -->
<h2 class="wp-block-heading has-text-align-center">Ways To Get Involved</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-blocks inner-fixed padding-top-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group project-blocks inner-fixed padding-top-0"><!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_get_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Join the Chapter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two about why people should join your chapter.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_get_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Get Involved in a Project</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two prompting people to explore the projects your chapter is working on.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="$projects_url">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Attend an Event</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two explaining the types of events you hold and directing people to your events calendar.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Donate</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two explaining how donations help grow your chapter and fund your work.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Partner with Us</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two explaining how partners and your chapter can work together to accomplish more.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading {"level":3,"gbResponsiveSettings":{}} -->
<h3 class="wp-block-heading">Subscribe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A short sentence or two prompting people to subscribe for email updates about your chapter.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section inner-fixed blue-bg padding-top-bottom-60 col-with-right-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section inner-fixed blue-bg padding-top-bottom-60 col-with-right-img"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"gbResponsiveSettings":{}} -->
<h2 class="wp-block-heading">Impact of the Chapter Work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p>Use this section to describe specific people that have been helped/will be helped by this chapter. Share real people’s stories and how their lives were changed positively, or mention where they were in comparison to where they are now. Describe what volunteers do and how the chapter helps expand access to the Internet or defend the Internet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_get_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
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
