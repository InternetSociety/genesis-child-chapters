/**
 * Trigger AJAX request to save state when the WooCommerce notice is dismissed.
 *
 * @version 2.3.0
 *
 * @author StudioPress
 * @license GPL-2.0-or-later
 * @package GenesisSample
 */

jQuery( document ).on(
	'click', '.genesis-child-chapters-woocommerce-notice .notice-dismiss', function() {

		jQuery.ajax(
			{
				url: ajaxurl,
				data: {
					action: 'genesis_child_chapters_dismiss_woocommerce_notice'
				}
			}
		);

	}
);
