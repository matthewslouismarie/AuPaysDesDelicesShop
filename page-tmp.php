<?php
/**
 * Template Name: Generate UserPro Dynamic Translation
 */

require_once( APDD_FUNCTIONS_PATH . 'generate-array-from-po-translation.php' );

const LB = "\n";
const T = "\t";

$userpro_fr_fr = file_get_contents( get_stylesheet_directory() . '/languages/original_userpro_translation.po' );

$array = generate_array_from_po_translation( $userpro_fr_fr );

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1><?= sizeof( $array ) ?></h1>
		
		<dl>
		<?php foreach ( $array as $msgid => $msgstr ) : ?>
			<dt><?=	esc_html( $msgid ) ?></dt>
			<dd><?= esc_html( $msgstr ) ?></dd>
		<?php endforeach ?>
		</dl>
		
	</body>
</html>