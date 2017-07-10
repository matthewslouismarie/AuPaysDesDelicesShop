<?php

require_once( APDD_FUNCTIONS_PATH . 'get-page-url-by-slug.php' );

function display_language_icons() {
	if ( get_page_by_path( APDD_SWITCH_TO_FR_FR_SLUG ) != null ) {
?>
		<li>
			<a href="<?= get_page_url_by_slug( APDD_SWITCH_TO_FR_FR_SLUG ) ?>">
				<img class="apdd-language-icon" src="<?= APDD_IMG_PATH . 'french-flag.jpg' ?>">
			</a>
		</li>
<?php
	}
	if ( get_page_by_path( APDD_SWITCH_TO_EN_UK_SLUG ) != null ) {
?>
		<li>
			<a href="<?= get_page_url_by_slug( APDD_SWITCH_TO_EN_UK_SLUG ) ?>">
				<img class="apdd-language-icon" src="<?= APDD_IMG_PATH . 'uk-flag.jpg' ?>">
			</a>
		</li>
<?php
	}
}
/*

	}
	
					<li>
						<a href="<?= get_page_url_by_s"
							<img class="apdd-language-icon" src="<?= IMG_PATH . 'french-flag.jpg' ?>">
						</a>
					</li>
					<li>
						<a href="<?= home_url() ?>?set-language-to=en_UK"><img class="apdd-language-icon" src="<?= IMG_PATH . 'uk-flag.jpg' ?>"></a>
					</li>
}*/