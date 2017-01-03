<?php
/**
 * Class Tests_Serbian_Transliteration_Cyrillic
 *
 * @package Serbian_Transliteration
 * @subpackage Test
 */

/**
* Test case for Cyrillic output.
*
* @since 1.0.0
*/
class Tests_Serbian_Transliteration_Cyrillic extends PHPUnit_Framework_TestCase {
	/**
	 * Test Cyrillic inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_cyrillic_inputs() {
		$keyword1 = new Serbian_Transliteration( 'стевица' );
		$this->assertEquals( $keyword1->cyrillic(), 'стевица' );

		$keyword2 = new Serbian_Transliteration( 'поеска' );
		$this->assertEquals( $keyword2->cyrillic(), 'поеска' );

		$keyword3 = new Serbian_Transliteration( 'ТРУСНО' );
		$this->assertEquals( $keyword3->cyrillic(), 'ТРУСНО' );

		$keyword4 = new Serbian_Transliteration( 'МИЛИЈАРДЕРИ' );
		$this->assertEquals( $keyword4->cyrillic(), 'МИЛИЈАРДЕРИ' );

		$keyword5 = new Serbian_Transliteration( 'Павле' );
		$this->assertEquals( $keyword5->cyrillic(), 'Павле' );

		$keyword6 = new Serbian_Transliteration( 'великоТпаМалеП' );
		$this->assertEquals( $keyword6->cyrillic(), 'великоТпаМалеП' );
	}

	/**
	 * Test Latin inputs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_inputs() {
		$keyword1 = new Serbian_Transliteration( 'pomešana osećanja' );
		$this->assertEquals( $keyword1->cyrillic(), 'помешана осећања' );

		$keyword2 = new Serbian_Transliteration( 'Đurađ Branković' );
		$this->assertEquals( $keyword2->cyrillic(), 'Ђурађ Бранковић' );

		$keyword3 = new Serbian_Transliteration( 'područje' );
		$this->assertEquals( $keyword3->cyrillic(), 'подручје' );

		$keyword4 = new Serbian_Transliteration( 'obilno' );
		$this->assertEquals( $keyword4->cyrillic(), 'обилно' );

		$keyword5 = new Serbian_Transliteration( 'Plava je boja neba.' );
		$this->assertEquals( $keyword5->cyrillic(), 'Плава је боја неба.' );

		$keyword6 = new Serbian_Transliteration( 'Ljuljaška se zaljuljala!' );
		$this->assertEquals( $keyword6->cyrillic(), 'Љуљашка се заљуљала!' );

		$keyword7 = new Serbian_Transliteration( 'Džak' );
		$this->assertEquals( $keyword7->cyrillic(), 'Џак' );

		$keyword8 = new Serbian_Transliteration( 'Narandža' );
		$this->assertEquals( $keyword8->cyrillic(), 'Наранџа' );
	}

	/**
	 * Test inputs with Latin digraphs.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_diagraphs_inputs() {
		$keyword1 = new Serbian_Transliteration( 'Đorđe' );
		$this->assertEquals( $keyword1->cyrillic(), 'Ђорђе' );

		$keyword2 = new Serbian_Transliteration( 'Djordje' );
		$this->assertEquals( $keyword2->cyrillic(), 'Дјордје' );

		$keyword3 = new Serbian_Transliteration( 'DJordje' );
		$this->assertEquals( $keyword3->cyrillic(), 'ДЈордје' );

		$keyword4 = new Serbian_Transliteration( 'Ljiljana' );
		$this->assertEquals( $keyword4->cyrillic(), 'Љиљана' );

		$keyword5 = new Serbian_Transliteration( 'LJubičasta' );
		$this->assertEquals( $keyword5->cyrillic(), 'Љубичаста' );

		$keyword6 = new Serbian_Transliteration( 'lJulj' );
		$this->assertEquals( $keyword6->cyrillic(), 'лЈуљ' );

		$keyword7 = new Serbian_Transliteration( 'Džandrljav' );
		$this->assertEquals( $keyword7->cyrillic(), 'Џандрљав' );

		$keyword8 = new Serbian_Transliteration( 'DŽivdžan' );
		$this->assertEquals( $keyword8->cyrillic(), 'Џивџан' );

		$keyword9 = new Serbian_Transliteration( 'dŽambas' );
		$this->assertEquals( $keyword9->cyrillic(), 'дЖамбас' );

		$keyword10 = new Serbian_Transliteration( 'Njiva' );
		$this->assertEquals( $keyword10->cyrillic(), 'Њива' );

		$keyword11 = new Serbian_Transliteration( 'NJuška' );
		$this->assertEquals( $keyword11->cyrillic(), 'Њушка' );

		$keyword12 = new Serbian_Transliteration( 'nJegoš' );
		$this->assertEquals( $keyword12->cyrillic(), 'нЈегош' );
	}

	/**
	 * Test Latin inputs with special Serbian characters.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_special_serbian_inputs() {
		$keyword1 = new Serbian_Transliteration( 'Čučavac' );
		$this->assertEquals( $keyword1->cyrillic(), 'Чучавац' );

		$keyword2 = new Serbian_Transliteration( 'Ćevabdžinica' );
		$this->assertEquals( $keyword2->cyrillic(), 'Ћевабџиница' );

		$keyword3 = new Serbian_Transliteration( 'Šuškavac' );
		$this->assertEquals( $keyword3->cyrillic(), 'Шушкавац' );
	}

	/**
	 * Test Latin inputs with mixed scripts.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_mixed_scripts_inputs() {
		$keyword1 = new Serbian_Transliteration( 'jeloВНИК' );
		$this->assertEquals( $keyword1->cyrillic(), 'јелоВНИК' );

		$keyword2 = new Serbian_Transliteration( 'БuДaЛa' );
		$this->assertEquals( $keyword2->cyrillic(), 'БуДаЛа' );

		$keyword3 = new Serbian_Transliteration( 'МЕРiti' );
		$this->assertEquals( $keyword3->cyrillic(), 'МЕРити' );
	}

	/**
	 * Test Latin inputs with non-Serbian characters.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_non_serbian_inputs() {
		$keyword1 = new Serbian_Transliteration( 'XYQ' );
		$this->assertEquals( $keyword1->cyrillic(), 'XYQ' );

		$keyword2 = new Serbian_Transliteration( 'www.primer.net' );
		$this->assertEquals( $keyword2->cyrillic(), 'www.пример.нет' );

		$keyword3 = new Serbian_Transliteration( 'Über 60 Millionen Menschen haben WordPress als Grundstein für den Ort gewählt, den sie im Web Home nennen. Wir freuen uns, dich in dieser großen Familie zu begrüßen!' );
		$this->assertEquals( $keyword3->cyrillic(), 'Üбер 60 Миллионен Менсцхен хабен WордПресс алс Грундстеин фüр ден Орт геwäхлт, ден сие им Wеб Хоме неннен. Wир фреуен унс, дицх ин диесер гроßен Фамилие зу бегрüßен!' );

		$keyword4 = new Serbian_Transliteration( 'WordPress — идеальная платформа для публикации, ориентированная на красоту, поддержку стандартов и удобство использования. WordPress бесплатен и свободен к распространению.' );
		$this->assertEquals( $keyword4->cyrillic(), 'WордПресс — идеальная платформа для публикации, ориентированная на красоту, поддержку стандартов и удобство использования. WордПресс бесплатен и свободен к распространению.' );

		$keyword5 = new Serbian_Transliteration( 'וורדפרס היא מערכת לניהול אתרי תוכן. המערכת מפותחת בקוד פתוח ומוצעת להורדה בחינם. וורדפרס בעברית היא הגרסה המקומית הרשמית של WordPress.' );
		$this->assertEquals( $keyword5->cyrillic(), 'וורדפרס היא מערכת לניהול אתרי תוכן. המערכת מפותחת בקוד פתוח ומוצעת להורדה בחינם. וורדפרס בעברית היא הגרסה המקומית הרשמית של WордПресс.' );

		$keyword6 = new Serbian_Transliteration( 'WordPress (ワードプレス) は、オープンソースのブログ／CMS プラットフォームです。セマンティック Web、コードやデザインの美しさ、Web 標準、ユーザビリティなどを意識して開発されており、無料でダウンロードして使うことができます。' );
		$this->assertEquals( $keyword6->cyrillic(), 'WордПресс (ワードプレス) は、オープンソースのブログ／ЦМС プラットフォームです。セマンティック Wеб、コードやデザインの美しさ、Wеб 標準、ユーザビリティなどを意識して開発されており、無料でダウンロードして使うことができます。' );

		$keyword7 = new Serbian_Transliteration( "
		/_\  / _\ / __\ \_   \\_   \   /_\  _ __| |_    / __\ ___ | | | ___  ___| |_(_) ___  _ __
	 //_\\ \ \ / /     / /\/ / /\/  //_\\| '__| __|  / /   / _ \| | |/ _ \/ __| __| |/ _ \| '_ \
	/  _  \_\ | /___/\/ /_/\/ /_   /  _  \ |  | |_  / /___| (_) | | |  __/ (__| |_| | (_) | | | |
	\_/ \_/\__|____/\____/\____/   \_/ \_/_|   \__| \____/ \___/|_|_|\___|\___|\__|_|\___/|_| |_|" );
		$this->assertEquals( $keyword7->cyrillic(), "
		/_\  / _\ / __\ \_   \\_   \   /_\  _ __| |_    / __\ ___ | | | ___  ___| |_(_) ___  _ __
	 //_\\ \ \ / /     / /\/ / /\/  //_\\| '__| __|  / /   / _ \| | |/ _ \/ __| __| |/ _ \| '_ \
	/  _  \_\ | /___/\/ /_/\/ /_   /  _  \ |  | |_  / /___| (_) | | |  __/ (__| |_| | (_) | | | |
	\_/ \_/\__|____/\____/\____/   \_/ \_/_|   \__| \____/ \___/|_|_|\___|\___|\__|_|\___/|_| |_|" );

		$keyword8 = new Serbian_Transliteration( '`1234567890-=[]\;,./' );
		$this->assertEquals( $keyword8->cyrillic(), '`1234567890-=[]\;,./' );

		$keyword9 = new Serbian_Transliteration( '~!@#$%^&*()_+{}|:<>?' );
		$this->assertEquals( $keyword9->cyrillic(), '~!@#$%^&*()_+{}|:<>?' );
	}

	/**
	 * Test inputs with Latin sentences.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function test_latin_sentences_inputs() {
		$keyword1 = new Serbian_Transliteration( 'Lorem Ipsum je jednostavno model teksta koji se koristi u štamparskoj i slovoslagačkoj industriji.' );
		$this->assertEquals( $keyword1->cyrillic(), 'Лорем Ипсум је једноставно модел текста који се користи у штампарској и словослагачкој индустрији.' );

		$keyword2 = new Serbian_Transliteration( 'Lorem Ipsum je bio standard za model teksta još od 1500. godine, kada je nepoznati štampar uzeo kutiju sa slovima i složio ih kako bi napravio uzorak knjige.' );
		$this->assertEquals( $keyword2->cyrillic(), 'Лорем Ипсум је био стандард за модел текста још од 1500. године, када је непознати штампар узео кутију са словима и сложио их како би направио узорак књиге.' );

		$keyword3 = new Serbian_Transliteration( 'Ne samo što je ovaj model opstao pet vekova, nego je čak počeo da se koristi i u elektronskim medijima, nepromenivši se.' );
		$this->assertEquals( $keyword3->cyrillic(), 'Не само што је овај модел опстао пет векова, него је чак почео да се користи и у електронским медијима, непроменивши се.' );

		$keyword4 = new Serbian_Transliteration( 'Popularizovan je šezdesetih godina dvadesetog veka zajedno sa listovima leterseta koji su sadržali Lorem Ipsum pasuse, a danas sa softverskim paketom za prelom kao što je Aldus PageMaker koji je sadržao Lorem Ipsum verzije.' );
		$this->assertEquals( $keyword4->cyrillic(), 'Популаризован је шездесетих година двадесетог века заједно са листовима летерсета који су садржали Лорем Ипсум пасусе, а данас са софтверским пакетом за прелом као што је Алдус ПагеМакер који је садржао Лорем Ипсум верзије.' );
	}
}
