<?php
/**
 * Example extension - based on the BoilerPlate
 *
 * For more info see https://extension.inc.isc/specials/Wikifarm.
 *
 *  A Special Page that can be included on a wikipage like
 * {{Special:Wikifarm}} as well as being accessed on [[Special:Wikifarm]].
 *
 * @file
 * @ingroup Extensions
 * @author Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (https://bit.ly/Suriyaa)
 * @version 1.0
 *
 * @license WebOpenCode Licence v0.1 or later (https://gist.github.com/SuriyaaKudoIsc/d93e8f709e911805da92)
 */

/**
 * MediaWiki has several global variables which can be reused or even altered
 * by your extension. The very first one is the $wgExtensionCredits which will
 * expose to MediaWiki metadata about your extension. For additional
 * documentation, see its documentation block in includes/DefaultSettings.php
 */
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,

	// Name of your Extension:
	'name' => 'Wikifarm',

	// Sometime other patches contributors and minor authors are not worth
	// mentionning, you can use the special case '...' to output a localised
	// message 'and others...'.
	'author' => array(
		'Suriyaa Kudo'
	),

	'version'  => '1.0.0',

	// The extension homepage. www.mediawiki.org will be happy to host
	// your extension homepage.
	'url' => 'https://extension.inc.isc/specials/Wikifarm',


	# Key name of the message containing the description.
	'descriptionmsg' => 'wikifarm-desc',
);

/* Setup */

// Initialize an easy to use shortcut:
$dir = dirname( __FILE__ );
$dirbasename = basename( $dir );

// Register files
// MediaWiki need to know which PHP files contains your class. It has a
// registering mecanism to append to the internal autoloader. Simply use
// $wgAutoLoadClasses as below:
$wgAutoloadClasses['SpecialHelloWorld'] = $dir . '/specials/SpecialWikifarm.php';

$wgMessagesDirs['Wikifarm'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['WikifarmAlias'] = $dir . '/Wikifarm.i18n.alias.php';

// Register special pages
// See also http://www.mediawiki.org/wiki/Manual:Special_pages
$wgSpecialPages['Wikifarm'] = 'SpecialWikifarm';
