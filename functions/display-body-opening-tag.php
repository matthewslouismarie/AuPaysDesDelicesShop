<?php

require_once( APDD_FUNCTIONS_PATH . 'get-body-inline-style.php' );

function display_body_opening_tag() {
?>
<body <?php body_class(); ?> style="<?= get_body_inline_style() ?>">
<?php
}