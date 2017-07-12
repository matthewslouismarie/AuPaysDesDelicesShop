<?php

function generate_array_from_po_translation( string $po_translation ) : array {

	$po_translation = preg_replace( '/"\R"/', '', $po_translation );
	
	// echo $po_translation;

	// $msgids = preg_split( '/("$|(^msgid ")|("\Rmsgstr ".*"(\R|(\R#.*)|(\R".*))*)\Rmsgid "|\R#.*)/', $po_translation );

	
	$msgids = preg_split( 
		'/"$|(^msgid ")|("\Rmsgstr ".*"(\R|(\R#.*)|(\R".*))*)\Rmsgid "|"\Rmsgstr ".*"(\R(\R(#.*)?)*)?/', $po_translation );
	$msgstrs = preg_split( 
		'/((("(\R(#.*)*)*+)|^)msgid ".*"\Rmsgstr "|("(\R(#.*)*)*$))/', $po_translation );

	//$msgids = remove_empty_strings_from_array( $msgids );
	//$msgstrs = remove_empty_strings_from_array( $msgstrs );

	array_splice( $msgstrs, 0, 2 );
	array_splice( $msgids, 0, 2 );

	unset( $msgstrs[ sizeof( $msgstrs) - 1 ] );
	unset( $msgids[ sizeof( $msgids) - 1 ] );

	$array = array();
	$n_of_msgid = sizeof( $msgids );
	for ( $i = 0; $i < $n_of_msgid; $i++ ) {
		$msgstr = isset( $msgstrs[ $i ] ) ? $msgstrs[ $i ] : '???';
		$array[ $msgids[ $i ] ] = $msgstr;
	}


	return $array;
}