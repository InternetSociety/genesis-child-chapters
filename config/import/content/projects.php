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

$single_proj_url = site_url() .'/single-project/';

$genesis_child_chapters_projects_header_image_url = CHILD_URL . '/config/import/images/projects/blue-pattern-header.jpg';
$genesis_child_chapters_projects_pattern_image_url = CHILD_URL . '/config/import/images/projects/Green-pattern-medium-projects-page-1.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header dark-blue-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header dark-blue-heading"><!-- wp:cover {"url":"$genesis_child_chapters_projects_header_image_url","id":416,"dimRatio":0,"minHeight":400,"minHeightUnit":"px","className":"dark-overlay"} -->
<div class="wp-block-cover dark-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-416" alt="Blue Pattern Header" src="$genesis_child_chapters_projects_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1>Projects</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">Tagline about the projects and/or initiatives your chapter works on.&nbsp;</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"inner-fixed page-section"} -->
<div class="wp-block-group inner-fixed page-section"><!-- wp:paragraph -->
<p>Introductory paragraph giving background on the projects and/or initiatives you work on. This is a great place to briefly describe why you focus on certain project areas and how the work makes a difference in your community.&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-blocks inner-fixed","layout":{"type":"constrained"}} -->
<div class="wp-block-group project-blocks inner-fixed"><!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_projects_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2>Project Highlight</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use this block to give a quick summary of a specific project (e.g., community network, encryption advocacy, etc.)</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="$single_proj_url">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_projects_pattern_image_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2>Project Highlight</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use this block to give a quick summary of a specific project (e.g., community network, encryption advocacy, etc.)</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="$single_proj_url">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading -->
<h2>Project Highlight</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use this block to give a quick summary of a specific project (e.g., community network, encryption advocacy, etc.)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"single-project-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group single-project-wrap"><!-- wp:heading -->
<h2>Project Highlight</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use this block to give a quick summary of a specific project (e.g., community network, encryption advocacy, etc.)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum, ©&nbsp;Dolor Sit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
