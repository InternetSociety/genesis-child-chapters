<?php
/**
 * Single Event Title Template Part
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/single-event/title.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 4.7.2
 *
 */
?>

<?php
if (is_singular('tribe_events')) {

} else {
    the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' );
    ?>
<?php
}

