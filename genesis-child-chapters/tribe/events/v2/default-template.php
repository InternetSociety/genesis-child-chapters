<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();
?>

<?php
if (is_singular('tribe_events' )) { ?>

    <div class="events-heading wp-block-group custom-blog-entry-heading blue-pattern">
        <div class="wp-block-group__inner-container">
            <div class="wp-block-group fixed-1180 entry-header-wrap">
                <div class="wp-block-group__inner-container">
               <?php     the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' );
               $event_id = get_the_ID();
               $event_timezone     = get_post_meta( $event_id, '_EventTimezone', true );
               ?>
                    <p class="by-date"><?php echo tribe_get_start_date(); ?> <span>—</span> <?php echo tribe_get_end_date(); ?> <?php echo $event_timezone; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="events-heading wp-block-group custom-blog-entry-heading blue-pattern">
        <div class="wp-block-group__inner-container">
            <div class="wp-block-group fixed-1180 entry-header-wrap">
                <div class="wp-block-group__inner-container">
                    <h1><?php echo tribe_events_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
<?php }  ?>
<?php
echo tribe( Template_Bootstrap::class )->get_view_html();

get_footer();
