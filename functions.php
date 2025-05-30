<?php
/**
 * Internet Chapters.
 *
 * This file adds functions to the Internet Chapters Theme.
 *
 * @package Internet Chapters
 * @author  Henri Wohlfarth
 * @license GPL-2.0-or-later
 * @link    https://www.chapter-template.isoc.org
 */


/*
Update available notification
inspired from https://stackoverflow.com/questions/58232315/making-update-notice-functionality-for-my-themes

This provokes an error:
[Wed Apr 23 07:34:17.153081 2025] [php:error] [pid 9032] [client 86.111.138.250:8269] PHP Fatal error:  Uncaught Error: Attempt to modify property "response" on bool in /var/www/html/wp-content/themes/genesis-child-chapters-main/functions.php:24\nStack trace:\n#0 /var/www/html/wp-includes/class-wp-hook.php(326): theme_check_for_update()\n#1 /var/www/html/wp-includes/plugin.php(205): WP_Hook->apply_filters()\n#2 /var/www/html/wp-includes/option.php(2578): apply_filters()\n#3 /var/www/html/wp-includes/update.php(912): get_site_transient()\n#4 /var/www/html/wp-admin/menu.php(33): wp_get_update_data()\n#5 /var/www/html/wp-admin/admin.php(158): require('...')\n#6 /var/www/html/wp-admin/plugins.php(10): require_once('...')\n#7 {main}\n  thrown in /var/www/html/wp-content/themes/genesis-child-chapters-main/functions.php on line 24

add_filter ( 'site_transient_update_themes', 'theme_check_for_update' );

function theme_check_for_update ( $transient ) {
    $response = theme_fetch_repo_latest_version();
    $data = json_decode($response);
    if ( version_compare( $transient->checked['genesis-child-chapters-main'], $data->new_version, '<' ) ) {
        $transient->response['genesis-child-chapters-main'] = (array) $data;
    }
    return $transient;
}
*/

/*
Update available notification
inspired from https://stackoverflow.com/questions/58232315/making-update-notice-functionality-for-my-themes
1. Check if $transient is an object. If not, initialize it as a stdClass.
2. Check that $transient->checked['genesis-child-chapters-main'] and $data->new_version are set before comparing versions.
3. This avoids the fatal error by never accessing properties on a boolean.
*/
add_filter('site_transient_update_themes', 'theme_check_for_update');

function theme_check_for_update($transient) {
    // Bail early if the transient is not an object
    if (!is_object($transient)) {
        $transient = new stdClass();
    }

    $response = theme_fetch_repo_latest_version();
    $data = json_decode($response);

    // Make sure we have a valid response and checked property
    if (
        isset($transient->checked['genesis-child-chapters-main']) &&
        isset($data->new_version) &&
        version_compare($transient->checked['genesis-child-chapters-main'], $data->new_version, '<')
    ) {
        $transient->response['genesis-child-chapters-main'] = (array) $data;
    }

    return $transient;
}





function theme_fetch_repo_latest_version() {
    $url = "https://api.github.com/repos/InternetSociety/genesis-child-chapters/releases/latest";
    $headers = array(
        'Content-Type: application/json',
        'X-GitHub-Api-Version: 2022-11-28',
        'User-Agent: Awesome-Octocat-App'
        );
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $arr = json_decode($result,true);
    $version = substr($arr['name'], 1);
    $response = '
    {
        "new_version": '.$version.',
        "url": "https://github.com/InternetSociety/genesis-child-chapters/blob/main/CHANGELOG.txt",
        "package": "https://github.com/InternetSociety/genesis-child-chapters/archive/refs/heads/main.zip"
    }
    ';


    return $response;
}



// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'genesis_child_chapters_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_child_chapters_localization_setup() {

    load_child_theme_textdomain( genesis_get_theme_handle(), get_stylesheet_directory() . '/languages' );

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
    require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
    genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'genesis_child_chapters_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_child_chapters_enqueue_scripts_styles() {

    $appearance = genesis_get_config( 'appearance' );

    wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- see https://core.trac.wordpress.org/ticket/49742
        genesis_get_theme_handle() . '-fonts',
        $appearance['fonts-url'],
        [],
        null
    );

    wp_enqueue_style( 'dashicons' );

    if ( genesis_is_amp() ) {
        wp_enqueue_style(
            genesis_get_theme_handle() . '-amp',
            get_stylesheet_directory_uri() . '/lib/amp/amp.css',
            [ genesis_get_theme_handle() ],
            genesis_get_theme_version()
        );
    }


    wp_register_script('faws', 'https://kit.fontawesome.com/e775d963c7.js');
    wp_enqueue_script(array('jquery','faws'));


    wp_register_script('art_gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js');
    wp_enqueue_script(array('jquery','art_gsap'));


    wp_register_script('art_gsap_st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js');
    wp_enqueue_script(array('jquery','art_gsap_st'));


    wp_register_script('anim-init', get_stylesheet_directory_uri() . '/js-build/anim-init.min.js', array('jquery'), filemtime(get_theme_file_path('/js-build/anim-init.min.js')), true);
    wp_localize_script( 'anim-init', 'commonAvdata', array(
        'themeUrl' => get_stylesheet_directory_uri()
    ));
    wp_enqueue_script( 'anim-init', array(), false, true);


    wp_register_script('common-js', get_stylesheet_directory_uri() . '/js-build/common.min.js', array('jquery'), filemtime(get_theme_file_path('/js-build/common.min.js')), true);
    wp_localize_script( 'common-js', 'commonAvdata', array(
        'themeUrl' => get_stylesheet_directory_uri()
    ));
    wp_enqueue_script( 'common-js', array(), false, true);

    wp_register_script('mobile-menu-js', get_stylesheet_directory_uri() . '/js-build/mobile-menu.min.js', array('jquery'), filemtime(get_theme_file_path('/js-build/mobile-menu.min.js')), true);
    wp_localize_script( 'mobile-menu-js', 'commonAvdata', array(
        'themeUrl' => get_stylesheet_directory_uri()
    ));
    wp_enqueue_script( 'mobile-menu-js', array(), false, true);


}

add_filter( 'body_class', 'genesis_child_chapters_body_classes' );
/**
 * Add additional classes to the body element.
 *
 * @since 3.4.1
 *
 * @param array $classes Classes array.
 * @return array $classes Updated class array.
 */
function genesis_child_chapters_body_classes( $classes ) {

    if ( ! genesis_is_amp() ) {
        // Add 'no-js' class to the body class values.
        $classes[] = 'no-js';
    }
    return $classes;
}

add_action( 'genesis_before', 'genesis_child_chapters_js_nojs_script', 1 );
/**
 * Echo the script that changes 'no-js' class to 'js'.
 *
 * @since 3.4.1
 */
function genesis_child_chapters_js_nojs_script() {

    if ( genesis_is_amp() ) {
        return;
    }

    ?>
    <script>
    //<![CDATA[
    (function(){
        var c = document.body.classList;
        c.remove( 'no-js' );
        c.add( 'js' );
    })();
    //]]>
    </script>
    <?php
}

add_filter( 'wp_resource_hints', 'genesis_child_chapters_resource_hints', 10, 2 );
/**
 * Add preconnect for Google Fonts.
 *
 * @since 3.4.1
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function genesis_child_chapters_resource_hints( $urls, $relation_type ) {

    if ( wp_style_is( genesis_get_theme_handle() . '-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        $urls[] = [
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        ];
    }

    return $urls;
}

add_action( 'after_setup_theme', 'genesis_child_chapters_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_child_chapters_theme_support() {

    $theme_supports = genesis_get_config( 'theme-supports' );

    foreach ( $theme_supports as $feature => $args ) {
        add_theme_support( $feature, $args );
    }

}

add_action( 'after_setup_theme', 'genesis_child_chapters_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_child_chapters_post_type_support() {

    $post_type_supports = genesis_get_config( 'post-type-supports' );

    foreach ( $post_type_supports as $post_type => $args ) {
        add_post_type_support( $post_type, $args );
    }

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 750, 750, true );
add_image_size( 'genesis-singular-images', 894, 524, true );


if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(894, 524, true);
}


// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_child_chapters_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_child_chapters_secondary_menu_args( $args ) {

    if ( 'secondary' === $args['theme_location'] ) {
        $args['depth'] = 1;
    }

    return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_child_chapters_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_child_chapters_author_box_gravatar( $size ) {

    return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_child_chapters_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_child_chapters_comments_gravatar( $args ) {

    $args['avatar_size'] = 60;
    return $args;

}


/**
 * Gutenberg style addon.
 *
 * @since 2.7.0
 */
