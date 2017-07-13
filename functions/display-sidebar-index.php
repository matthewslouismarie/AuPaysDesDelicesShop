<?php

/**
 * Displays the sidebar sidebar-index.
 * 
 * @since 1.0.0
 * @see dynamic_sidebar()
 */
function display_sidebar_index() {
	?>
	<div class="page-sidebar">
		<?php dynamic_sidebar( CURRENT_SIDEBAR_INDEX ); ?>
	</div>
	<?php
}