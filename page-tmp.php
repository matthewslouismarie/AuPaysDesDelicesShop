<?php
/**
 * Template Name: Generate UserPro Dynamic Translation
 */

require_once( APDD_FUNCTIONS_PATH . 'generate-array-from-po-translation.php' );

const LB = "\n";
const T = "\t";

$userpro_fr_fr = file_get_contents( get_stylesheet_directory() . '/languages/original_userpro_translation.po' );

var_export( generate_array_from_po_translation( $userpro_fr_fr ) );