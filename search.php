<?php
/*
Template Name: Search Page

Source: https://gist.github.com/topleague/1860988bdf7ace631dfb1ea0d99fb0cd
*/


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'sk_do_search_loop' );



add_action( 'genesis_before_loop', 'genesis_do_search_title' );
/**
 * Echo the title with the search term.
 *
 * @since 1.9.0
 */
function genesis_do_search_title() {

    $title = sprintf( '
<div class="wp-block-group inner-page-header">
    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
        <div class="wp-block-cover is-light white-overlay" style="min-height:200px;aspect-ratio:unset;">
            <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
            <img decoding="async" class="wp-block-cover__image-background wp-image-359" alt="Green Pattern Header" src="/wp-content/themes/genesis-child-chapters-main/config/import/images/about/Green-pattern-header.jpg" data-object-fit="cover" style="transform: translate3d(0px, 0px, 0px) scale(1.1984, 1.19842);">
        <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
            <h1 class="wp-block-heading">%s %s</h1>
        </div>
        </div>
    </div>
</div>

    ', apply_filters( 'genesis_search_title_text', __( 'Search Results for:', 'genesis' ) ), get_search_query() );

    echo apply_filters( 'genesis_search_title_output', $title ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

}
/**
 * Outputs a custom loop.
 */
function sk_do_search_loop() {
    // create an array variable with specific post types in your desired order.
    $post_types = array( 'page', 'post' );

    echo '<div class="wp-block-group inner-fixed page-section">
    <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
        <div class="search-content">';

    foreach ( $post_types as $post_type ) {
        // get the search term entered by user.
        $s = isset( $_GET["s"] ) ? $_GET["s"] : "";

        // accepts any wp_query args.
        $args = (array(
            's' => $s,
            // 'post_type' => $post_type,
            // 'posts_per_page' => 5,
            'order' => 'ASC',
            'orderby' => 'title'
        ));

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            // echo '<div class="post-type '. $post_type .'"><div class="post-type-heading">'. $post_type . 's</div>';
                // remove post info.
                remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

                // remove post image (from theme settings).
                // remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

                // remove entry content.
                // remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

                // remove post content nav.
               //  remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
                // remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );

                // force content limit.
                add_filter( 'genesis_pre_get_option_content_archive_limit', 'sk_content_limit' );

                // modify the Content Limit read more link.
                add_filter( 'get_the_content_more_link', 'sp_read_more_link' );

                // force excerpts.
                // add_filter( 'genesis_pre_get_option_content_archive', 'sk_show_excerpts' );

                // modify the Excerpt read more link.
                add_filter( 'excerpt_more', 'new_excerpt_more' );

                // modify the length of post excerpts.
                add_filter( 'excerpt_length', 'sp_excerpt_length' );

                // remove entry footer.
                remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
                remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
                remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

                // remove archive pagination.
                remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );

                // custom genesis loop with the above query parameters and hooks.
                genesis_custom_loop( $args );

            // echo '</div>';
        }
    }

    echo '</div></div></div>'; // .search-content

}

function sk_content_limit() {
    return '300'; // number of characters.
}

function sp_read_more_link() {
   // return '... <a class="more-link" href="' . get_permalink() . '">Continue Reading</a>';
}

function sk_show_excerpts() {
    return 'excerpts';
}

function new_excerpt_more( $more ) {
    return '... <a class="more-link" href="' . get_permalink() . '">Continue Reading</a>';
}

function sp_excerpt_length( $length ) {
    return 20; // pull first 20 words.
}

genesis();