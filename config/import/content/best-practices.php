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
<div class="wp-block-group inner-page-header"><!-- wp:cover {"url":"https://chapter-template.isoc.org/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg","id":359,"alt":"Green Pattern Header","dimRatio":0,"minHeight":400,"minHeightUnit":"px","isDark":false,"className":"white-overlay"} -->
<div class="wp-block-cover is-light white-overlay" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="https://chapter-template.isoc.org/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">WordPress Basics and Other Website Tips</h1>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Best Practices and Recommendations</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"inner-fixed page-section padding-bottom-60","layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-fixed page-section padding-bottom-60"><!-- wp:heading -->
<h2 class="wp-block-heading">WordPress Basics</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Front End</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>The front end is your WordPress website. This is what the user will view and interact with. When the information for the WordPress website is implemented, you will be able to view it through the front end.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>View the front end to see what the website looks like and make changes accordingly.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>If you want to move from the front end to the back end, you can log into the WordPress back end by adding <strong>/wp-admin/ </strong>to the end of the URL.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>If you are logged into WordPress and viewing through the front end, you can also make edits to a page by pushing the <strong>‘Edit</strong><strong> Page’</strong><strong> </strong>button in the black bar at the bottom or top of your screen.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Back End</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>The back end is the website-administration area and can also be known as your dashboard.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>The back end allows the ability to edit and create content on pages, posts, users, and more. You can also check and update plugins here.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>You can log into the WordPress back end by adding <strong>/wp-admin/</strong><strong> </strong>to the end of the URL. This will take you to the login page, where you will input your credentials.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Remember to remain up to date with any pending updates.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Follow WordPress layout standards.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">WordPress Dashboard Menu Items</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Posts</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Posts are time-specific pieces of content. They update your website with fresh and relevant content and help boost SEO.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Posts are organized in chronological order on the page.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:image {"id":2768,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="https://chapter-template.isoc.org/wp-content/uploads/2024/11/posts.jpg" alt="A screenshot of WordPress Posts in the backend" class="wp-image-2768"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Within ‘<strong>Posts</strong>’, you can push ‘<strong>Add New</strong>’ at the top of your screen. The post feed will appear on your website's ‘<strong>Blog</strong>’ page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Comments are disabled by default in this template. You can change this under ‘<strong>Settings’ &gt; ‘Discussion</strong>’ within the WordPress menu items.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>To enable comments on a post, click ‘<strong>All Posts</strong>’ and then click ‘<strong>Quick Edit</strong>’ for the post you want to enable comments on. Check ‘<strong>Allow Comments</strong>’ to enable them.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Place your posts into a category. This helps to keep them organized and displayed in different areas across your website.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Blogs should be posted at least once a week.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>It may be helpful to create a content calendar that outlines when you will be posting different content and updating the site.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Categories</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Categories are a general way to group content on a WordPress site's ‘<strong>Posts</strong>’. A category is a topic or group of topics connected to one another.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>To add categories to posts, go to the right side of the screen to the menu and push <strong>‘Categories.’</strong></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can then rename or delete the default categories provided in the template. Click ‘<strong>Add New Category</strong>’ and create a new category that could fit multiple posts.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Create a good category name that symbolizes a topic or a group of topics that are connected to one another.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Categories are great for topics that will be commonly utilized/written about. Keep the number of categories as low as possible (we can have more tags for specific subcategories).</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tags</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Tags are important on WordPress because they connect different articles to each other. They are especially useful on blog posts because they allow readers to have links to similar content if they want to learn more about that topic.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>It is also a way for the content to be categorized so that it is easier to find.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>To apply tags to a page, look to the right side of the WordPress page when creating a new post.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Click on the settings icon at the top right, then click on ‘<strong>Post</strong>.’ As you scroll down, you will see an area labeled ‘<strong>Tags</strong>.’</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>When you click on this, a text box will appear. In this box, you can type any tags related to the article.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Use tags connected to other articles so they do not lead to a single or empty tag page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Use tags that relate to the content that was written.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Decide whether to create tags with singular or plural wording. Creating singular and plural tags of the same word can cause disorganization, such as “Internet Satellite” vs. “Internet Satellites.”</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pages</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Pages are the different links that are available throughout a website. Posts are articles that can be seen on a specific page, such as a blog page.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:image {"id":2776,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="https://chapter-template.isoc.org/wp-content/uploads/2024/11/pages.png" alt="A screenshot of WordPress Pages in the backend" class="wp-image-2776"/></figure>
<!-- /wp:image -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>On the left side of WordPress, you will find ‘<strong>Pages</strong>’. Once you click it, you can choose to view all the pages or add a new one.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Click ‘<strong>Add New</strong>’ at the top left of the page to create a new page. Click ‘<strong>Edit</strong>’ to edit an existing page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can then copy and paste or type your content directly in the WordPress editor.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Content should be updated on the site at least once a month to ensure all information is correct.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Reuse the blocks provided in the template to ensure pages are consistent throughout the website.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Subpages</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Subpages are used to give hierarchical content into an outline—they are the pages within pages.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>An example subpage could be seen as www.website.com/learn-more/about-us. This subpage is within www.website.com/learn-more/</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Open a page that has been created or create a new page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Once the page is open on the right side, scroll down to ‘<strong>Page Attributes</strong>,’ where you can make it a main page or a subpage by selecting the Parent page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Only pages can have subpages. Posts and announcements cannot.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Follow a hierarchical structure. Avoid repetition in URL structure by avoiding the same words in the child's URL as the ones in the parent’s (for example, <a href="http://www.website.com/learn-more/learn-more-about-us">www.website.com/learn-more/<s>learn-more</s>-about-us</a>).</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Media: Images, Videos, PDFs, etc.</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Media is where you can manage your images, audio, video, and other files.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:image {"id":2779,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="https://chapter-template.isoc.org/wp-content/uploads/2024/11/media.png" alt="A screenshot of WordPress Media in the backend" class="wp-image-2779"/></figure>
<!-- /wp:image -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>You can upload your media through the ‘<strong>Media</strong>’ menu item or within the page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You have three options to place media within the site:<ul><li>Drag and drop the image onto the page.</li></ul><ul><li>Upload the image from your computer onto the page.</li></ul><!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Select from the media library.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices: Images</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Images should be optimized (ideally before uploading), as big and uncompressed images have a very bad impact on your site’s performance. Best optimization means finding the best compromise between quality appropriate for different screens and the lightest possible weight. <a href="https://kinsta.com/blog/optimize-images-for-web/">Read more on how to optimize images</a>.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Images should be no bigger than 100-150 KB in size, especially those used in smaller dimensions (logos, icons, etc.). Note that image size differs from image dimensions, so sometimes images of small dimensions can be big. The recommended tool for compression is Adobe Photoshop, but there are some free online tools, such as <a href="https://squoosh.app/">Squoosh</a>, <a href="https://imagecompressor.com/">Image compressor</a>, etc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Alt text should always be added for accessibility and SEO reasons (read more in the ‘Web Accessibility’ and ‘SEO’ sections below). Find helpful instructions on <a href="https://webaim.org/techniques/alttext/">WebAIM’s site</a>.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>File naming, cropping, and resizing should be done <strong>PRIOR to</strong> uploading to the WordPress media library. After the upload, you add captions, alt text, and copyright.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices: Videos</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>It is not recommended to upload large videos directly to the site. Optimize your videos and make sure they load fast.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>We also recommend storing videos on one of the video streaming platforms (YouTube, Vimeo, etc.) and embedding them on the pages as needed.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Add transcripts and meta descriptions for accessibility and SEO reasons.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Blocks</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Blocks are content elements you can add and edit to create a page layout. These can include paragraphs, images, columns, buttons, and more.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>When you click on an already existing page or create a new page, you can add blocks. You may add blocks by pushing on the blue square with a <strong>‘+’</strong><strong> </strong>in the middle of the page. It will display a few common actions. Push ‘<strong>Browse All</strong>’ to view everything you can put onto the page.<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Once you click ‘<strong>Browse All’</strong>, it will open the list of ‘<strong>Blocks</strong>’ and ‘<strong>Patterns</strong>’ on the left. ‘<strong>My Patterns</strong>’ are blocks that you can reuse across the site; for example, the ‘<strong>Regular Text Section</strong>’ block will create a text block with the right padding on the sides. If you use a pattern on a page, make sure you first detach it from the original by clicking on three dots and choosing ‘<strong>Detach</strong>’.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can always reuse existing blocks from the template pages by selecting the block you need, clicking on three dots, and selecting ‘<strong>Copy</strong>’ or ‘<strong>Duplicate</strong>’ from the list.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Your top header should be h1, but all the headers below must be h2, h3, etc. A page should not have more than one h1.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Once you add a paragraph to a block, it is similar to using any word processing program; you may type any text for that area.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Menus</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>The menu is a list of links typically displayed at the top or bottom of your website. It allows users to navigate around your website easily.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Within WordPress menu items, hover over ‘<strong>Appearances’</strong> and find ‘<strong>Menus’</strong>. The left side, titled ‘<strong>Add Menu Items’</strong>, will show all of the pages created on WordPress. You can add them to the menu and bring them into the center box.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>To create a submenu, drag it over to the right, and it will become a submenu under a parent menu.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Create clear, relevant labels for the page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Avoid adding too many menu items on the top level.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Widgets</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>A widget is an element that enables you to add different features to your website. Examples of widgets for a website are the footer items, Related Posts, etc.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Hover over <strong>‘Appearance’ </strong>and select the widget. You will see the widgets in use.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Use the widgets for the intended use to prevent complications and overuse.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Users</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">What Is It?</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Users are people with different roles who are registered to use the WordPress site. This allows them to log in and make changes on the back end.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">How To</h4>
<!-- /wp:heading -->

