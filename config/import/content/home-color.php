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
<h1 class="wp-block-heading">Wordpress theme for Internet Society Chapters</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"inner-header-cover"} -->
<p class="inner-header-cover">This is the WordPress theme used by Internet Society chapters.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"inner-fixed page-section padding-bottom-60"} -->
<div class="wp-block-group inner-fixed page-section padding-bottom-60"><!-- wp:paragraph -->
<p>Repository for installing the Wordpress theme for Internet Society Chapters <a href="https://github.com/InternetSociety/wp-chapter-theme" target="_blank" rel="noreferrer noopener">https://github.com/InternetSociety/wp-chapter-theme</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>IMPORTANT</strong>: If you encounter issues using this theme or have suggestions, please check the issue tracker and raise a new issue if necessary: <a href="https://github.com/InternetSociety/wp-chapter-theme/issues" target="_blank" rel="noreferrer noopener">https://github.com/InternetSociety/wp-chapter-theme/issues</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The issue tracker is public and&nbsp;viewing&nbsp;the issues is open to all.&nbsp;Raising&nbsp;an issue requires a&nbsp;<a href="http://www.github.com/" target="_blank" rel="noreferrer noopener">Github</a>&nbsp;account, but those are available for free.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Installation<a href="https://github.com/InternetSociety/wp-chapter-theme/blob/main/README.md#installation"></a></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Download the ZIP file of the <strong>Genesis theme</strong>: <a href="https://www.studiopress.com/get-genesis/" target="_blank" rel="noreferrer noopener">https://www.studiopress.com/get-genesis/</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Download the ZIP file of the Genesis child theme <strong>Internet Society Chapters</strong>:&nbsp;<a href="https://github.com/InternetSociety/wp-chapter-theme/archive/refs/heads/main.zip">https://github.com/InternetSociety/wp-chapter-theme/archive/refs/heads/main.zip</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Next, in your WordPress admin area, do the following:<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Go to&nbsp;<em>"Appearance</em>&nbsp;-&gt;&nbsp;<em>"Themes"</em>, choose "Add New" and then choose the "Upload Theme" button,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Upload the above ZIP files you downloaded,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Activate the theme Internet Chapters</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Customize the Theme with a Site Title, Tagline and Chapter Logo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>In your Wordpress admin area:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li>Go to&nbsp;<strong>Appearance -&gt;&nbsp;Customize&nbsp;-&gt;&nbsp;Site Identity</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Set the <strong>Site Title</strong>,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Set the <strong>Tagline</strong>,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Set the <strong>Chapter Logo</strong>,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Save the settings by clicking the <strong>Publish button</strong> at the top.</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Manage your navigation menus.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>In your Wordpress admin area:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li>Go to <strong>Appearance</strong> -&gt; <strong>Menus</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Manage your header and footer navigation: Add, remove, or update menu items as needed</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->
CONTENT;
