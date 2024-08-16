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

$genesis_child_chapters_project_header_image_url = CHILD_URL . '/config/import/images/projects/blue-pattern-header.jpg';
$genesis_child_chapters_project_pattern_image_url = CHILD_URL . '/config/import/images/projects/Green-pattern-blog-page.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header dark-blue-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header dark-blue-heading"><!-- wp:cover {"url":"$genesis_child_chapters_project_header_image_url","id":416,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","className":"dark-overlay"} -->
<div class="wp-block-cover dark-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="Blue Pattern Header" src="$genesis_child_chapters_project_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1>Single Project</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">Tagline for the project giving a brief description about why it’s important</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fixed-width fixed-960 page-section padding-top-bottom-60"} -->
<div class="wp-block-group fixed-width fixed-960 page-section padding-top-bottom-60"><!-- wp:image {"id":313,"width":960,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="$genesis_child_chapters_project_pattern_image_url" alt="Green Pattern Blog Page" class="wp-image-313" width="960"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Use this page to give details about the project. Summarize the history of your work with this project, how it relates to the Internet Society’s overall mission, how it impacts your community, and plans you have to continue your work.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You can use this page to share links to articles about the project, share case study examples, resource links, photos from your work, and more. If this project is connected to an Internet Society project, you can link to the overall project page and give a summary on how your chapter is doing the work as a part of the global mission.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum, ©&nbsp;Dolor Sit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