<!-- wp:image {"id":2781,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="https://chapter-template.isoc.org/wp-content/uploads/2024/11/users.png" alt="A screenshot of WordPress Users in the backend" class="wp-image-2781"/></figure>
<!-- /wp:image -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>In the menu items, there is a section called ‘<strong>Users</strong>’ where you can see who is registered. You can also add people to the back end as administrators to give them the ability to make edits.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>At the top of the page, there is an ‘<strong>Add New</strong>’ button. Once you click that button, you will create a username and fill in their email address and name.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can then push ‘<strong>Role</strong>’ and the multiple options for each type of user role will be displayed.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">User Roles</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Subscribers can log in to the website but do not have access to make any changes.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Contributors can read all posts, as well as delete and edit their own posts.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Authors can write, edit, and publish their own posts but cannot modify posts written by other users. They can upload files and add images to their own posts.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Editors can create, edit, publish, and delete content, including content written by others, but cannot change the website’s settings.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Administrators hold the highest level of availability to the site and have unrestricted access to the WordPress admin area.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Best Practices</h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Ensure the people you add to be administrators understand the expectations of the role.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>You can have multiple administrators.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Review who can be on the back end of the site and remove or add users as needed.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Web Accessibility</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Web accessibility means a website is developed so people with disabilities can use it seamlessly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://www.w3.org/WAI/standards-guidelines/wcag/">Web Content Accessibility Guidelines (WCAG)</a> explain how to make web content more accessible. WCAG is an international standard developed by the World Wide Web Consortium (W3C) Web Accessibility Initiative (WAI). They cover websites, applications, and other digital content.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>WCAG is based on four main guiding principles of accessibility, known by the acronym <strong>POUR</strong>: perceivable, operable, understandable, and robust.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>WCAG 2.2 stands for the current version (published in October 2023). There are three levels of conformance: A, AA, and AAA. More information is <a href="https://www.w3.org/TR/WCAG/">available on the WCAG site</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent_purple"}}}},"textColor":"accent_purple"} -->
<p class="has-accent-purple-color has-text-color has-link-color"><strong>Internet Society strives to meet the AA level of conformance.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you’re a member of the Internet Society,&nbsp;<a href="https://www.internetsociety.org/sigs/accessibility/">you can also join our Accessibility Standing Group</a> to make a difference in digital inclusion for persons with disabilities.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Best Practices How to Make a Website Accessible</h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><strong>Use semantic HTML</strong>: Using proper HTML markup and structure is crucial for accessibility. Semantic HTML elements (e.g.,&nbsp;&lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;section&gt;, &lt;button&gt;, etc.) help convey the structure and meaning of the content to assistive technologies.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Make the content keyboard accessible</strong>: Make sure that all interactive elements on the website can be accessed and operated using a keyboard alone.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Use sufficient color contrast</strong>: Contrast refers to the color difference between the text and its background (font color vs background color or image). Online tools (<a href="https://webaim.org/resources/contrastchecker/">see an example</a>) can help you select the right colors.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Provide alternative text for images</strong>: Alternative Text (alt text) is a concise description of an image's content and function. All tags and attributes need to be coded in a way that can be interpreted by screen readers and that makes its output understandable. It is also good for SEO (see below).</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Use ARIA attributes when necessary</strong>: ARIA roles and attributes enhance the accessibility of web content, particularly for dynamic content and advanced user interface controls developed with Ajax, HTML, JavaScript, and related technologies. ARIA helps make web content more accessible, especially when HTML can't accomplish it alone. However, it should only be a supplement when HTML semantics is insufficient.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Make your content accessible</strong>: The ability to access content refers to making content products and services accessible to people with disabilities. It's also about making content more flexible and usable by people, whatever their preferences are. Use plain language, captions, and transcriptions for your video content. Establish a clear hierarchy of information (by using h1, h2, h3 headings and avoid skipping heading levels).</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Additional Tips</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Ensure forms are accessible.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Avoid PDFs (whenever possible) / make sure the documents are accessible.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Design a website with predictable and consistent navigation.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>If possible, ask a person with disabilities to test the pages and assess the quality of automated testing.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"backgroundColor":"neutral_white"} -->
<p class="has-neutral-white-background-color has-background"><strong>WordPress core is accessible by design. However, adding new features can make some parts of your site inaccessible. Therefore, when writing your code, editing your content, and uploading it, consider accessibility an essential requirement, not an afterthought.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Search Engine Optimization (SEO)</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>SEO stands for “search engine optimization.” It’s a set of processes aimed at improving a website’s visibility in search engines, like Google, with the goal of getting more non-paid, organic traffic. Despite the acronym, SEO is about understanding what people are searching for online, the answers they seek, the words they’re using, and the type of content they wish to consume. Knowing users’ needs will allow you to connect with the people who are searching for answers online.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Search engine optimization plays a key role in improving your ranking positions. The higher you rank, the more people will visit your site. More traffic means new customers (potential donors) and more brand awareness.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Best Practices</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>To ensure your site ranks high in Google, we must create high-quality, relevant content and provide the best possible user experience. In practice, this involves the following steps:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><strong>Conduct keyword research</strong>. Be relevant and make sure your content satisfies the user’s search intent. To be able to do that, you need to do keyword research first and understand what the words are that people are looking for.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Create high-quality content</strong>. It is important to attract visitors, but it is even more important to provide content that is useful to them. Make sure your content is comprehensive, accurate, readable, and original.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ensure your site is crawlable</strong>. Your pages should be indexed and crawlable so that Google and other search engines can serve them in the results. We recommend installing and properly configuring the <a href="https://yoast.com/">Yoast SEO plugin</a> on WordPress sites (it is included in the technical guide).</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Ensure your site is usable and user-friendly (technically optimized)</strong>. The site should be fully responsive (especially mobile friendly), fast-loading, secure, and easy to use (usable). It should have an easy-to-follow site structure/information architecture. Follow performance, functionality, accessibility, and usability best practices to provide the best user experience.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Build backlinks</strong>. One of the strongest ranking factors is backlinks, links from other websites pointing to your site. The more links from external domains with a high domain authority score, the higher your ranking. There are more link-building strategies. See<a href="https://www.semrush.com/blog/link-building-strategies/" target="_blank" rel="noreferrer noopener"> some suggestions</a>.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Additional Tips</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Ensure the meta title and meta description follow best practices: the meta title should be 50-60 characters long, and the meta description should be between 120-158 characters.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>All pages must have h1/title tag.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Use descriptive URLs to help visitors understand what’s on a page.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scan the site for 404s at least once a year and fix them. Do the same for broken backlinks.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Web Analytics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>With analytics platforms, you can track the number of users visiting your site, how long they stay, where they come from, how they found your site’s page, which pages are most visited, etc. Web analytics tools help you understand how your audiences behave and which content and layout resonate with them. They can also track if your marketing campaigns work and help improve conversation rates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The most widely used web analytics tool is Google Analytics (Internet Society also uses it). The previous version of Google Analytics was called ‘Universal Analytics’, and it has been replaced with Google Analytics 4 since July 2023. <a href="https://support.google.com/analytics#topic=14090456">Find detailed information and useful links from Google</a>, or <a href="https://www.semrush.com/blog/google-analytics/">start with a beginner’s guide from Semrush</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Note: Web analytics tools collect information about site visitors. Ensure your site complies with data privacy laws (see ‘Legal Considerations’ section below).&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Performance</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A fast-loading website is important as it provides a better user experience to visitors, attracts more traffic, and impacts search engine results. <strong>Optimizing the site’s performance requires regular maintenance.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Best Practices</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><strong>Compress and crop images</strong> with the best possible quality/weight ratio.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Use a caching</strong> mechanism.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Use a CDN</strong>.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Deactivate/remove plugins you don’t use</strong>. The more plugins you use, the more code must be loaded and the more data needs to be processed, which can slow down your website.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Minimize third-party scripts</strong>. Similarly to plugins, third-party scripts slow down your site. Some examples of services and elements that may add these scripts to your site are analytics services (like Google Analytics), chat boxes, embedded videos (for YouTube or Vimeo), advertisements, social media feeds, third-party forms (like newsletter subscription forms), etc.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Clean the WordPress database sometimes from unneeded rubbish: spam comments, revisions, obsolete data from old uninstalled plugins, etc. If you are not a technical person, you can use a plugin such as wp-optimize for cleaning operations.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hosting and Security</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>For more information, visit the <a href="https://developer.wordpress.org/advanced-administration/security/hardening">Hardening Wordpress</a> page on WordPress.org.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Multilingual Aspect</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The WordPress core is not translated by default. There are a couple of options for having translated versions of your website:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Use one of the <a href="https://wordpress.org/plugins/">available multilingual plugins</a>: WPML, Polylang, Weglot, etc. Internet Society uses WPML (paid) and Polylang (free) on our web properties, but we encourage you to choose the one that best fits your chapter's needs.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Host a separate site/subdomain for other language instances.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Legal Considerations</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The legal requirements of a website vary depending on the jurisdiction, type of industry, and the type of data collected. Please ensure your website complies with all applicable laws and regulations.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Useful Tools and Resources</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">WordPress</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://blog.hubspot.com/website/what-is-wordpress">What Is WordPress? A Beginner's Guide</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/go/category/tutorials/">WordPress Tutorials</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/learn/courses/">WordPress Courses</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/features/">WordPress Features</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/plugins">WordPress Plugins</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/go/tutorials/eight-ways-to-optimize-your-wordpress-sites-performance/">Eight Ways to Optimize Your WordPress Site’s&nbsp;Performance</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.semrush.com/blog/google-analytics/">Google Analytics for Beginners: Getting Started with GA4</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Web Accessibility</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://wave.webaim.org/">WAVE</a> (online or as a browser add-on)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://developer.chrome.com/docs/lighthouse/overview">Google LightHouse</a> (for basic score)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Firefox Inspector tool (to be used in browser)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.apple.com/accessibility/vision/">VoiceOver</a> (integrated to Mac)<ul><li><a href="https://webaim.org/articles/voiceover/">Using VoiceOver to Evaluate Web Accessibility</a></li></ul><!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://www.perkins.org/resource/how-use-voiceover-beginners/">How to Use VoiceOver with low vision</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.nvaccess.org/">NVDA</a> (Non-Visual Desktop Access, a free screenreader for Windows users)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.freecodecamp.org/news/web-accessibility-best-practices/">Web Accessibility Best Practices – How to Ensure Everyone Can Use Your Website</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.w3.org/WAI/standards-guidelines/">W3C Accessibility Standards Overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.w3.org/WAI/standards-guidelines/wcag/">W3C WCAG 2 Overview</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.w3.org/WAI/WCAG22/quickref/">How to Meet WCAG (Quick Reference)</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">SEO</h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://www.semrush.com/" target="_blank" rel="noreferrer noopener">Semrush</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://yoast.com/" target="_blank" rel="noreferrer noopener">Yoast plugin</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://ahrefs.com/writing-tools/meta-description-generator" target="_blank" rel="noreferrer noopener">Free AI Meta Description Generator</a> (free tool)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://ahrefs.com/writing-tools/img-alt-text-generator" target="_blank" rel="noreferrer noopener">Free AI Image Alt Text Generator</a> (free tool)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noreferrer noopener">Google’s SEO Starter Guide</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>References:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="https://moz.com/beginners-guide-to-seo/why-search-engine-marketing-is-necessary" target="_blank" rel="noreferrer noopener">Moz: SEO 101</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.semrush.com/blog/what-is-seo/" target="_blank" rel="noreferrer noopener">Semrush: What is SEO?</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://searchengineland.com/guide/what-is-seo" target="_blank" rel="noreferrer noopener">Search Engine Land: What Is SEO – Search Engine Optimization?</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noreferrer noopener">Google’s SEO Starter Guide</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.w3.org/TR/WCAG/">WCAG</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://wordpress.com/go/tutorials/eight-ways-to-optimize-your-wordpress-sites-performance/">Eight Ways to Optimize Your WordPress Site’s&nbsp;Performance</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
CONTENT;
