<?php

function display_body_top_bar_checkout_button() {
	if ( WC()->cart->cart_contents_count > 0 ) {
?>
	<li>
		<a href="<?= WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Checkout Now', 'osetin' ); ?>"><i class="os-icon os-icon-flag"></i> <span><?php _e( 'Checkout', 'osetin' ); ?></span></a>
	</li>
<?php
	}
}