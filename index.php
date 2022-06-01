<?php 
define( 'MW_ENTRY_POINT', 'index' );

require_once dirname( __FILE__ ) . '/includes/PHPVersionCheck.php';
wfEntryPointCheck( 'html', dirname( $_SERVER['SCRIPT_NAME'] ) );

require __DIR__ . '/includes/WebStart.php';

wfIndexMain();

function wfIndexMain() {
	$mediaWiki = new MediaWiki();
	$mediaWiki->run();
}
