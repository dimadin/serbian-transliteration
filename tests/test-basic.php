<?php
/**
 * Class Tests_Serbian_Transliteration_Basic
 *
 * @package Serbian_Transliteration
 * @subpackage Test
 */

/**
 * Test case for basics.
 *
 * @since 1.0.0
 */
class Tests_Serbian_Transliteration_Basic extends PHPUnit_Framework_TestCase {
	/**
	 * Test original property.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_original() {
		// Original should always be available
		$not_empty = new Serbian_Transliteration( 'input' );
		$this->assertNotEmpty( $not_empty->original );

		// Test that original is same as input
		$this->assertEquals( $not_empty->original, 'input' );
	}

	/**
	 * Test Serbian Cyrillic alphabet.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_alphabet() {
		$keyword1 = new Serbian_Transliteration( 'АБВГДЂЕЖЗИЈКЛЉМНЊОПРСТЋУФХЦЧЏШабвгдђежзијклљмнњопрстћуфхцчџш' );
		$this->assertEquals( $keyword1->cyrillic(), 'АБВГДЂЕЖЗИЈКЛЉМНЊОПРСТЋУФХЦЧЏШабвгдђежзијклљмнњопрстћуфхцчџш' );
		$this->assertEquals( $keyword1->latin(), 'ABVGDĐEŽZIJKLLjMNNjOPRSTĆUFHCČDžŠabvgdđežzijklljmnnjoprstćufhcčdžš' );
	}
	/**
	 * Test Serbian Latin alphabet.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_alphabet() {
		$keyword1 = new Serbian_Transliteration( 'ABVGDĐEŽZIJKLLjMNNjOPRSTĆUFHCČDžŠabvgdđežzijklljmnnjoprstćufhcčdžš' );
		$this->assertEquals( $keyword1->cyrillic(), 'АБВГДЂЕЖЗИЈКЛЉМНЊОПРСТЋУФХЦЧЏШабвгдђежзијклљмнњопрстћуфхцчџш' );
		$this->assertEquals( $keyword1->latin(), 'ABVGDĐEŽZIJKLLjMNNjOPRSTĆUFHCČDžŠabvgdđežzijklljmnnjoprstćufhcčdžš' );
	}
}
