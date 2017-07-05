<?php

require_once( FUNCTIONS_PATH . 'get-logo.php' );

function print_logo() {

	$logo = get_logo();
?>
<div class="print-w">
	<div class="print-logo-w">
		<img src="<?= $logo->get_url(); ?>" alt="">
	</div>
</div>
<?php
}