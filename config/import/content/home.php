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
<h1 class="wp-block-heading">Wordpress Theme for Internet Society Chapters</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"inner-fixed page-section padding-bottom-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-fixed page-section padding-bottom-60"><!-- wp:heading -->
<h2 class="wp-block-heading">This website theme is available for Internet Society chapters to use, whether when building a new chapter website from scratch or redesigning an existing one.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>It has been designed to put our Internet Society brand front and center. The theme allows you to highlight your unique story, but it also reinforces the underlying Internet Society brand principles (be bold, knowledgeable, optimistic, and approachable) that are at the core of who we are and that help us communicate with a strong, unified global voice.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The theme looks like the page you are currently looking at and is built in WordPress, a free, open-source content management system (CMS) that drives&nbsp;<a href="https://w3techs.com/technologies/details/cm-wordpress" target="_blank" rel="noreferrer noopener">over 40% of all websites</a>&nbsp;globally.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>As an Internet Society chapter, you are free to change the site theme as you see fit, but we ask that you use the official chapter branding resources, such as the&nbsp;<a href="https://assets.internetsociety.org/guidelines/guide/84cb806a-1844-46a2-aa00-1459bd1f0e70/page/99bbdc24-9e64-493a-8125-bd8459f16d7c" target="_blank" rel="noreferrer noopener">official Internet Society chapter logo</a>&nbsp;when building your website.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This theme is available for the chapter’s independent implementation. If your chapter requires the support of a web developer for its implementation, we encourage you to include the costs for hiring a local developer in the chapter’s annual&nbsp;<a href="https://www.isocfoundation.org/grant-programme/chapter-admin-funding/#:~:text=Chapter%20Admin%20Funding%20is%20available,in%20the%20Chapter's%20Charter%20Letter." target="_blank" rel="noreferrer noopener">Chapter Admin Funding</a>&nbsp;request.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>To support the local implementation of the chapter website theme, we have also developed a <a href="https://chapter-template.isoc.org/wordpress-basics-and-other-website-tips/" target="_blank" rel="noreferrer noopener">WordPress best practices document</a> that you can share with your local website developer to help you with the setup.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Package Components</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://chapter-template.isoc.org/">Live showcase website</a>: meant to provide chapters with a visual presentation of their website's appearance if they decide to use this new theme.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://chapter-template.isoc.org/theme-installation/">Theme Installation</a>: provides the step-by-step explanation on how to install the theme</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://chapter-template.isoc.org/wordpress-basics-and-other-website-tips/">WordPress Basics and Tips</a>: explains the basics of the WordPress content management system, as well as the other website-related recommendations, including legal, SEO, accessibility, and performance best practices and recommendations.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a id="_msocom_1"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
CONTENT;
