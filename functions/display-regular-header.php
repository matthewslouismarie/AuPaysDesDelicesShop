<?php

/**
 * Displays the header of the current page in the regular header format.
 * 
 * @since 1.0.0
 * @see get_the_ID()
 */

function display_regular_header(): void {
	?>
	<h1 class="page-title">
		<?php echo osetin_get_the_title( get_the_ID() ) ?>
	</h1>
	<?php
}