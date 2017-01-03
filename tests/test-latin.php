<?php
/**
 * Class Tests_Serbian_Transliteration_Latin
 *
 * @package Serbian_Transliteration
 * @subpackage Test
 */

/**
* Test case for Latin output.
*
* @since 1.0.0
*/
class Tests_Serbian_Transliteration_Latin extends PHPUnit_Framework_TestCase {
	/**
	 * Test latin inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_inputs() {
		$keyword1 = new Serbian_Transliteration( 'milan' );
		$this->assertEquals( $keyword1->latin(), 'milan' );

		$keyword2 = new Serbian_Transliteration( 'pera' );
		$this->assertEquals( $keyword2->latin(), 'pera' );

		$keyword3 = new Serbian_Transliteration( 'TUNISOVCI' );
		$this->assertEquals( $keyword3->latin(), 'TUNISOVCI' );

		$keyword4 = new Serbian_Transliteration( 'LIKOVI' );
		$this->assertEquals( $keyword4->latin(), 'LIKOVI' );

		$keyword5 = new Serbian_Transliteration( 'Ilija' );
		$this->assertEquals( $keyword5->latin(), 'Ilija' );

		$keyword6 = new Serbian_Transliteration( 'bigPinTheMiddle' );
		$this->assertEquals( $keyword6->latin(), 'bigPinTheMiddle' );

		$keyword7 = new Serbian_Transliteration( 'Čivijaši' );
		$this->assertEquals( $keyword7->latin(), 'Čivijaši' );

		$keyword8 = new Serbian_Transliteration( 'eXtreme' );
		$this->assertEquals( $keyword8->latin(), 'eXtreme' );
	}

	/**
	 * Test Cyrillic inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_inputs() {
		$keyword1 = new Serbian_Transliteration( 'лудило' );
		$this->assertEquals( $keyword1->latin(), 'ludilo' );

		$keyword2 = new Serbian_Transliteration( 'рзава' );
		$this->assertEquals( $keyword2->latin(), 'rzava' );

		$keyword3 = new Serbian_Transliteration( 'Тврђава' );
		$this->assertEquals( $keyword3->latin(), 'Tvrđava' );

		$keyword4 = new Serbian_Transliteration( 'Милијаш' );
		$this->assertEquals( $keyword4->latin(), 'Milijaš' );

		$keyword5 = new Serbian_Transliteration( 'врло опасно' );
		$this->assertEquals( $keyword5->latin(), 'vrlo opasno' );

		$keyword6 = new Serbian_Transliteration( 'А шта да радим?' );
		$this->assertEquals( $keyword6->latin(), 'A šta da radim?' );
	}

	/**
	 * Test Cyrillic inputs with mixed scripts.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_mixed_scripts_inputs() {
		$keyword1 = new Serbian_Transliteration( 'biliЈАР' );
		$this->assertEquals( $keyword1->latin(), 'biliJAR' );

		$keyword2 = new Serbian_Transliteration( 'КuГlА' );
		$this->assertEquals( $keyword2->latin(), 'KuGlA' );

		$keyword3 = new Serbian_Transliteration( 'НОСiti' );
		$this->assertEquals( $keyword3->latin(), 'NOSiti' );
	}

	/**
	 * Test Cyrillic inputs with non-Serbian characters.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_non_serbian_inputs() {
		$keyword1 = new Serbian_Transliteration( 'QWERTY' );
		$this->assertEquals( $keyword1->latin(), 'QWERTY' );

		$keyword2 = new Serbian_Transliteration( 'Досије икс (X Files)' );
		$this->assertEquals( $keyword2->latin(), 'Dosije iks (X Files)' );

		$keyword3 = new Serbian_Transliteration( 'Здесь вы можете скачать свежие версии WordPress, почерпнуть полезную информацию из Кодекса или получить помощь на форуме поддержки. Подпишитесь на ленту проекта, чтобы быть в курсе событий.' );
		$this->assertEquals( $keyword3->latin(), 'Zdesь vы možete skačatь svežie versii WordPress, počerpnutь poleznuю informaciю iz Kodeksa ili polučitь pomoщь na forume podderžki. Podpišitesь na lentu proekta, čtobы bыtь v kurse sobыtiй.' );
	}

	/**
	 * Test inputs with Cyrillic sentences.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_sentences_inputs() {
		$keyword1 = new Serbian_Transliteration( 'Насупрот веровању, Lorem Ipsum није насумично изабран и сложен текст.' );
		$this->assertEquals( $keyword1->latin(), 'Nasuprot verovanju, Lorem Ipsum nije nasumično izabran i složen tekst.' );

		$keyword2 = new Serbian_Transliteration( 'Његови корени потичу у делу класичне Латинске књижевности од 45. године пре нове ере, што га чини старим преко 2000 година.' );
		$this->assertEquals( $keyword2->latin(), 'Njegovi koreni potiču u delu klasične Latinske književnosti od 45. godine pre nove ere, što ga čini starim preko 2000 godina.' );

		$keyword3 = new Serbian_Transliteration( 'Richard McClintock, професор латинског на Hampden-Sydney колеџу у Вирџинији, је потражио дефиницију помало чудне речи "consectetur" из Lorem Ipsum пасуса и анализирајући делове речи у класичној књижевности отркио аутентичан извор.' );
		$this->assertEquals( $keyword3->latin(), 'Richard McClintock, profesor latinskog na Hampden-Sydney koledžu u Virdžiniji, je potražio definiciju pomalo čudne reči "consectetur" iz Lorem Ipsum pasusa i analizirajući delove reči u klasičnoj književnosti otrkio autentičan izvor.' );

		$keyword4 = new Serbian_Transliteration( 'Lorem Ipsum долази из поглавља 1.10.32 и 1.10.33 књиге "de Finibus Bonorum et Malorum" (Екстреми Бога и Зла) коју је написао Cicerо 45. године пре нове ере.' );
		$this->assertEquals( $keyword4->latin(), 'Lorem Ipsum dolazi iz poglavlja 1.10.32 i 1.10.33 knjige "de Finibus Bonorum et Malorum" (Ekstremi Boga i Zla) koju je napisao Cicero 45. godine pre nove ere.' );
	}
}
