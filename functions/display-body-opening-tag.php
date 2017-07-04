<?php

require_once( FUNCTIONS_PATH . 'get-body-inline-style.php' );

function display_body_opening_tag(): void {
?>
<body <?php body_class(); ?> style="<?= get_body_inline_style() ?>">
<?php
}