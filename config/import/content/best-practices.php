<?php
/**
 * Internet Chapters.
 *
 * Theme installation content optionally installed after theme activation.
 *
 * @package Internet Chapters
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_child_chapters_homepage_header_image_url = CHILD_URL . '/config/import/images/home/Header-Pattern-Green-1.jpg';

return <<<CONTENT
<!-- wp:group {"className":"inner-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg","id":359,"alt":"Green Pattern Header","dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Installation</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"inner-fixed page-section padding-bottom-60"} -->
<div class="wp-block-group inner-fixed page-section padding-bottom-60"><!-- wp:paragraph -->
<p>This Wordpress theme allows Internet Society Chapters to display their website in line with our visual identity. The theme uses the <a href="https://www.studiopress.com/themes/genesis/">genesis framework </a>and a custom child theme for Internet Society Chapters <a href="https://github.com/InternetSociety/genesis-child-chapters" target="_blank" rel="noreferrer noopener">https://github.com/InternetSociety/genesis-child-chapters</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>IMPORTANT</strong>: If you encounter issues using this theme or have suggestions, please check the issue tracker and raise a new issue if necessary: <a href="https://github.com/InternetSociety/genesis-child-chapters/issues" target="_blank" rel="noreferrer noopener">https://github.com/InternetSociety/genesis-child-chapters/issues</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The issue tracker is public and&nbsp;viewing&nbsp;the issues is open to all.&nbsp;Raising&nbsp;an issue requires a&nbsp;<a href="http://www.github.com/" target="_blank" rel="noreferrer noopener">Github</a>&nbsp;account, but those are available for free.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Installation</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Backup your existing site</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Download the ZIP file of the <strong>Genesis theme</strong>: <a href="https://www.studiopress.com/get-genesis/" target="_blank" rel="noreferrer noopener">https://www.studiopress.com/get-genesis/</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Download the ZIP file of the Genesis child theme <strong>Internet Society Chapters</strong>:&nbsp;<a href="https://github.com/InternetSociety/wp-chapter-theme/archive/refs/heads/main.zip">https://github.com/InternetSociety/genesis-child-chapters/archive/refs/heads/main.zip</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Next, in your WordPress admin area, do the following:<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Go to&nbsp;<strong>Appearance&nbsp;-&gt;&nbsp;Themes</strong>, choose <strong>Add New</strong> and then choose the <strong>Upload Theme</strong> button,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Upload the above ZIP files you downloaded,</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Activate the theme Internet Chapters</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Now under <strong>Genesis -&gt; Child Theme Setup</strong> - click <strong>Install Pack</strong></li>
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
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fix any display issues</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>As with every theme change, display of existing contents and theme configuration may need some custom updates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Go to&nbsp;<strong>Appearance -&gt;&nbsp;Customize&nbsp;</strong>:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Under<strong>&nbsp;Theme Settings -&gt; Title toggle</strong> you can chose if he page title needs to be kept or removed from the display</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Under Theme Settings -&gt; Header/Footer scripts, you can add any custom scripts as needed (example cookie banner scripts, Google analytics scripts)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Under Additional CSS, you can add your own custom css styles</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>There are many more settings under <strong>Appearance -&gt;&nbsp;Customize&nbsp;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Best Practice </h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Legal provisions in various countries require certain rules to be respected, for example to make available a <strong>Cookie banner</strong>.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your site display should be responsive, i.e. display correctly in all different types of devices and screen sizes.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Your site should be accessible: use a tool such as <a href="https://wave.webaim.org/">https://wave.webaim.org</a> to be compliant with <a href="https://www.w3.org/TR/WCAG22/">WCAG22</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Make sure your page loading performance is acceptable:<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Use only strictly necessary plugins. These can be very resource demanding pieces and often not necessary.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Compress and crop images with the best possible quality/weight ratio</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Use a caching mechanism.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Clean the wordpress database sometimes from unneeded rubbish: Spam comments, revisions, obsolete data from old uninstalled plugins, etc.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
CONTENT;
