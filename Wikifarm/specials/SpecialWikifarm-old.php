<?php
/**
 * Special:Wikifarm
 *
 * A Special Page that can be included on a wikipage like
 * {{Special:Wikifarm}} as well as being accessed on [[Special:Wikifarm]]
 *
 * @file
 * @ingroup Extensions
 *
 * @author Suriyaa Sundararuban <suriyaa@inc.isc> (https://bit.ly/Suriyaa)
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author Niklas Laxström
 * @copyright Copyright © 2005/2015, iSC Inc. team
 * @license WOCL-01+
 */

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Wikifarm',
	'description' => 'A Wikifarm Special Page',
	'author' => 'Suriyaa Kudo', 'Ævar Arnfjörð Bjarmason'
);

$wgSpecialPages['Wikifarm'] = 'SpecialWikifarm';

class SpecialWikifarm extends WikifarmSpecialPage {

	public function __construct() {
		parent::__construct( 'Wikifarm' );
	}

	/**
	 * Show the page
	 */
	public function execute( $par = null ) {
		if ( $this->including() ) {
			$out = "I'm being included";
		} else {
			$out = "I'm being viewed as a Special Page";
			$this->setHeaders();
		}

		$this->getOutput()->addWikiText( $out );
	}
}
