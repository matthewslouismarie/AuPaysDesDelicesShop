<?php

require_once( APDD_FUNCTIONS_PATH . 'display-default-breadcrumb-list-items.php' );

function display_default_breadcrumb() {
?>
<ul class="bar-breadcrumbs">
	<?php display_default_breadcrumb_list_items(); ?>
</ul>
<?php
}