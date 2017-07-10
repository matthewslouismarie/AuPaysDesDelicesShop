<?php

function display_body_top_bar_cart_buttons() {
	if ( WC()->cart->cart_contents_count > 0 ) {
?>
<li>
	<a href="<?= WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'osetin' ); ?>"><i class="os-icon os-icon-finance-28"></i> <span><?= sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count, 'osetin' ), WC()->cart->cart_contents_count ); ?> - <?= WC()->cart->get_cart_total(); ?></span></a>
</li>
<?php
	} else {
?>
	<li>
		<a href="<?= WC()->cart->get_cart_url(); ?>"><i class="os-icon os-icon-finance-28"></i> <span><?php _e('Cart is empty', 'osetin'); ?></span></a>
	</li>
<?php
	}
}