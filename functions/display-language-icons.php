<?php

require_once( APDD_FUNCTIONS_PATH . 'get-page-url-by-slug.php' );

function display_language_icons() {
?>
<?php if ( get_page_by_path( SWITCH_TO_FR_FR_SLUG ) != null ) : ?>
<li class="item">
	<?php if ( 'fr_FR' === APDD_CURRENT_LANGUAGE ) : ?>
	<span class="text -currentstate">FR</span>
	<?php else : ?>
	<a class="link" href="<?= get_page_url_by_slug( SWITCH_TO_FR_FR_SLUG ) ?>">FR</a>
	<?php endif ?>
</li>
<?php endif ?>
<?php if ( get_page_by_path( SWITCH_TO_EN_UK_SLUG ) != null ) : ?>
<li class="item">
	<?php if ( 'en_UK' === APDD_CURRENT_LANGUAGE ) : ?>
	<span class="text -currentstate">EN</span>
	<?php else : ?>
	<a class="link" href="<?= get_page_url_by_slug( SWITCH_TO_EN_UK_SLUG ) ?>">EN</a>
	<?php endif ?>
</li>
<?php endif ?>
<?php
}