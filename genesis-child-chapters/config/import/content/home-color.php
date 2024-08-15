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
$get_involved_url = site_url() .'/get-involved/';
$about_url = site_url() .'/about-us/';
$news_url = site_url() .'/news/';

$genesis_child_chapters_homepage_header_image_url = CHILD_URL . '/config/import/images/home/Header-Pattern-Green-1.jpg';
$genesis_child_chapters_homepage_pattern_image_url = CHILD_URL . '/config/import/images/home/Section-Pattern-medium.jpg';
$genesis_child_chapters_in_members_url = CHILD_URL . '/config/import/images/home/91-Individual-Members-81-75-1.svg';
$genesis_child_chapters_org_members_url = CHILD_URL . '/config/import/images/home/100000-Organizational-Members-361-75.svg';
$genesis_child_chapters_www_members_url = CHILD_URL . '/config/import/images/home/92111-People-Trained-Worldwide-233-75.svg';

$genesis_child_chapters_projects_url = CHILD_URL . '/config/import/images/home/Green-pattern-medium-projects-page-1.jpg';
$genesis_child_chapters_gallery_url = CHILD_URL . '/config/import/images/home/gallery-image.jpg';

return <<<CONTENT
<!-- wp:cover {"url":"$genesis_child_chapters_homepage_header_image_url","id":289,"dimRatio":0,"minHeight":520,"isDark":false,"className":"heading-block header-no-video white-overlay"} -->
<div class="wp-block-cover is-light heading-block header-no-video white-overlay" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-289" alt="Header Pattern Green" src="$genesis_child_chapters_homepage_header_image_url" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"style":{"color":{"text":"#24366e"}}} -->
<h1 class="has-text-color" style="color:#24366e">Chapter Name</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#24366e"}},"className":"heading-tagline"} -->
<p class="heading-tagline has-text-color" style="color:#24366e">Chapter tagline, a short sentence about who you are/what you do&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button {"className":"dark-blue-button round-button"} -->
<div class="wp-block-button dark-blue-button round-button"><a class="wp-block-button__link wp-element-button" href="$get_involved_url">Get Involved</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"page-section col-with-left-img inner-fixed padding-top-bottom-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section col-with-left-img inner-fixed padding-top-bottom-60"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_homepage_pattern_image_url" alt="Section Pattern Medium" class="wp-image-294"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>Within this section, give a high-level overview of the work the chapter does. Since this is the first section on your page that visitors will see, make the text enticing to make them want to learn more about the chapter.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button {"className":"dark-blue-button round-button"} -->
<div class="wp-block-button dark-blue-button round-button"><a class="wp-block-button__link wp-element-button" href="$about_url">About Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section col-with-left-img dark-blue-bg inner-fixed fixed-in-960","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section col-with-left-img dark-blue-bg inner-fixed fixed-in-960"><!-- wp:heading -->
<h2>Highlights</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"home-featured"} -->
<div class="wp-block-group home-featured"><!-- wp:group {"className":"slide"} -->
<div class="wp-block-group slide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_homepage_pattern_image_url" alt="Section Pattern Medium" class="wp-image-294"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>This area would benefit from a call-to-action for page visitors to continue along their user journey. Highlight actions that you want people to take (e.g., join the chapter, or attend an event) or resources you want them to read (e.g., reports, blogs, announcements).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"slide"} -->
<div class="wp-block-group slide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_homepage_pattern_image_url" alt="Section Pattern Medium" class="wp-image-294"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>This area would benefit from a call-to-action for page visitors to continue along their user journey. Highlight actions that you want people to take (e.g., join the chapter, attend an event) or resources you want them to read (e.g., reports, blogs, announcements).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"slide"} -->
<div class="wp-block-group slide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_homepage_pattern_image_url" alt="Section Pattern Medium" class="wp-image-294"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"placeholder":"Content…"} -->
<p>This area would benefit from a call-to-action for page visitors to continue along their user journey. Highlight actions that you want people to take (e.g., join the chapter, attend an event) or resources you want them to read (e.g., reports, blogs, announcements).</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section inner-fixed fixed-1080 padding-top-100 padding-bottom-40","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section inner-fixed fixed-1080 padding-top-100 padding-bottom-40"><!-- wp:quote {"className":"is-quote"} -->
<blockquote class="wp-block-quote is-quote"><!-- wp:paragraph -->
<p>Use this section to display a quote from a chapter member, partner, or community member about the impact of the chapter’s mission or talking about the chapter’s achievements.</p>
<!-- /wp:paragraph --><cite><strong>Name, Company, Title</strong></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:columns {"className":"iop-col margin-top-90"} -->
<div class="wp-block-columns iop-col margin-top-90"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":545,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="$genesis_child_chapters_in_members_url" alt="91 Individual Members" class="wp-image-545"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="has-text-align-center">Chapter Statistic</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":522,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="$genesis_child_chapters_org_members_url" alt="100000 Organizational Members" class="wp-image-522"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="has-text-align-center">Chapter Statistic</h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":521,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="$genesis_child_chapters_www_members_url" alt="92111 People Trained Worldwide" class="wp-image-521"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="has-text-align-center">Chapter Statistic</h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section inner-fixed blue-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section inner-fixed blue-bg"><!-- wp:heading -->
<h2>Latest News</h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
[latest-posts category="news" postno="4"]
<!-- /wp:shortcode -->

<!-- wp:buttons {"className":"white-button round-button","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons white-button round-button"><!-- wp:button {"backgroundColor":"white","style":{"color":{"text":"#24366e"}},"className":"white-button round-button"} -->
<div class="wp-block-button white-button round-button"><a class="wp-block-button__link has-white-background-color has-text-color has-background wp-element-button" href="$news_url" style="color:#24366e">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section col-with-left-img inner-fixed padding-top-bottom-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-section col-with-left-img inner-fixed padding-top-bottom-60"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_projects_url" alt="Green Pattern Medium Projects Page" class="wp-image-350"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading -->
<h2>Get Involved</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…"} -->
<p>Use this section to summarize ways that people can get involved in your chapter and why they should click through to learn more about ways they can join you.&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"blue-button round-button"} -->
<div class="wp-block-buttons blue-button round-button"><!-- wp:button {"className":"dark-blue-button round-button"} -->
<div class="wp-block-button dark-blue-button round-button"><a class="wp-block-button__link wp-element-button" href="$get_involved_url/">Join Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-section home-slider-wrap"} -->
<div class="wp-block-group page-section home-slider-wrap"><!-- wp:heading -->
<h2>Photo Gallery</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"home-gallery"} -->
<div class="wp-block-group home-gallery"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_gallery_url" alt="Gallery Image" class="wp-image-356"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_gallery_url" alt="Gallery Image" class="wp-image-356"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_gallery_url" alt="Gallery Image" class="wp-image-356"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_gallery_url" alt="Gallery Image" class="wp-image-356"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="$genesis_child_chapters_gallery_url" alt="Gallery Image" class="wp-image-356"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"image-copyright-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group image-copyright-section"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong>Image Copyright:</strong> ©&nbsp;Lorem Ipsum, ©&nbsp;Dolor Sit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
