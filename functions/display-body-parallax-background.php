<?php

function display_body_parallax_background( Background_Image $background ) {
?>
<div class="os-parallax" data-width="<?= esc_attr( $background->get_width() ); ?>" data-height="<?= esc_attr( $background->get_height() ); ?>">
	<img src="<?= esc_attr( $background->get_url() ) ?>" alt="">
</div>
<?php
}