function art_custom_admin_styles() {
    ?>
    <style>
        .editor-styles-wrapper .wp-block {
            max-width: 96% !important;
        }
        .wp-block-image.block-editor-block-list__block {
            background: #f6f6f6;
        }
        .block-editor-block-list__block,
        .editor-rich-text.block-editor-rich-text,
        .editor-styles-wrapper .wp-block-group {
            border: 1px solid #ccc !important;
        }
    </style>
    <?php
}
add_action('admin_head', 'art_custom_admin_styles');

/**
 * Automatically set the image Title, Alt-Text, Caption & Description upon upload based on $post_ID.
 *
 * @since 2.7.0
 */
function art_set_image_meta_upon_image_upload( $post_ID ) {

    // Check if uploaded file is an image, else do nothing.

    if ( wp_attachment_is_image( $post_ID ) ) {

        $my_image_title = get_post( $post_ID )->post_title;

        // Sanitize the title:  remove hyphens, underscores & extra spaces.
        $my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ', $my_image_title );

        // Sanitize the title:  capitalize first letter of every word (other letters lower case).
        $my_image_title = ucwords( strtolower( $my_image_title ) );

        // Create an array with the image meta (Title, Caption, Description) to be updated.
        // Note:  comment out the Excerpt/Caption or Content/Description lines if not needed.
        $my_image_meta = array(
            'ID'         => $post_ID,
            'post_title' => $my_image_title,
        );

        // Set the image Alt-Text.
        update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );

        // Set the image meta (e.g. Title, Excerpt, Content).
        wp_update_post( $my_image_meta );

    }
}
add_action( 'add_attachment', 'art_set_image_meta_upon_image_upload' );


//Force the Read More  - Set conditionally based on Category slug
add_filter( 'the_excerpt', 'genesis_child_chapters_excerpt_read_more_link' );
function genesis_child_chapters_excerpt_read_more_link( $output ) {
    global $post;

    return $output . ' <p class="read-more-button sr-only"><a href="' . get_permalink( $post->ID ) . '" class="more-link" title="Read More">Read More About ' . get_the_title() . '</a></p>';

}




/** Before Header */
add_action( 'genesis_before_header', 'genesis_child_chapters_before_header_widget', 'genesis-child-chapters' );
function genesis_child_chapters_before_header_widget() {
    if ( is_active_sidebar( 'before-header-widget' ) ) {
        echo '<div class="before-header-widget"><div class="b-h-inner">';
        dynamic_sidebar( 'before-header-widget' );
        echo '</div></div>';
    }
}


/** Header */

add_action( 'genesis_header_right', 'genesis_child_chapters_header_widget_top', 'genesis-child-chapters' );
function genesis_child_chapters_header_widget_top() {
    if ( is_active_sidebar( 'header-widget-top' ) ) {
        echo '<div class="header-widget"><div class="h-inner">';
        dynamic_sidebar( 'header-widget-top' );
        echo '</div></div>';
    }
}


/** After Header */
add_action( 'genesis_after_header', 'genesis_child_chapters_after_header_widget', 'genesis-child-chapters' );
function genesis_child_chapters_after_header_widget() {
    if ( is_active_sidebar( 'after-header-widget' ) ) {
        echo '<div class="after-header-widget">';
        dynamic_sidebar( 'after-header-widget' );
        echo '</div>';
    }
}


add_action( 'genesis_footer', 'genesis_child_chapters_genesis_footer', 'genesis-child-chapters' );
function genesis_child_chapters_genesis_footer() {
    if ( is_active_sidebar( 'footer-copyright' ) ) {
        echo '<footer id="footer-copyright">';
        dynamic_sidebar( 'footer-copyright' );
        echo '</footer><!-- end .footer_copyright -->';
    }
}
/** Before Footer */
add_action( 'genesis_before_footer', 'genesis_child_chapters_genesis_before_footer', 'genesis-child-chapters' );
function genesis_child_chapters_genesis_before_footer() {
    if ( is_active_sidebar( 'before-footer' ) ) {
        echo '<div class="before-footer">';
        dynamic_sidebar( 'before-footer' );
        echo '</div>';
    }
}

