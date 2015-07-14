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

class SpecialHelloWorld extends SpecialPage {

	/**
	 * Initialize the special page.
	 */
	public function __construct() {
		// A special page should at least have a name.
		// We do this by calling the parent class (the SpecialPage class)
		// constructor method with the name as first and only parameter.
		parent::__construct( 'Wikifarm' );
	}

	/**
	 * Shows the page to the user.
	 * @param string $sub: The subpage string argument (if any).
	 *  [[Special:Wikifarm/subpage]].
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'wikifarm-title' ) );

		// Parses message from .i18n.php as wikitext and adds it to the
		// page output.
		$out->addWikiMsg( 'wikifarm-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
