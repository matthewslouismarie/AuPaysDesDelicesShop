<?php

declare(strict_types=1);

require_once __DIR__ . '/../functions/generate-array-from-po-translation.php';

use PHPUnit\Framework\TestCase;

final class Generate_Array_From_Po_Translation_Test extends TestCase
{
	private $translations;

	protected function setUp() {
		$userpro_fr_FR_po_code = file_get_contents( __DIR__ . '/../languages/original_userpro_translation.po' );
		$this->translations = generate_array_from_po_translation( $userpro_fr_FR_po_code );
	}

	public function test_get_correct_number_of_msgid() {
		$this->assertEquals( 800, sizeof( $this->translations ), 'The number of translation entries must be equal to 800.' );
	}

	public function test_single_line_msgid_are_correct() {
		$this->assertEquals( 'Ajouter un nouveau badge', $this->translations['Add a New Badge'] );
		$this->assertEquals( 'Permet de définir un avertissement personnalisé sur n’importe quel profil d’utilisateur, par exemple : Ce compte est utilisé pour des tests uniquement, etc...', $this->translations['e.g. Set a custom warning to any user profile for example: This account is for test purposes only, etc.'] );
		$this->assertEquals( 'Vous n’avez pas les permissions requises ou le rôle pour consulter ce contenu privé. Veuillez nous en excuser.', $this->translations['You do not have enough permissions or role to view this private content. We apologize for that.'] );
	}
}