genesis_register_sidebar( array(
    'name'=>'Before Header Widget Area',
    'id'            => 'before-header-widget',
    'name'          => __( 'Before Header Widget Area', 'genesis-child-chapters' ),
    'description'   => __( 'This is before header widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Header Widget Area',
    'id'            => 'header-widget-top',
    'name'          => __( 'Header Widget Area', 'genesis-child-chapters' ),
    'description'   => __( 'This is header widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="top-header widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Category Header Widget Area',
    'id'            => 'category-header-widget-top',
    'name'          => __( 'Category Header Widget Area', 'genesis-child-chapters' ),
    'description'   => __( 'This is category header widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="top-header widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'After Header Widget Area',
    'id'            => 'after-header-widget',
    'name'          => __( 'After Header Widget Area', 'genesis-child-chapters' ),
    'description'   => __( 'This is after header widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Blog Header Widget Area',
    'id'            => 'blog-header-widget',
    'name'          => __( 'Blog Header Widget Area', 'genesis-child-chapters' ),
    'description'   => __( 'This is blog header widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Before Footer Widget',
    'id'            => 'before-footer',
    'name'          => __( 'Before Footer Widget', 'genesis-child-chapters' ),
    'description'   => __( 'This is before footer widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'  =>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Related Announcement Title Widget',
    'id'            => 'related-announcement-title',
    'name'          => __( 'Related Announcement Title Widget', 'genesis-child-chapters' ),
    'description'   => __( 'This is Related Announcement Title.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'  =>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );

genesis_register_sidebar( array(
    'name'=>'Related Posts Title Widget',
    'id'            => 'related-post-title',
    'name'          => __( 'Related Posts Title Widget', 'genesis-child-chapters' ),
    'description'   => __( 'This is Related Posts Title.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'  =>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Category Media Footer Widget',
    'id'            => 'category-media-footer',
    'name'          => __( 'Category Media Footer Widget', 'genesis-child-chapters' ),
    'description'   => __( 'This is Category Media Footer widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'  =>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


genesis_register_sidebar( array(
    'name'=>'Footer Copyright Widget',
    'id'            => 'footer-copyright',
    'name'          => __( 'Footer Copyright Widget', 'genesis-child-chapters' ),
    'description'   => __( 'This is the footer copyright widget section.', 'genesis-child-chapters' ),
    'before_widget' => '<div id="%1$s" class="widget-area %2$s">', 'after_widget'  => '</div>',
    'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
) );


/* update post info */
add_filter( 'genesis_post_info', 'art_post_info_filter' );
function art_post_info_filter($post_info) {
    if ( !is_page() ) {
        $post_info = '[post_date]';
        return $post_info;
    }}
/* remove entry footer */
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

add_filter('tribe_get_events_title', 'my_get_events_title');
function my_get_events_title($title) {
    if( tribe_is_month() && !is_tax() ) { // The Main Calendar Page
        return 'Events Calendar';
    } elseif( tribe_is_month() && is_tax() ) { // Calendar Category Pages
        return 'Events Calendar' . ' &raquo; ' . single_term_title('', false);
    } elseif( tribe_is_event() && !tribe_is_day() && !is_single() ) { // The Main Events List
        return 'Events';
    } elseif( tribe_is_event() && is_single() ) { // Single Events
        return get_the_title();
    } elseif( tribe_is_day() ) { // Single Event Days
        return 'Events on: ' . date('F j, Y', strtotime($wp_query->query_vars['eventDate']));
    } elseif( tribe_is_venue() ) { // Single Venues
        return $title;
    } else {
        return $title;
    }
}




/*
 * Shortcode, moved form Art_Custom
 */
/* year shortcode
displays current year
*/
function year_shortcode() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'year_shortcode');


function art_polylang_shortcode() {
    if (function_exists('pll_the_languages')) {
        ob_start();
        pll_the_languages(array('show_flags'=>1,'show_names'=>1));
        $flags = ob_get_clean();
        return $flags;
    } else {
        // install polylang
    }

}
add_shortcode( 'lang', 'art_polylang_shortcode' );


/*
  Recent Post Shortcode
*/

function av_recent_shortcode($atts){
    extract( shortcode_atts( array(
        'class' => ''),
        $atts ) );
    $args = query_posts(  array (
        'posts_per_page' => '10',
        'post_type' => 'post',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'category_name' => 'blog',
        'cat' => '1'
//    'category__not_in' => array(16)
    ) );
    $list = '<div class="recent-posts box-set-'.$class.'">';
    while(have_posts()) : the_post();
        $list .= '
    <div class="selected-blog-post rel-box">

        <div class="thumbnail-col">
        <a class="blog-post-link-image" href="'. get_permalink() .'">' . get_the_post_thumbnail($post->ID, array(700,700, true)) . '</a>
        </div>

        <div class="selected-post-text-area">
        <h3 class="blog-post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>' .'<p class="blog-post-content">'. get_the_excerpt() .'</p>
        <p class="read-more">
        <a href="' . get_permalink() . '">Read More</a>
        </p>

        </div>
    </div>

  ';

    endwhile;
    wp_reset_query();
    return $list . '</div>';
}
add_shortcode('recent-slide', 'av_recent_shortcode');

function av_ln_shortcode($atts){
    extract( shortcode_atts( array(
        'category' => 'news',
        'postno' => '4'
    ),
        $atts ) );
    $args = query_posts(  array (
        'posts_per_page' => $postno,
        'post_type' => 'post',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'category_name' => $category
//    'cat' => '1'
//    'category__not_in' => array(16)
    ) );

    $list = '<div class="latest-posts">';
    while(have_posts()) : the_post();

        $post_ID = (empty($post->ID)) ? '' : $post->ID;
        $featured_img_url = get_the_post_thumbnail_url($post_ID, 'full');
  
        $list .= '

        <div class="latest-blog-post rel-box">
                <div class="thumbnail-col" style="background: url(' . $featured_img_url . ') no-repeat center center;background-size: cover;">

                <a class="blog-post-link-image" href="'. get_permalink() .'">' . get_the_post_thumbnail() . '</a>
                </div>
                <div class="selected-post-text-area">
                <!-- '.get_the_category_list().' -->
                <p class="date">'.get_the_date().'</p>
                <h3 class="blog-post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
                </div>
        </div>

    ';

    endwhile;
    wp_reset_query();
    return $list . '</div>';
}

add_shortcode('latest-posts', 'av_ln_shortcode');


function av_hfd_shortcode($atts){
    extract( shortcode_atts( array(
        'class' => '3'),
        $atts ) );
    $args = query_posts(  array (
        'posts_per_page' => '3',
        'post_type' => 'tribe_events',
        'orderby' => 'publish_date',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'tribe_events_cat',  // Taxonomy name
                'field' => 'slug',
                'terms' => 'featured'                  ),
        ),
    ) );

    $list = '<div class="selected-blog-posts-block box-set-'.$class.'">';

    while(have_posts()) : the_post();

        $list .= '

        <div class="selected-blog-post rel-box">
        <div class="selected-post-text-area">
        <div class="thumb-img">' . get_the_post_thumbnail() . '</div>
        <p class="by-auth">'. tribe_get_start_date() .' - '. tribe_get_end_date() .'</p>
        <h3 class="blog-post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>' .'<p class="blog-post-content">'. get_the_excerpt() .'</p>
        <p class="blog-read-more"><a href="' . get_permalink() . '">Learn More</a></p>
        </div>
         </div>

    ';
    endwhile;
    wp_reset_query();
    return $list . '</div>';
}
add_shortcode('homeEvents', 'av_hfd_shortcode');

function shapeSpace_recent_posts_shortcode($atts, $content = null) {

    global $post;

    extract(shortcode_atts(array(
        'cat'     => '',
        'num'     => '4',
        'order'   => 'DESC',
        'orderby' => 'post_date',
    ), $atts));

    $args = array(
        'cat'            => $cat,
        'posts_per_page' => $num,
        'order'          => $order,
        'orderby'        => $orderby,
    );

    $output = '';

    $posts = get_posts($args);

    foreach($posts as $post) {

        setup_postdata($post);

        $output .= '<div class="cat-post">
                        <div class="cat-post-in">
                            <p class="date">'.get_the_date().'</p>
                            <h3 class="blog-post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
                            <a class="abs-link" href="'. get_the_permalink() .'"><span class="sr-only">More Details</span></a>
                        </div>
                   </div>
                ';

    }

    wp_reset_postdata();

    return '<div class="recent-wrap recent-entries"><div class="recent-wrap-in">'. $output .'</div></div>';

}
add_shortcode('allRecent', 'shapeSpace_recent_posts_shortcode');


function art_ann_by_cat_function ($atts){
    extract( shortcode_atts( array(
        'nrofposts' => '4'
    ), $atts ) );

    $args = query_posts(  array (
        'post_type' => 'announcement',
        //'tag'=>$tag,
        'orderby' => 'date',
        'order' => 'DESC' ,
        'showposts' => $nrofposts

    ) );

    $list = '<div class="recent-wrap recent-entries"><div class="recent-wrap-in">';
// $page_tag = get_queried_object();
// $page_tag->slug
// $page_tag->name
    while(have_posts()) : the_post();

        $list .= '

        <div class="cat-post">
        <div class="cat-post-in">
        <p class="post-date"><time datetime="'.get_the_date().'" itemprop="datePublished">'.get_the_date().'</time></p>
        <h3 class="blog-post-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
        <a class="abs-link" href="'. get_the_permalink() .'"><span class="sr-only">More Details</span></a>
         </div>
         </div>
        ';
    endwhile;
    wp_reset_query();
    return $list . '</div></div>';
}
add_shortcode ('announcements','art_ann_by_cat_function');


function art_theme_url_shortcode( $attrs = array (), $content = '' ) {
    $theme = ( is_child_theme() ? get_stylesheet_directory_uri() : get_template_directory_uri() );
    return $theme;

}
add_shortcode('file-url', 'art_theme_url_shortcode' );



/*
Excerpt update
*/

function art_excerpt_length( $length ) {
    return 20;//change the number for the length you want
}
add_filter( 'excerpt_length', 'art_excerpt_length', 999 );
add_filter( 'excerpt_more', 'art_excerpt_more' );
function art_excerpt_more( $excerpt_more ) {
    return '...';
}




//allow upload of svg
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



// add title toggle feature as per https://wordpress.org/plugins/genesis-title-toggle/
require_once  __DIR__ .'/genesis-title-toggle.php';









/**
REPLACE THE DEFAULT GENESIS SEARCH WIDGET
 * You can find the source function for the genesis search form
 * within the Genesis theme under > /lib/strucutre/search.php
 *
 * This updated search from has replaced the <input type="button">
 * with a <button> element. This makes it easier to add an icon
 * in replacement of the text with the approtraite attribute roles
 * that doesn't cause an html validation error.
 *
 * This version of the search from assumes you have declared supprot for html
 * and acessability supprot.
 * This update removes the filters for the button, label and search text
 * as they are redundent.
 * Source: https://gist.github.com/patric-boehner/07e7fcf956029268a7dff273a19a219c
 */

/*
THIS CODE NEEDS TO BE OUTPUT WITH THE FILTER get_search_form
<div class="sec-nav">
    <a class="search-toggle" role="button">
        <span class="sr-only">Search Dropdown</span><img class="search-ico" src="/wp-content/themes/genesis-child-chapters-main/images/search-icon-21px-21px.svg" alt="Search Icon" width="21" height="21" /></a>
        <a class="join customize-unpreviewable" href="https://community.internetsociety.org/s/new-registration">Join</a>
</div>
<div class="search-block" style="display: none;">
    <form class="is-search-form" role="search" action="/" method="get" target="_self">
    <label for="is-search-input-540">
        <input id="is-search-input-540" class="is-search-input" autocomplete="off" name="s" type="search" value="" placeholder="Search by Keyword" />
    </label>
    </form>
</div>

*/



add_filter( 'get_search_form', 'pb_custom_search_form', 10, 4 );
function pb_custom_search_form() {
    $onfocus = "if ('" . esc_js( isset($search_text) ? $search_text : '') . "' === this.value) {this.value = '';}";
    $onblur  = "if ('' === this.value) {this.value = '" . esc_js(  isset($search_text) ? $search_text : '') . "';}";

    $value_or_placeholder = ( get_search_query() == '' ) ? 'placeholder' : 'value';


$form  = '
<style type="text/css">.widgettitle.widget-title {display:none} </style>
<div class="sec-nav">
    <a class="search-toggle" role="button">
        <span class="sr-only">Search Dropdown</span><img class="search-ico" src="/wp-content/themes/genesis-child-chapters-main/images/search-icon-21px-21px.svg" alt="Search Icon" width="21" height="21" /></a>
        <a class="join customize-unpreviewable" href="https://community.internetsociety.org/s/new-registration">Join</a>
</div>
<div class="search-block" style="display: none;">';

    $form  .= sprintf( '<form class="is-search-form" %s>', genesis_attr( 'search-form' ) );

    $form_id = uniqid( 'searchform-', true );

    $form .= sprintf(
        '<meta itemprop="target" content="%s"/>
            <label class="search-form-label screen-reader-text" for="%s">%s</label>
            <input itemprop="query-input" type="search" name="s" id="%s" %s="%s" class="is-search-input" />
        </form>',
        home_url( '/?s={s}' ),
        esc_attr( $form_id ),
        esc_html( 'Search this website', 'genesis' ),
        esc_attr( $form_id ),
        $value_or_placeholder,
        esc_attr( isset($_GET['s']) ? 'Search by Keyword' : '', 'genesis' ),
        esc_attr( 'Search', 'genesis' )
    );
    $form .= '</div>';

    return apply_filters( 'genesis_search_form', $form );

}

