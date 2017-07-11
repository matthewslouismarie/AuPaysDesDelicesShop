<?php

function display_page_regular_header() {
?>
<h1 class="page-title">
	<?php echo osetin_get_the_title( get_the_ID() ) ?>
</h1>
<?php
$sub_title = osetin_get_field( 'sub_title' );
if ( ! empty( $sub_title ) ) :
?>
<h2 class="page-content-sub-title"><?php echo esc_html($sub_title); ?></h2>
<?php
endif;
}