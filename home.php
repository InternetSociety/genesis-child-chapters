<?php
/**
 * This file adds the Archive Post Template to any Genesis child theme.
 *
 * @author Artversion
 * @link https://artversion.com/
 */

//* Add custom body class to the head
add_filter( 'body_class', 'single_posts_body_class' );
function single_posts_body_class( $classes ) {

    $classes[] = 'news-cat';
    return $classes;

}

function be_blog_archive_intro() {

    // Copied genesis_do_posts_page_heading() from lib/structure/archive.php

    if ( ! genesis_a11y( 'headings' ) ) {
        return;
    }

    $posts_page = get_option( 'page_for_posts' );

    if ( null === $posts_page ) {
        return;
    }

    if ( ! is_home() || !genesis_is_root_page() ) {
        return;
    }

    /** This action is documented in lib/structure/archive.php */
    do_action( 'genesis_archive_title_descriptions', get_the_title( $posts_page ), get_post( $posts_page )->post_content, 'posts-page-description' );


}
remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
add_action( 'genesis_before_loop', 'be_blog_archive_intro' );




remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_entry_header', 'genesis_post_info', 9 );

// Filter Post Meta and Use it Condtionally
add_filter( 'genesis_post_info', 'leaguewp_post_info_filter' );
function leaguewp_post_info_filter($post_info) {
    $post_info = '[post_date]';
    return $post_info;
}

add_action( 'genesis_entry_header', 'sk_do_post_title_before', 7 );
function sk_do_post_title_before() {
    echo '<div class="my-entry-title">';
}

// Add custom closing div for post title
add_action( 'genesis_entry_header', 'sk_do_post_title_after' );
function sk_do_post_title_after() {
    echo '</div>';
}



remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Remove custom headline and / or description to category / tag / taxonomy archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );

//* Remove custom headline and description to blog template pages.

remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );

//* Remove custom headline and description to date archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_date_archive_title' );

//* Remove custom headline and description to author archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_author_title_description', 15 );

//* Remove custom headline and description to relevant custom post type archive pages.

remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );










add_action('genesis_before_content', function(){?>

<div class="heading-box">

    <div class="wp-block-group custom-blog-entry-heading blue-pattern">
        <div class="wp-block-group__inner-container">
            <div class="wp-block-group fixed-1180 entry-header-wrap">
                <div class="wp-block-group__inner-container">

                    <?php if ( is_home() ) : ?>
                        <h1 class="page-title">
                            <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
                        </h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


<section class="main-cat-loop">

<div class="sub-heading-box">

 <?php if ( is_active_sidebar( 'category-header-widget-top' ) ) : ?>
    <div class="search">
            <?php
            dynamic_sidebar( 'category-header-widget-top' );
            ?>
    </div>
<?php endif; ?>


<div class="cat-select">
    <div class="cat-select-in">
        <label for="cat"><span class="sr-only">Select Category</span></label>
    <?php wp_dropdown_categories( 'show_option_none=Category&show_count=1&hierarchical=1' ); ?>
    </div>
<script type="text/javascript">
    <!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
        if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
            location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
        }
    }
    dropdown.onchange = onCatChange;
    -->
</script>
</div>


</div>

</section>
<?php }); ?>




<?php
add_action('genesis_after_loop', function(){?>

<div class="category-media-footer">

 <?php if ( is_active_sidebar( 'category-media-footer' ) ) : ?>
    <div class="form-box-footer">
            <?php
            dynamic_sidebar( 'category-media-footer' );
            ?>
    </div>
<?php endif; ?>

</div>


<?php }); ?>

<?php

//* Run the Genesis loop
genesis();


