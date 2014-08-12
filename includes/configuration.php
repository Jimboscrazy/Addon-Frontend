<?php
/**
 * This file contains the main configuration as simple array
 */

// This sets the context the application is running in.
// It allows to change certain behavior depending on context.
// The currently supported contexts are:
// development		Used in the development environment
// production		Used on the live website
$context = @is_file(dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'developmentConfiguration.php') ? 'development' : 'production';
define('CONTEXT', $context);
define('SITE_ROOT', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR);

// The base configuration of the application
$configuration = array(
	// prepare dummy database settings (will be overridden by context depending configurations)
	'database' => array(
	'username' => '',
	'password' => '',
	'name'  => '',
	'server' => '',
	),
	// addon dependencies to be met in order for them to be imported
	'dependencies' => array(
		'xbmc.python'	=> '2.1.0',
		'xbmc.gui'		=> '5.0.0'
	),
	// defines some settings needed to interact with the repositories
	'repositories' => array(
		'gotham' => array(
			'name' => 'XBMC v13 - Main Add-On Repository',
			'dataUrl' => 'http://mirrors.xbmc.org/addons/gotham/',
			'xmlUrl' => 'http://mirrors.xbmc.org/addons/gotham/addons.xml',
			'statsUrl' => '',
			'downloadUrl' => ''
		),
		'frodo' => array(
			'name' => 'XBMC v12 - Main Add-On Repository',
			'dataUrl' => 'http://mirrors.xbmc.org/addons/frodo/',
			'xmlUrl' => 'http://mirrors.xbmc.org/addons/frodo/addons.xml',
			'statsUrl' => '',
			'downloadUrl' => ''
		),
		'xbmchub' => array(
			'name' => 'XBMCHUB.com Addon Repository',
			'dataUrl' => 'http://xbmc-hub-repo.googlecode.com/svn/addons/',
			'xmlUrl' => 'http://xbmc-hub-repo.googlecode.com/svn/addons/addons.xml',
			'statsUrl' => '',
			'downloadUrl' => 'http://xbmc-hub-repo.googlecode.com/svn/addons/repository.xbmchub/repository.xbmchub-1.0.3.zip'
		),
/*		'xbmc4xbox' => array(
			'name' => 'XBMC-4-XBOX Addon Repository',
			'dataUrl' => 'http://addons4xbox.googlecode.com/svn/trunk/',
			'xmlUrl' => 'http://addons4xbox.googlecode.com/svn/trunk/addons.xml',
			'statsUrl' => '',
			'downloadUrl' => ''
		),*/

		'addons4xbox' => array( 'name' => 'addons4xbox repo', 'dataUrl' => 'https://github.com/xbmc4xbox/addons4xbox/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/xbmc4xbox/addons4xbox/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'agx' => array( 'name' => 'agx\'s repo', 'dataUrl' => 'http://xbmc-repo-agx.googlecode.com/git/', 'xmlUrl' => 'http://xbmc-repo-agx.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-repo-agx.googlecode.com/files/xbmc-repo-agx-1.0.0.zip' ), 
		'anarchintosh' => array( 'name' => 'anarchintosh Repo', 'dataUrl' => 'http://anarchintosh-projects.googlecode.com/svn/addons/', 'xmlUrl' => 'http://anarchintosh-projects.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://anarchintosh-projects.googlecode.com/files/repository.googlecode.anarchintosh-projects.1.0.1.zip' ), 
		'blacks' => array( 'name' => 'Black\'s Repo', 'dataUrl' => 'http://xperience1080.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://xperience1080.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xperience1080.googlecode.com/svn/trunk/repository.blacks.zip' ), 
		'butchabay' => array( 'name' => 'repository butchabay', 'dataUrl' => 'http://xbmc-repository-butchabay.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://xbmc-repository-butchabay.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-repository-butchabay.googlecode.com/files/xbmc.repo.butchabay.zip' ), 
		'carb0s' => array( 'name' => 'carb0\'s Repo', 'dataUrl' => 'http://carb0s-repo.googlecode.com/svn/addons/', 'xmlUrl' => 'http://carb0s-repo.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://carb0s-repo.googlecode.com/svn/repository.carb0s.zip' ), 
		'claymic' => array( 'name' => 'Repo Claymic', 'dataUrl' => 'http://script-allinone.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://script-allinone.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://mod-skin.googlecode.com/files/repository.claymic-1.0.1.zip' ), 
		'cycnow' => array( 'name' => 'xbmc-cycnow Add-on Repository', 'dataUrl' => 'http://repo.xbmc-cycnow.googlecode.com/hg/', 'xmlUrl' => 'http://repo.xbmc-cycnow.googlecode.com/hg/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://repo.xbmc-cycnow.googlecode.com/hg/repository.googlecode.xbmc-cycnow/repository.googlecode.xbmc-cycnow-latest.zip' ), 
		'doplnky' => array( 'name' => 'XBMC doplnky Czech', 'dataUrl' => 'http://xbmc-doplnky.googlecode.com/git/', 'xmlUrl' => 'http://xbmc-doplnky.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-doplnky.googlecode.com/files/repository.xbmc.doplnky-1.0.3.zip' ), 
		'drascom-scraper' => array( 'name' => 'Turkish Add-ons', 'dataUrl' => 'http://turkishxbmcscraper.googlecode.com/svn/trunk/', 'xmlUrl' => 'https://turkishxbmcscraper.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://turkishxbmcscraper.googlecode.com/files/xbmcTR.repo_1.0.5.zip' ), 
		'drascom' => array( 'name' => 'drascom Add-on Repository', 'dataUrl' => 'https://xbmc-tr-team-turkish-addons.googlecode.com/svn/trunk/', 'xmlUrl' => 'https://xbmc-tr-team-turkish-addons.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-tr-team-turkish-addons.googlecode.com/files/xbmcTR.repo-1.0.7.zip' ), 
		'fightnight' => array( 'name' => 'J0anita Repo', 'dataUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/fightnight/', 'xmlUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/fightnight/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/fightnight/repository.fightnight/repository.fightnight-1.3.zip' ), 
		'hippojay' => array( 'name' => 'PlexBMC Add-on Repository', 'dataUrl' => 'http://hippojay.github.io/repository.plexbmc.addons/download/', 'xmlUrl' => 'http://hippojay.github.io/repository.plexbmc.addons/download/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/hippojay/repository.plexbmc.addons/blob/frodo/download/xbmc.repo.plexbmc/xbmc.repo.plexbmc-2.0.2.zip?raw=true' ), 
		'humla' => array( 'name' => 'Humla Add-ons', 'dataUrl' => 'https://canadanepal-xbmc-plugin.googlecode.com/git/repo/', 'xmlUrl' => 'https://raw.github.com/humla/canadanepal-xbmc/master/humla_repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://canadanepal-xbmc-plugin.googlecode.com/git/repo/repository.humla/repository.humla-1.0.4.zip' ), 
		'hybrid-development' => array( 'name' => 'Hybrid Development Repo', 'dataUrl' => 'http://hybrid-development-repo.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://hybrid-development-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://hybrid-development-repo.googlecode.com/svn/trunk/xbmc.repo.hybrid/xbmc.repo.hybrid-1.0.0.zip' ), 
		'iStream' => array( 'name' => 'iSTREAM XBMC Addons Repository', 'dataUrl' => 'http://istream-xbmc-repo.googlecode.com/svn/repo/zips/', 'xmlUrl' => 'http://istream-xbmc-repo.googlecode.com/svn/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://istream-xbmc-repo.googlecode.com/svn/repo/zips/repository.istream/repository.istream-1.0.zip' ), 
		'jeroen' => array( 'name' => 'Jeroen\'s Repository', 'dataUrl' => 'http://xbmc-focus.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://xbmc-focus.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-focus.googlecode.com/svn/trunk/xbmc.repo.jeroen/xbmc.repo.jeroen-1.0.2.zip' ), 
		'kinkin' => array( 'name' => 'Kinkin\'s Repo', 'dataUrl' => 'http://kinkin-xbmc-repository.googlecode.com/svn/trunk/zips/', 'xmlUrl' => 'http://kinkin-xbmc-repository.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://kinkin-xbmc-repository.googlecode.com/files/repository.Kinkin-1.2.zip' ), 
		'kozz' => array( 'name' => 'Kozz Add-ons', 'dataUrl' => 'http://kozz-addons.googlecode.com/svn/trunk/addons/', 'xmlUrl' => 'http://kozz-addons.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://kozz-addons.googlecode.com/svn/trunk/addons/repository.googlecode.kozz-addons/repository.googlecode.kozz-addons-2.0.9.zip' ), 
		'krysty' => array( 'name' => 'krysty-xbmc Add-ons', 'dataUrl' => 'https://krysty-xbmc.googlecode.com/svn/addons/', 'xmlUrl' => 'https://krysty-xbmc.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://krysty-xbmc.googlecode.com/svn/addons/repository.googlecode.krysty-xbmc/repository.googlecode.krysty-xbmc-1.0.3.zip' ), 
		'lordindy' => array( 'name' => 'lordindy add-on repository', 'dataUrl' => 'http://lordindy-xbmc.googlecode.com/svn/addons/', 'xmlUrl' => 'http://lordindy-xbmc.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://lordindy-xbmc.googlecode.com/svn/addons/repository.googlecode.lordindy/repository.googlecode.lordindy-1.0.0.zip' ), 
		'lsellens' => array( 'name' => 'lsellens openelec addon repository', 'dataUrl' => 'http://dl.dropboxusercontent.com/u/42265484/repository.lsellens/repo/', 'xmlUrl' => 'http://repository-lsellens.googlecode.com/git/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://repository-lsellens.googlecode.com/git/repo/repository.lsellens/repository.lsellens-1.0.5.zip' ), 
		'luxeria' => array( 'name' => 'Luxeria Add-ons', 'dataUrl' => 'http://luxeria-repository.googlecode.com/svn/trunk/luxeria/', 'xmlUrl' => 'http://luxeria-repository.googlecode.com/svn/trunk/luxeria//addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://luxeria-repository.googlecode.com/files/repository.luxeria.zip' ), 
		'maxmustermann' => array( 'name' => 'MaxMustermann\'s Add-ons', 'dataUrl' => 'http://xbmc-development-with-passion.googlecode.com/svn/branches/repo/', 'xmlUrl' => 'http://xbmc-development-with-passion.googlecode.com/svn/branches/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-development-with-passion.googlecode.com/svn/branches/repo/repository.MaxMustermann.xbmc/repository.MaxMustermann.xbmc-1.0.1.zip' ), 
		'mikey1234' => array( 'name' => 'Mikey1234 Add-ons', 'dataUrl' => 'http://mikey1234-repo.googlecode.com/svn/addons/', 'xmlUrl' => 'http://mikey1234-repo.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://mikey1234-repo.googlecode.com/svn/addons/repository.mikey1234/repository.mikey1234-1.0.5.zip' ), 
		'mko' => array( 'name' => 'mKo\'s Add-on Repository', 'dataUrl' => 'http://xbmc-repo-mko.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://xbmc-repo-mko.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-repo-mko.googlecode.com/files/repository.mko.zip' ), 
		'mossy' => array( 'name' => 'Mossy\'s Frodo Repo', 'dataUrl' => 'http://mossy-xbmc-repo.googlecode.com/git/release/', 'xmlUrl' => 'http://mossy-xbmc-repo.googlecode.com/git/release/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://mossy-xbmc-repo.googlecode.com/files/repository.mossy.frodo.zip' ), 
		'MQ' => array( 'name' => 'Aeon MQ 3/4 Skin Repo', 'dataUrl' => 'http://mod-skin.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://mod-skin.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://mod-skin.googlecode.com/files/repository.mq.zip' ), 
		'mudisle' => array( 'name' => 'Mudisle Repo', 'dataUrl' => 'http://xbmc-skin-convergence.googlecode.com/svn/branches/repo/', 'xmlUrl' => 'http://xbmc-skin-convergence.googlecode.com/svn/branches/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-skin-convergence.googlecode.com/files/xbmc.repo.mudisle-v1.0.1.zip' ), 
// just contains others work		'pampereo' => array( 'name' => 'Pampereo XBMC Add-on Repository', 'dataUrl' => 'http://pampereo-xbmc-plugins.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://pampereo-xbmc-plugins.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://pampereo-xbmc-plugins.googlecode.com/svn/Zip/repository.pampereo.xbmc-addons.zip' ), 
		'p2pStreams' => array( 'name' => 'P2P Streams Repo', 'dataUrl' => 'http://p2p-strm.googlecode.com/svn/addons/', 'xmlUrl' => 'http://p2p-strm.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://p2p-strm.googlecode.com/svn/addons/repository.p2p-streams.xbmc/repository.p2p-streams.xbmc-1.0.3.zip' ), 
		'parental-controls' => array( 'name' => 'XBMC Parental Controls Repository', 'dataUrl' => 'https://github.com/killdash9/xbmc-parental-controls/raw/master/repo/', 'xmlUrl' => 'https://github.com/killdash9/xbmc-parental-controls/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/killdash9/xbmc-parental-controls/blob/master/repo/script.video.parentalcontrols/script.video.parentalcontrols-1.5.3.zip?raw=true' ), 
		'phoenix' => array( 'name' => 'Phoenix Addon Repository', 'dataUrl' => 'https://xbmc-phoenix.googlecode.com/svn/trunk/addons/', 'xmlUrl' => 'https://xbmc-phoenix.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-phoenix.googlecode.com/files/repository.googlecode.xbmc-phoenix.zip' ), 
		'quebec' => array( 'name' => 'Quebec XBMC Repository', 'dataUrl' => 'http://quebec-xbmc-plugin.googlecode.com/svn/zip/', 'xmlUrl' => 'https://quebec-xbmc-plugin.googlecode.com/svn/zip/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://quebec-xbmc-plugin.googlecode.com/svn/zip/addons.xml' ), 
		'robwebset' => array( 'name' => 'robwebset\'s XBMC Addons', 'dataUrl' => 'http://robwebset.googlecode.com/svn/releases/', 'xmlUrl' => 'http://robwebset.googlecode.com/svn/releases/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://robwebset.googlecode.com/svn/releases/repository.robwebset/repository.robwebset-1.0.0.zip' ), 
		'ruuk' => array( 'name' => 'ruuk\'s Repo', 'dataUrl' => 'https://ruuks-repo.googlecode.com/svn/trunk/repo/', 'xmlUrl' => 'https://ruuks-repo.googlecode.com/svn/trunk/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://ruuks-repo.googlecode.com/files/ruuk.addon.repository-1.0.0.zip' ), 
		'salem' => array( 'name' => 'Salem\'s Add-on Repository', 'dataUrl' => 'http://skin-refocusbig.googlecode.com/svn/trunk/', 'xmlUrl' => 'http://skin-refocusbig.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://skin-refocusbig.googlecode.com/svn/trunk/repository.salem.zip' ), 
		'syborgs' => array( 'name' => 'Syborg Addon Mods for Skygo', 'dataUrl' => 'http://xbmc-skygo.googlecode.com/svn/trunk/addons/', 'xmlUrl' => 'http://xbmc-skygo.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-skygo.googlecode.com/svn/trunk/addons/repository.syborg/repository.syborg-1.0.2.zip' ), 
		'The-One' => array( 'name' => 'The-One\'s Repo', 'dataUrl' => 'http://the-ones-xbmc-repo.googlecode.com/svn/zips/', 'xmlUrl' => 'http://the-ones-xbmc-repo.googlecode.com/svn/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://the-ones-xbmc-repo.googlecode.com/svn/zips/repository.the-one/repository.the-one-1.2.zip' ), 
		'TvM' => array( 'name' => 'TvM Add-ons', 'dataUrl' => 'http://repository-xbmc-tvm.googlecode.com/git/', 'xmlUrl' => 'http://repository-xbmc-tvm.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://repository-xbmc-tvm.googlecode.com/git/repository.xbmc.tvm/repository.xbmc.tvm-1.0.zip' ), 
// Site No Longer Exists	'TVShack' => array( 'name' => 'TVShack Repo', 'dataUrl' => 'http://xbmc-tvshack.googlecode.com/svn/branches/DHARMA/repo/', 'xmlUrl' => 'http://xbmc-tvshack.googlecode.com/svn/branches/DHARMA/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-tvshack.googlecode.com/svn/branches/DHARMA/repo/repository.googlecode.xbmc-tvshack.zip' ), 
		'VODie' => array( 'name' => 'xbmc-vodie Add-ons', 'dataUrl' => 'http://xbmc-vodie.googlecode.com/svn/repo/', 'xmlUrl' => 'http://xbmc-vodie.googlecode.com/svn/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-vodie.googlecode.com/svn/repo/repository.googlecode.xbmc-vodie/repository.googlecode.xbmc-vodie-1.0.1.zip' ), 
		'wareztuga' => array( 'name' => 'Wareztuga TV Repository', 'dataUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/wareztuga/', 'xmlUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/wareztuga/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://fightnight-xbmc.googlecode.com/svn/addons/wareztuga/repository.wareztuga/repository.wareztuga-1.1.zip' ), 
		'xbmc-korea-frodo' => array( 'name' => 'XBMC Korea Add-ons', 'dataUrl' => 'http://xbmc-korea-addons.googlecode.com/svn/addons/frodo/', 'xmlUrl' => 'http://xbmc-korea-addons.googlecode.com/svn/addons/frodo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-korea-addons.googlecode.com/files/repository.xbmc-korea.com-1.0.6.zip' ), 
		'xbmc-korea-gotham' => array( 'name' => 'XBMC Korea Add-ons', 'dataUrl' => 'http://xbmc-korea-addons.googlecode.com/svn/addons/gotham/', 'xmlUrl' => 'http://xbmc-korea-addons.googlecode.com/svn/addons/gotham/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-korea-addons.googlecode.com/files/repository.xbmc-korea.com-1.0.7.zip' ), 
		'xbmc-skin-development' => array( 'name' => 'XBMC.org Skin Development Repository', 'dataUrl' => 'http://mirrors.xbmc.org/addons/gotham-skins-staging/', 'xmlUrl' => 'http://mirrors.xbmc.org/addons/gotham-skins-staging/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'xbmcnerds' => array( 'name' => 'XBMCNerds Add-ons', 'dataUrl' => 'https://repository-xbmcnerds.googlecode.com/svn/trunk/frodo/', 'xmlUrl' => 'https://repository-xbmcnerds.googlecode.com/svn/trunk/frodo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://repository-xbmcnerds.googlecode.com/svn/trunk/frodo/repository.xbmcnerds.frodo/repository.xbmcnerds.frodo-1.1.3.zip' ), 
		'xunitytalk' => array( 'name' => 'xunitytalk Repository', 'dataUrl' => 'http://xunitytalk-repository.googlecode.com/svn/addons/', 'xmlUrl' => 'http://xunitytalk-repository.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xunitytalk-repository.googlecode.com/svn/addons/repository.xunitytalk/repository.xunitytalk-1.0.0.zip' ), 

//github repositories
		'abultman' => array( 'name' => 'Magnetism Repo', 'dataUrl' => 'http://raw.github.com/bultje76.addon.repository/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/abultman/bultje76.addon.repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/abultman/bultje76.addon.repository/raw/master/bultje76.addon.repository/addon.xml' ), 
		'amitkeret' => array( 'name' => 'Amitkeret\'s Add-ons', 'dataUrl' => 'https://raw.github.com/amitkeret/repository.amitkeret.xbmc/master/zip/', 'xmlUrl' => 'https://raw.githubusercontent.com/amitkeret/repository.amitkeret.xbmc/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/amitkeret/repository.amitkeret.xbmc/blob/master/repository.amitkeret.xbmc.zip?raw=true' ), 
		'AmpedAndWired' => array( 'name' => 'Ampedandwired\'s Add-ons', 'dataUrl' => 'http://github.com/ampedandwired/ampedandwired-xbmc-repo/raw/master/repo/', 'xmlUrl' => 'http://github.com/ampedandwired/ampedandwired-xbmc-repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/ampedandwired/ampedandwired-xbmc-repo/blob/master/repo/repository.ampedandwired/repository.ampedandwired-1.0.0.zip?raw=true' ), 
		'anilkuj' => array( 'name' => 'anilkuj add-on repository', 'dataUrl' => 'https://github.com/anilkuj/xbmc-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/anilkuj/xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/anilkuj/xbmc-addons/blob/master/repo/repository.github.anilkuj-xbmc-addons/repository.github.anilkuj-xbmc-addons-1.0.1.zip?raw=true' ), 
		'arabic-hadynz' => array( 'name' => 'Arabic Addons', 'dataUrl' => 'https://raw.githubusercontent.com/hadynz/repository.arabic.xbmc-addons/master/repo/', 'xmlUrl' => 'https://github.com/hadynz/repository.arabic.xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://dl.dropboxusercontent.com/s/udvtswqpb0hhgil/repository.arabic.xbmc-addons.zip?dl=1&token_hash=AAHoNqwhATpiP-LhUDTB3O4IsC2ckT0LuVOMoS6uW3zW2A' ), 
		'beam' => array( 'name' => 'Beam XBMC Add-ons Repository', 'dataUrl' => 'http://xbmc-repo.bimovi.cz/packages/', 'xmlUrl' => 'https://raw.githubusercontent.com/beam/repository.beam.xbmc-addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-repo.bimovi.cz/packages/repository.beam.xbmc-addons/repository.beam.xbmc-addons-1.0.1.zip' ), 
		'bisha' => array( 'name' => 'Bisha Arabic Addons', 'dataUrl' => 'https://github.com/bisha77/repository.arabic.xbmc-addons/raw/master/repo', 'xmlUrl' => 'https://github.com/bisha77/repository.arabic.xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://dl.dropboxusercontent.com/s/udvtswqpb0hhgil/repository.arabic.xbmc-addons.zip?dl=1&token_hash=AAHoNqwhATpiP-LhUDTB3O4IsC2ckT0LuVOMoS6uW3zW2A' ), 
		'blazetamer' => array( 'name' => 'BlazeTamer Repo', 'dataUrl' => 'http://github.com/Blazetamer/Repo/raw/master/zips/', 'xmlUrl' => 'http://github.com/Blazetamer/Repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Blazetamer/Repo/blob/master/zips/repository.BlazeRepo/repository.BlazeRepo-2.9.zip?raw=true' ), 
		'bossanova808' => array( 'name' => 'Bossanova808\'s Repo', 'dataUrl' => 'http://raw.github.com/bossanova808/repository.bossanova808/master/repository-downloads/', 'xmlUrl' => 'https://raw.githubusercontent.com/bossanova808/repository.bossanova808/master/staging/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/bossanova808/repository.bossanova808/blob/master/repository-downloads/repository.bossanova808/repository.bossanova808-0.1.9.zip?raw=true' ), 
		'bunkford' => array( 'name' => 'bunkford Repo', 'dataUrl' => 'http://github.com/bunkford/Bunkford/raw/master/zips/', 'xmlUrl' => 'http://github.com/bunkford/Bunkford/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/bunkford/Bunkford/blob/master/zips/repository.bunkford/repository.bunkford-1.1.zip?raw=true' ), 
		'CanadaOnDemand' => array( 'name' => 'marius-muja\'s fork of Andrepl\'s', 'dataUrl' => 'https://raw.github.com/irfancharania/canada.on.demand.repo/master/zips/', 'xmlUrl' => 'https://raw.github.com/irfancharania/canada.on.demand.repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/irfancharania/canada.on.demand.repo/blob/master/zips/repository.CanadaOnDemand/repository.CanadaOnDemand-1.1.0.zip?raw=true' ), 
		'chakravyu' => array( 'name' => 'Chakravyu XBMC Addon Repository', 'dataUrl' => 'https://github.com/chakravyu/repository.xbmc.chakra/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/chakravyu/repository.xbmc.chakra/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/chakravyu/repository.xbmc.chakra/blob/master/repository.xbmc.chakra/repository.xbmc.chakra-1.0.0.zip?raw=true' ), 
		'chintogtokh' => array( 'name' => 'Chintogtokh XBMC Addon Repository', 'dataUrl' => 'https://raw.githubusercontent.com/chintogtokh/repository.chintogtokh.xbmc/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/chintogtokh/repository.chintogtokh.xbmc/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/chintogtokh/repository.chintogtokh.xbmc/raw/master/addons.xml' ), 
		'cocawe' => array( 'name' => 'Cocawe\'s Add-on Repository', 'dataUrl' => 'https://raw.github.com/cocawe/My-xbmc-repo/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/cocawe/My-xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/cocawe/My-xbmc-repo/blob/master/zips/repository.cocawe/repository.cocawe-1.3.zip?raw=true' ), 
		'codenx' => array( 'name' => 'codenx XBMC Addon Repository', 'dataUrl' => 'https://github.com/codenx/codenx-xbmc-addons/raw/master/data/', 'xmlUrl' => 'https://github.com/codenx/codenx-xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/codenx/codenx-xbmc-addons/blob/master/repository.codenx.addons-2.0.9.zip?raw=true' ), 
		'cyrus007' => array( 'name' => 'Cyrus007 Addon Repository', 'dataUrl' => 'https://github.com/cyrus007/xbmc-addons/raw/master/repository.cyrus007/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/cyrus007/xbmc-addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/cyrus007/xbmc-addons/blob/master/repository.cyrus007-xbmc-addons.zip?raw=true' ), 
		'dbsr' => array( 'name' => 'dbsr\'s xbmc addon repo', 'dataUrl' => 'https://github.com/dbsr/repository.dbsr.xbmc_addons/raw/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/dbsr/repository.dbsr.xbmc_addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/dbsr/repository.dbsr.xbmc_addons/blob/master/repository.dbsr.xbmc_addons.zip?raw=true' ), 
		'DixieDean' => array( 'name' => 'DixieDean Add-ons', 'dataUrl' => 'https://raw.github.com/DixieDean/Dixie-Deans-XBMC-Repo/master/zips/', 'xmlUrl' => 'https://raw.github.com/DixieDean/Dixie-Deans-XBMC-Repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/DixieDean/Dixie-Deans-XBMC-Repo/blob/master/zips/repository.Dixie-Deans-XBMC-Repo/repository.Dixie-Deans-XBMC-Repo-1.0.7.zip?raw=true' ), 
		'dodoadoodoo' => array( 'name' => 'dodoadoodoo Add-ons', 'dataUrl' => 'https://raw.githubusercontent.com/dodoadoodoo/xbmc-repository/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/dodoadoodoo/xbmc-repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/dodoadoodoo/xbmc-repository/raw/master/addons.xml' ), 
		'eldorado' => array( 'name' => 'Eldorado Add-ons', 'dataUrl' => 'https://github.com/Eldorados/eldorado-xbmc-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/Eldorados/eldorado-xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Eldorados/eldorado-xbmc-addons/blob/master/repo/repository.eldorado/repository.eldorado-1.0.2.zip?raw=true' ), 
		'eleazor' => array( 'name' => 'eleazor Repo', 'dataUrl' => 'https://raw.github.com/eleazarcoding/eleazar-xbmc/master/', 'xmlUrl' => 'http://github.com/eleazarcoding/eleazar-xbmc/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/eleazarcoding/eleazar-xbmc/blob/master/repository.eleazar/repository.eleazar-1.2.zip?raw=true' ), 
		'fehmer' => array( 'name' => 'Raptor2101 Repo', 'dataUrl' => 'https://raw.github.com/fehmer/xbmc-repository/master/addons/', 'xmlUrl' => 'https://raw.githubusercontent.com/fehmer/xbmc-repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/fehmer/xbmc-repository/blob/master/repository.github.fehmer.zip?raw=true' ), 
		'freeman' => array( 'name' => 'Freeman\'s Repo', 'dataUrl' => 'https://raw.github.com/freeman212/xbmc.repo.freeman/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/freeman212/xbmc.repo.freeman/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/freeman212/xbmc.repo.freeman/blob/master/xbmc.repo.freeman/xbmc.repo.freeman-1.0.0.zip?raw=true' ), 
		'docshadrach' => array( 'name' => 'Doc Shadrach\'s Add-ons', 'dataUrl' => 'http://github.com/XBMCSpot/docshadrach.repository/raw/master/zips/', 'xmlUrl' => 'http://github.com/XBMCSpot/docshadrach.repository/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://t.co/nTxiX17wUP' ), 
		'Hc232' => array( 'name' => 'Asteron\'s Addon Repository', 'dataUrl' => 'http://github.com/Hc232/xbmc.repository/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/Hc232/xbmc.repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Hc232/xbmc.repository/raw/master/addons.xml' ), 
		'hmsb' => array( 'name' => 'HMB Repository', 'dataUrl' => 'http://hmsb.github.io/repository.hmb.xbmc.addons/', 'xmlUrl' => 'https://raw.githubusercontent.com/HMSB/repository.hmb.xbmc.addons/gh-pages/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/HMSB/repository.hmb.xbmc.addons/blob/gh-pages/repository.hmb.xbmc.addons/repository.hmb.xbmc.addons-1.1.1.zip?raw=true' ), 
		'horizon0156' => array( 'name' => 'Horizon777 XBMC Add-ons', 'dataUrl' => 'https://raw.githubusercontent.com/Horizon0156/repository.horizon.xbmc/master/zip/', 'xmlUrl' => 'https://raw.githubusercontent.com/Horizon0156/repository.horizon.xbmc/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Horizon0156/repository.horizon.xbmc/blob/master/zip/repository.horizon.xbmc/repository.horizon.xbmc-1.0.zip?raw=true' ), 
		'iamfreetofly' => array( 'name' => 'Iamfreetofly Add-ons', 'dataUrl' => 'https://raw.githubusercontent.com/iamfreetofly/repository.iamfreetofly-xbmc-repaddon-bb/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/iamfreetofly/repository.iamfreetofly-xbmc-repaddon-bb/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/iamfreetofly/repository.iamfreetofly-xbmc-repaddon-bb/raw/master/addons.xml' ), 
		'icharania' => array( 'name' => 'icharania Repo', 'dataUrl' => 'https://raw.github.com/irfancharania/icharania.repo/master/zips/', 'xmlUrl' => 'https://raw.github.com/irfancharania/icharania.repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/irfancharania/canada.on.demand.repo/blob/master/zips/repository.CanadaOnDemand/repository.CanadaOnDemand-1.1.0.zip?raw=true' ), 
		'icanuck' => array( 'name' => 'iCanuck\'s Repo', 'dataUrl' => 'https://github.com/iCanuck/iCanuck-XBMC-Repo/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/iCanuck/iCanuck-XBMC-Repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/iCanuck/iCanuck-XBMC-Repo/blob/master/repository.icanuck/repository.icanuck-1.0.zip?raw=true' ), 
		'japanese' => array( 'name' => 'Japanese XBMC Add-ons', 'dataUrl' => 'https://raw.github.com/xbmc-now/japanese-xbmc-addons/master/repo/', 'xmlUrl' => 'https://raw.github.com/xbmc-now/japanese-xbmc-addons/master/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/xbmc-now/japanese-xbmc-addons/blob/master/repo/repository.japanese/repository.japanese-1.0.0.zip?raw=true' ), 
// Old Repo 'Jas0nPCOriginal' => array( 'name' => 'Jas0nPC\'s Old Github Repo', 'dataUrl' => 'https://raw.github.com/jas0npc/jas0npc/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/jas0npc/jas0npc/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/jas0npc/jas0npc/blob/master/zips/repository.Jas0npc/repository.Jas0npc-1.6.zip?raw=true' ), 
		'k3oni' => array( 'name' => 'k3oni\'s Repo', 'dataUrl' => 'https://raw.githubusercontent.com/k3oni/repository.k3oni.xbmc-addons/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/k3oni/repository.k3oni.xbmc-addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/k3oni/repository.k3oni.xbmc/archive/master.zip' ), 
		'karrade' => array( 'name' => 'Karrade Repo', 'dataUrl' => 'http://github.com/Karrade/xbmc-repo/raw/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/Karrade/xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Karrade/xbmc-repo/blob/master/repo/repository.karrade/repository.karrade.zip?raw=true' ), 
		'kasiks' => array( 'name' => 'Kasiks Repo', 'dataUrl' => 'https://github.com/Kasik/Kasiks-Repo/raw/master/zips/', 'xmlUrl' => 'https://github.com/Kasik/Kasiks-Repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Kasik/Kasiks-Repo/blob/master/zips/repository.Kasik/repository.Kasik-1.1.zip?raw=true' ), 
		'keesV' => array( 'name' => 'KeesV Repo', 'dataUrl' => 'https://raw.github.com/KeesV/xbmc-repo/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/KeesV/xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/KeesV/xbmc-repo/blob/master/repository.keesv/repository.keesv-1.0.0.zip?raw=true' ), 
		'kuroshi' => array( 'name' => 'Kuroshi\'s XBMC Repository', 'dataUrl' => 'http://ramblingahoge.net/kuroshi-xbmc-repo/', 'xmlUrl' => 'https://github.com/kuruoujou/kuroshi-xbmc-repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/kuruoujou/kuroshi-xbmc-repo/blob/master/repository.kuroshi/repository.kuroshi-2.0.1.zip?raw=true' ), 
		'lambda' => array( 'name' => 'Lambda\'s Repository', 'dataUrl' => 'http://raw.github.com/lambda81/lambda-xbmc-addons/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/lambda81/lambda-xbmc-addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/lambda81/lambda-xbmc-addons/blob/master/repository.lambda-1.0.5.zip?raw=true' ), 
		'leopold' => array( 'name' => 'Leopold\'s Add-ons', 'dataUrl' => 'https://raw.github.com/LS80/xbmc.repo.leopold/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/LS80/xbmc.repo.leopold/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/LS80/xbmc.repo.leopold/blob/master/xbmc.repo.leopold/xbmc.repo.leopold-2.1.0.zip?raw=true' ), 
		'leandros' => array( 'name' => 'Leandros Repository', 'dataUrl' => 'http://xbmcrepo.arvid-g.de/', 'xmlUrl' => 'https://raw.githubusercontent.com/Leandros/XBMC-Repository/master/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmcrepo.arvid-g.de/repository.leandros.xbmc-plugins/repository.leandros.xbmc-plugins-1.0.0.zip' ), 
		'lunatixz' => array( 'name' => 'Lunatixz Add-ons', 'dataUrl' => 'http://raw.github.com/Lunatixz/XBMC_Addons/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/Lunatixz/XBMC_Addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Lunatixz/XBMC_Addons/blob/master/zips/repository.lunatixz/repository.lunatixz-1.0.zip?raw=true' ), 
		'mablae' => array( 'name' => 'NordishByNature Addons', 'dataUrl' => 'http://github.com/mablae/xbmc-repo-nordish-by-nature/raw/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/mablae/xbmc-repo-nordish-by-nature/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/mablae/xbmc-repo-nordish-by-nature/blob/master/repo/xbmc.repo.nordish-by-nature/xbmc.repo.nordish-by-nature-0.4.0.zip?raw=true' ), 
		'metalkettle' => array( 'name' => 'metalkettle\'s Repo', 'dataUrl' => 'http://raw.github.com/metalkettle/MetalKettles-Addon-Repository/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/metalkettle/MetalKettles-Addon-Repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/metalkettle/MetalKettles-Addon-Repository/blob/master/zips/repository.metalkettle/repository.metalkettle-1.4.1.zip?raw=true' ), 
		'mikaelec' => array( 'name' => 'MikaElec\'s Repository', 'dataUrl' => 'https://raw.githubusercontent.com/mikaelec/mikaelec-xbmc-repo/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/mikaelec/mikaelec-xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/mikaelec/mikaelec-xbmc-repo/blob/master/repository.mikaelec-0.1.zip?raw=true' ), 
		'MisterX' => array( 'name' => 'MisterX Adult Repo', 'dataUrl' => 'https://raw.github.com/MisterXx/MisterX/master/zips/', 'xmlUrl' => 'http://github.com/MisterXx/MisterX/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/MisterXx/MisterX/blob/master/zips/repository.MisterX/repository.MisterX-1.0.9.zip?raw=true' ), 
		'morstar' => array( 'name' => 'morstar\'s repo', 'dataUrl' => 'https://github.com/mortstar/repository-mortstar-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/mortstar/repository-mortstar-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/mortstar/repository-mortstar-addons/blob/master/repository.mortstar.addons-1.2.0.zip?raw=true' ), 
		'NuisMons' => array( 'name' => 'NuisMons XBMC Add-ons', 'dataUrl' => 'https://raw.github.com/NuisMons/nuXBMCRepo/master/addons/', 'xmlUrl' => 'https://raw.githubusercontent.com/NuisMons/nuXBMCRepo/master/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/NuisMons/nuXBMCRepo/raw/master/addons/repository.nuismons/addon.xml' ), 
		'o9r1sh' => array( 'name' => 'o9r1sh\'s Repo', 'dataUrl' => 'http://github.com/o9r1sh/o9r1sh/raw/master/zips/', 'xmlUrl' => 'http://github.com/o9r1sh/o9r1sh/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/o9r1sh/o9r1sh/blob/master/zips/repository.o9r1sh/repository.o9r1sh-1.3.zip?raw=true' ), 
		'pietervanh' => array( 'name' => 'pietervanh\'s repo', 'dataUrl' => 'https://github.com/pietervanh/xbmc-repository-pietervanh/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/pietervanh/xbmc-repository-pietervanh/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/pietervanh/xbmc-repository-pietervanh/blob/master/repository.pietervanh.addons/repository.pietervanh.addons-1.0.0.zip?raw=true' ), 
		'polskie_wtyczki' => array( 'name' => 'Polskie Wtyczki Add-ons', 'dataUrl' => 'http://raw.github.com/xbmc-addons-polish/polskie_wtyczki/master/download/', 'xmlUrl' => 'https://raw.githubusercontent.com/xbmc-addons-polish/polskie_wtyczki/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/xbmc-addons-polish/polskie_wtyczki/blob/master/download/repository.unofficial.polish/repository.unofficial.polish-2.0.0.zip?raw=true' ), 
		'popeye' => array( 'name' => 'Popeye\'s Repo', 'dataUrl' => 'https://raw.github.com/TsUPeR/xbmc-repo/master/repo/', 'xmlUrl' => 'https://raw.github.com/TsUPeR/xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/TsUPeR/xbmc-repo/blob/master/repo/repository.popeye/repository.popeye-1.0.1.zip?raw=true' ), 
		'proteusplum' => array( 'name' => 'Sam Price\'s Repo', 'dataUrl' => 'https://github.com/proteusplum/mflow-xbmc-plugin-repo/raw/master/downloads/', 'xmlUrl' => 'https://raw.githubusercontent.com/proteusplum/mflow-xbmc-plugin-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/proteusplum/mflow-xbmc-plugin-repo/blob/master/downloads/repository.mFlow/repository.mFlow.zip?raw=true' ), 
		'QF' => array( 'name' => 'QF Add-ons', 'dataUrl' => 'https://github.com/vikjon0/qf-xbmc-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/vikjon0/qf-xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/vikjon0/qf-xbmc-addons/blob/master/repo/repository.qf.addons/repository.qf.addons-1.0.1.zip?raw=true' ), 
		'queeup' => array( 'name' => 'Queeup Add-ons', 'dataUrl' => 'http://raw.github.com/queeup/repository.queeup/frodo/download/', 'xmlUrl' => 'http://raw.github.com/queeup/repository.queeup/frodo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/queeup/repository.queeup/blob/gotham/repository.queeup.zip?raw=true' ), 
		'rasjani' => array( 'name' => 'Rasjani\'s Repo', 'dataUrl' => 'http://pcuf.fi/~rasjani/xbmc-rasjanisrepo/', 'xmlUrl' => 'https://raw.githubusercontent.com/rasjani/xbmc-rasjanisrepo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/rasjani/xbmc-rasjanisrepo/blob/master/repository.rasjanisrepo.xbmc/repository.rasjanisrepo.xbmc-1.0.0.zip?raw=true' ), 
		'regss' => array( 'name' => 'Regss Add-ons', 'dataUrl' => 'https://raw.github.com/Regss/xbmc-regss-repository/master/repo/', 'xmlUrl' => 'https://raw.github.com/Regss/xbmc-regss-repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Regss/xbmc-regss-repository/blob/master/repository.regss/repository.regss-1.2.1.zip?raw=true' ), 
		'rivy' => array( 'name' => 'RIVY XBMC Repository', 'dataUrl' => 'https://raw.github.com/rivy/xbmc-repository/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/rivy/xbmc-repository/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/rivy/xbmc-repository/blob/master/repository.rivy.xbmc/repository.rivy.xbmc-1.0.0.zip?raw=true' ), 
		'rodrigo' => array( 'name' => 'Rodrigo\'s Repository', 'dataUrl' => 'https://raw.github.com/Rodrigoke/XBMC.repo/master/zips/', 'xmlUrl' => 'http://github.com/Rodrigoke/XBMC.repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/rodrigoke/XBMC.repo/blob/master/zips/repository.Rodrigo/repository.Rodrigo-1.0.3.zip?raw=true' ), 
		'ruxton' => array( 'name' => 'Ruxton\'s XBMC Addon Repository', 'dataUrl' => 'https://github.com/Ruxton/xbmc-addon-repo/raw/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/Ruxton/xbmc-addon-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Ruxton/xbmc-addon-repo/blob/master/repo/repository.ruxton/repository.ruxton-0.2.zip?raw=true' ), 
		'ScudLee' => array( 'name' => 'SudLee\'s Add-on Repository', 'dataUrl' => 'https://github.com/ScudLee/scudlee-xbmc-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/ScudLee/scudlee-xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/ScudLee/scudlee-xbmc-addons/blob/master/repo/repository.scudlee/repository.scudlee-1.0.0.zip?raw=true' ), 
		'shaiu' => array( 'name' => 'Shaiu\'s Add-ons', 'dataUrl' => 'https://raw.github.com/shaiu/shaiu-xbmc-repo/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/shaiu/shaiu-xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/shaiu/xbmc/blob/master/repo/repository.liquid8d/repository.liquid8d-1.0.0.zip?raw=true' ), 
		'siriuzwhite' => array( 'name' => 'Siriuz Add-on Repository', 'dataUrl' => 'https://raw.github.com/siriuzwhite/xbmc.repository/master/repository/', 'xmlUrl' => 'https://raw.githubusercontent.com/siriuzwhite/xbmc-repo-deprecated/master/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/siriuzwhite/repo-deprecated/archive/master.zip' ), 
		'spoyser' => array( 'name' => 'Spoyser XBMC Add-ons', 'dataUrl' => 'https://raw.github.com/spoyser/spoyser-repo/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/spoyser/spoyser-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/spoyser/spoyser-repo/blob/master/zips/repository.spoyser/repository.spoyser-1.0.6.zip?raw=true' ), 
		'suzuke' => array( 'name' => 'Suzuke Repository', 'dataUrl' => 'https://raw.githubusercontent.com/suzuke/repository.suzuke.xbmc-addons/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/suzuke/repository.suzuke.xbmc-addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/suzuke/repository.suzuke.xbmc-addons/raw/master/addons.xml' ), 
		'teeedubb' => array( 'name' => 'teeedubb\'s Add-on Repository', 'dataUrl' => 'http://raw.github.com/teeedubb/teeedubb-xbmc-repo/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/teeedubb/teeedubb-xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/teeedubb/teeedubb-xbmc-repo/blob/master/repository.teeedubb/repository.teeedubb-1.0.1.zip?raw=true' ), 
		'TheHighways' => array( 'name' => 'TheHighway\'s XBMC Add-ons', 'dataUrl' => 'http://raw.github.com/HIGHWAY99/repository.thehighway/master/repo/', 'xmlUrl' => 'http://github.com/HIGHWAY99/repository.thehighway/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/HIGHWAY99/repository.thehighway/blob/master/repo/repository.thehighway/repository.thehighway-0.0.4.zip?raw=true' ), 
		'TheHighwaysEasyInstall' => array( 'name' => 'TheHighway\'s Easy Install Repo', 'dataUrl' => 'http://raw.github.com/HIGHWAY99/repository.thehighway/master/repo/', 'xmlUrl' => 'http://github.com/HIGHWAY99/repository.thehighway/raw/master/repoEasyInstall.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/HIGHWAY99/repository.thehighway/blob/master/repo/repository.TheHighwaysEasyInstallRepo/repository.TheHighwaysEasyInstallRepo-0.0.1.zip?raw=true' ), 
		'the_silencer' => array( 'name' => 'The Silencer\'s Repo', 'dataUrl' => 'http://raw.github.com/TheSilencer001/The_Silencer/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/TheSilencer001/The_Silencer/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/TheSilencer001/The_Silencer/blob/master/zips/repository.The_Silencer/repository.The_Silencer-1.5.zip?raw=true' ), 
		'TheYid' => array( 'name' => 'TheYid Repo', 'dataUrl' => 'https://raw.githubusercontent.com/TheYid/My-Repo/master/zips/', 'xmlUrl' => 'https://github.com/TheYid/My-Repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/TheYid/My-Repo/blob/master/zips/repository.TheYid/repository.TheYid-1.3.zip?raw=true' ), 
		'tkantor81' => array( 'name' => 'tkantor81\'s Addons', 'dataUrl' => 'https://raw.githubusercontent.com/tkantor81/repository.tkantor81/master/repository/', 'xmlUrl' => 'https://raw.githubusercontent.com/tkantor81/repository.tkantor81/master/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/tkantor81/repository.tkantor81/raw/master/repository/addons.xml' ), 
		'totalinstaller' => array( 'name' => 'Total Installer Repo', 'dataUrl' => 'https://raw.github.com/totalxbmc/totalinstaller/master/zips/<', 'xmlUrl' => 'https://github.com/totalxbmc/totalinstaller/raw/master/zips/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/totalxbmc/totalinstaller/blob/master/zips/repository.totalinstaller/repository.totalinstaller-1.0.1.zip?raw=true' ), 
		't0mm0' => array( 'name' => 't0mm0 Addons', 'dataUrl' => 'http://github.com/t0mm0/t0mm0-xbmc-plugins/raw/master/repo/', 'xmlUrl' => 'http://github.com/t0mm0/t0mm0-xbmc-plugins/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/t0mm0/t0mm0-xbmc-plugins/blob/master/repo/repository.t0mm0/repository.t0mm0-1.0.3.zip?raw=true' ), 
		'traitravinh' => array( 'name' => 'TraiTraVinh\'s Testing Repo', 'dataUrl' => 'https://raw.github.com/traitravinh/traitravinh.repository.xbmc/master/zips/', 'xmlUrl' => 'https://raw.githubusercontent.com/traitravinh/traitravinh.repository.xbmc/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/traitravinh/traitravinh.repository.xbmc/blob/master/zips/repository.traitravinh/repository.traitravinh-1.0.zip?raw=true' ), 
		'vinnydude' => array( 'name' => 'VinnyDude Add-ons', 'dataUrl' => 'http://raw.github.com/vinnydude/vinnydude.repo/master/zips/', 'xmlUrl' => 'http://github.com/vinnydude/vinnydude.repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/vinnydude/vinnydude.repo/blob/master/zips/repository.Vinnydude/repository.Vinnydude-1.1.zip?raw=true' ), 
		'wiiego' => array( 'name' => 'Wiiego Add-ons', 'dataUrl' => 'https://github.com/diegofn/wiiego-xbmc-addons/raw/master/repo/', 'xmlUrl' => 'https://github.com/diegofn/wiiego-xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/diegofn/wiiego-xbmc-addons/blob/master/repo/repository.wiiego/repository.wiiego-1.0.1.zip?raw=true' ), 
		'xbmcadult' => array( 'name' => 'Adult Add-ons', 'dataUrl' => 'http://raw.github.com/xbmc-adult/xbmc-adult/ghmaster/', 'xmlUrl' => 'https://raw.githubusercontent.com/xbmc-adult/xbmc-adult/ghmaster/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/xbmc-adult/xbmc-adult/blob/ghmaster/repository.xbmcadult/repository.xbmcadult-1.0.6.zip?raw=true' ), 		
		'XBMCCatchupTVAU' => array( 'name' => 'XBMC CatchupTV AU Add-on Repository', 'dataUrl' => 'https://github.com/xbmc-catchuptv-au/repo/raw/master/', 'xmlUrl' => 'https://raw.github.com/xbmc-catchuptv-au/repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/xbmc-catchuptv-au/repo/blob/master/repository.googlecode.xbmc-catchuptv-au/repository.googlecode.xbmc-catchuptv-au-1.3.zip?raw=true' ), 
		'xbmc-israel' => array( 'name' => 'XBMC Israeli Streaming Sites', 'dataUrl' => 'https://raw.githubusercontent.com/cubicle-vdo/xbmc-israel/master/repo/', 'xmlUrl' => 'https://github.com/cubicle-vdo/xbmc-israel/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/cubicle-vdo/xbmc-israel/blob/master/repo/repository.xbmc-israel/repository.xbmc-israel-1.0.4.zip?raw=true' ), 
		'xycl' => array( 'name' => 'xycl Add-ons', 'dataUrl' => 'https://raw.github.com/Xycl/repository.xycl.addons/master/', 'xmlUrl' => 'https://raw.github.com/Xycl/repository.xycl.addons/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Xycl/repository.xycl.addons/blob/master/repository.xycl.addons/repository.xycl.addons-1.2.1.zip?raw=true' ),
		'yllar' => array( 'name' => 'Yllar\'s XBMC Addon Repository', 'dataUrl' => 'https://github.com/yllar/yllar-xbmc-repo/raw/master/repo/', 'xmlUrl' => 'https://raw.githubusercontent.com/yllar/yllar-xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/yllar/yllar-xbmc-repo/blob/master/repo/repository.yllar/repository.yllar-1.0.0.zip?raw=true' ), 


//other repositories
		'angelscry' => array( 'name' => 'Angelscry Add-ons', 'dataUrl' => 'http://www.gwenael.org/Repository/', 'xmlUrl' => 'http://www.gwenael.org/Repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://www.gwenael.org/Repository/repository.angelscry.xbmc-plugins/repository.angelscry.xbmc-plugins-1.2.2.zip' ), 
		'casual' => array( 'name' => 'Team Jacker', 'dataUrl' => 'http://aur.causal.ca/xbmc/addons/', 'xmlUrl' => 'http://aur.causal.ca/xbmc/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://aur.causal.ca/xbmc/addons/repository.causal.ca/repository.causal.ca-2.1.0.zip' ), 
		'fastcolors' => array( 'name' => 'fastcolors Repo', 'dataUrl' => 'http://fastcolors.net/Repo/', 'xmlUrl' => 'http://fastcolors.net/Repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://fastcolors.net/Repo/repository.fastcolors/repository.fastcolors-3.0.1.zip' ), 
		'hitcher' => array( 'name' => 'Hitcher\'s  Add-on Repository', 'dataUrl' => 'http://dl.dropbox.com/u/19745842/Repo/', 'xmlUrl' => 'http://dl.dropbox.com/u/19745842/Repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://dl.dropbox.com/u/19745842/Repo/xbmc.repo.hitcher/xbmc.repo.hitcher-4.0.0.zip' ), 
		'jools' => array( 'name' => 'Jools Repository', 'dataUrl' => 'http://cyco.se/xbmc/repo/', 'xmlUrl' => 'http://cyco.se/xbmc/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://cyco.se/xbmc/repo/repository.jools/repository.jools-0.1.0.zip' ), 
		'jugger' => array( 'name' => 'Jugger\'s Repo', 'dataUrl' => 'http://content.wuala.com/contents/Jugger/Repo/', 'xmlUrl' => 'http://content.wuala.com/contents/Jugger/Repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'mindmade' => array( 'name' => 'mindmade XBMC Addons Repository', 'dataUrl' => 'http://www.mindmade.org/~andi/xbmc/addons/', 'xmlUrl' => 'http://www.mindmade.org/~andi/xbmc/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://www.mindmade.org/files/repository.mindmade.zip' ), 
		'openelec' => array( 'name' => 'OpenElec Add-Ons', 'dataUrl' => 'http://unofficial.addon.pro/addons/3.1/RPi/arm/', 'xmlUrl' => 'http://unofficial.addon.pro/addons/3.1/RPi/arm/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'passion-frodo' => array( 'name' => 'Passion XBMC Repo', 'dataUrl' => 'http://passion-xbmc.org/addons/Download.php/', 'xmlUrl' => 'http://passion-xbmc.org/addons/addons.php/12.0', 'statsUrl' => '', 'downloadUrl' => 'http://passion-xbmc.org/addons/Download.php/repository.passion.xbmc.org.frodo/repository.passion.xbmc.org.frodo-3.0.1.zip' ), 
		'passion-gotham' => array( 'name' => 'Passion XBMC Repo', 'dataUrl' => 'http://passion-xbmc.org/addons/Download.php/', 'xmlUrl' => 'http://passion-xbmc.org/addons/addons.php/13.0', 'statsUrl' => '', 'downloadUrl' => 'http://passion-xbmc.org/addons/Download.php/repository.passion.xbmc.org.gotham/repository.passion.xbmc.org.gotham-4.0.0.zip' ), 
		'mx' => array( 'name' => 'MX Add-on Repository', 'dataUrl' => 'http://remoteman.tv/repo/', 'xmlUrl' => 'http://remoteman.tv/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://remoteman.tv/repo/repository.mx.zip' ), 
		'SD-XBMC' => array( 'name' => 'SD Polish XBMC Repository', 'dataUrl' => 'http://sd-xbmc.org/repository/', 'xmlUrl' => 'http://sd-xbmc.org/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://sd-xbmc.org/repository/repository.sd-xbmc.org/repository.sd-xbmc.org-2.0.0.zip' ), 
		'smithgreek' => array( 'name' => 'Smithgeek Repository', 'dataUrl' => 'https://github.com/brentosmith/xbmc-addons/raw/master/Releases/', 'xmlUrl' => 'https://github.com/brentosmith/xbmc-addons/raw/master/Releases/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/brentosmith/xbmc-dvdextras/archive/master.zip' ), 
		'smoothstreams' => array( 'name' => 'SmoothStreams Repo', 'dataUrl' => 'http://cdn.smoothstreams.tv/players/xbmc/repo/', 'xmlUrl' => 'http://smoothstreams.tv/players/xbmc/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://cdn.smoothstreams.tv/players/xbmc/repo/repository.smoothstreams/repository.smoothstreams-1.0.2.zip' ), 
		'TheWiz' => array( 'name' => 'TheWiz Hebrew Repo', 'dataUrl' => 'http://thewiz.info/XBMC/', 'xmlUrl' => 'http://thewiz.co.il/xbmc/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		't0mcat' => array( 'name' => 't0mcat Addons', 'dataUrl' => 'http://dl.dropbox.com/u/112011567/xbmc/addons/', 'xmlUrl' => 'http://dl.dropbox.com/u/112011567/xbmc/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://thewiz.info/XBMC/repository.TheWiz/repository.TheWiz-2.0.0.zip' ), 
		'TVCatchup' => array( 'name' => 'TVCatchup Repository', 'dataUrl' => 'http://plugins.tvcatchup.com/~xbmc/addons/', 'xmlUrl' => 'http://plugins.tvcatchup.com/~xbmc/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://plugins.tvcatchup.com/~xbmc/addons/repository.tvcatchup.addons/repository.tvcatchup.addons-1.0.3.zip' ), 
		'xbmc-czech' => array( 'name' => 'Czech Add-ons', 'dataUrl' => 'http://xbmc-czech.sf.net/addons/', 'xmlUrl' => 'http://xbmc-czech.sf.net/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://xbmc-czech.sourceforge.net/addons/repository.xbmc-czech.sf.net/repository.xbmc-czech.sf.net-1.0.zip' ), 
		'xbmcplus' => array( 'name' => 'xbmcplus Add-on Repository', 'dataUrl' => 'https://raw.githubusercontent.com/moneymaker365/xbmc-xbmcplus-plugins/master/download/', 'xmlUrl' => 'https://raw.githubusercontent.com/moneymaker365/xbmc-xbmcplus-plugins/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/moneymaker365/repository.xbmcplus.xbmc-plugins/releases/download/1.3/repository.xbmcplus.xbmc-plugins-1.3.zip' ), 

//manually maintained		
		'brazilian' => array( 'name' => 'Brazilian Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'https://bitbucket.org/vitorhirota/repository.brazilian.xbmc-addons/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bitbucket.org/vitorhirota/repository.brazilian.xbmc-addons/src/adf8e96f8fceaed1a2b05c1ee58a60b6b65f690f/repo/repository.brazilian.xbmc-addons-1.0.0.zip?at=master' ), 
		'AJNewLook' => array( 'name' => 'AJ New Look Add-ons', 'dataUrl' => 'http://apple-tv2-xbmc.googlecode.com/svn/trunk/AddonsNewLookRepo/', 'xmlUrl' => 'http://apple-tv2-xbmc.googlecode.com/svn/trunk/AddonsNewLookRepo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://apple-tv2-xbmc.googlecode.com/svn/trunk/AddonsNewLookRepo/repository.aj-addons/repository.aj-addons-1.0.1.zip'), 
		'AJ' => array( 'name' => 'AJ Video Add-ons', 'dataUrl' => 'https://raw/github.com/totalinstall/manual-updates/master/', 'xmlUrl' => 'http://apple-tv2-xbmc.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://apple-tv2-xbmc.googlecode.com/svn/trunk/addons/repository.googlecode.apple-tv2-xbmc/repository.googlecode.apple-tv2-xbmc-1.5.3.zip'), 
		'ao' => array( 'name' => 'ao Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://ao-xbmc-repository.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://ao-xbmc-repository.googlecode.com/files/repository.ao.xbmc-plugins.zip' ), 
		'BancaDeJornais' => array( 'name' => 'Banca de Jornais Portugese Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://plugin-image-bancadejornais.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://plugin-image-bancadejornais.googlecode.com/files/repository.BancadeJornais.xbmc.zip' ), 
		'bigsale' => array( 'name' => 'bigSale Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://bigsale-repository.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bigsale-repository.googlecode.com/files/repository.bigsale.zip' ), 
		'bluecop' => array( 'name' => 'Bluecop\'s Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://bluecop-xbmc-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bluecop-xbmc-repo.googlecode.com/files/repository.bluecop.xbmc-plugins.zip' ), 
		'bogs' => array( 'name' => 'Bog\'s Addons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://bogs-xbmc-addons.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bogs-xbmc-addons.googlecode.com/files/repository.googlecode.bogs-xbmc-addons.zip' ), 
		'CanalPanda' => array( 'name' => 'CanalPanda.PT Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://plugin-video-canalpanda-xbmc.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://plugin-video-canalpanda-xbmc.googlecode.com/files/repository.canalpanda.xbmc.zip' ), 
		'ceth606' => array( 'name' => 'Ceth606\'s Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/Ceth606/xbmc-repo-ceth606/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'chinese-tube' => array( 'name' => 'Addons for Chinese TV on Youtube', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-chinese-tube.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-chinese-tube.googlecode.com/files/repository.xbmc-chinese-tube.zip' ), 
		'dandar3' => array( 'name' => 'Dandar3 Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://dandar3-xbmc-addons.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://dandar3-xbmc-addons.googlecode.com/files/repository.googlecode.dandar3-xbmc-addons.zip' ), 
		'divingmule' => array( 'name' => 'Divingmule Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://divingmules-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://divingmules-repo.googlecode.com/files/repository.divingmule.addons.zip' ), 
//backup repo		'dk-XBMC-repository' => array( 'name' => 'dk-xbmc-repaddon Add-on Repository', 'dataUrl' => 'http://162.248.143.235/xbmc/', 'xmlUrl' => 'http://162.248.143.235/xbmc/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://162.248.143.235/xbmc/repository.dk-xbmc-repaddon.zip' ), 
		'dk-XBMC' => array( 'name' => 'dk-xbmc Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://dk-xbmc-repaddon-rep.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://162.248.143.235/xbmc/repository.dk-xbmc-repaddon.zip' ), 
		'DMD-Czech' => array( 'name' => 'DMD-XBMC Czech Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://dmd-xbmc.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://dmd-xbmc.googlecode.com/files/repository.dmd-xbmcv2.googlecode.com.zip' ), 
		'iamfreetofly' => array( 'name' => 'iamfreetofly-xbmc-repaddon Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://iamfreetofly-xbmc-repaddon.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://iamfreetofly-xbmc-repaddon.googlecode.com/files/repository.iamfreetofly-xbmc-repaddon.zip' ), 
		'iZE' => array( 'name' => 'IZE Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://izexbmcaddons.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://izexbmcaddons.googlecode.com/files/repository.googlecode.izexbmcaddons.zip' ), 
		'kgontv' => array( 'name' => 'KGOnTV XBMC Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-kg-ontv.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-kg-ontv.googlecode.com/svn/trunk/repository.kgontv/addon.xml' ), 
		'LIN' => array( 'name' => 'LIN XBMC Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://linspb.us/xbmc/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://linspb.us/xbmc/repository.lin.zip' ), 
		'macedoniaondemand' => array( 'name' => 'Macedonia On Demand Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://macedoniaondemand.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://macedoniaondemand.googlecode.com/files/repository.macedoniaondemand.xbmc-plugins.zip' ), 
		'maruchan' => array( 'name' => 'Maruchan\'s Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-addon-repository.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-addon-repository.googlecode.com/files/repository.unofficial.addons.zip' ), 
		'membrane' => array( 'name' => 'membrane\'s repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://membrane-xbmc-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://membrane-xbmc-repo.googlecode.com/files/repository.membrane.xbmc-plugins.zip' ), 
		'mrknowpl' => array( 'name' => 'Mrknow.pl XBMC Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-films-pl.googlecode.com/svn/trunk/src/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-films-pl.googlecode.com/files/repository.mrknow.pl.zip' ), 
		'nibor' => array( 'name' => 'Nibor\'s Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://nibor-xbmc-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://nibor-xbmc-repo.googlecode.com/svn/trunk/repository.nibor.zip' ), 
		'nixa' => array( 'name' => 'Nixa\'s Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://sparetime.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://sparetime.googlecode.com/files/repository.googlecode.sparetime.zip' ), 
		'nuka1195' => array( 'name' => 'Nuka1195\'s Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-addons.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'ratotv' => array( 'name' => 'RatoTV repositorio', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://ratotv-xmbc-video-addon.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://ratotv-xmbc-video-addon.googlecode.com/svn/trunk/downloads/repositorio.zip' ), 
		'RTPplay' => array( 'name' => 'RTP Play Portugese Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://plugin-video-rtpplay-xbmc.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://plugin-video-rtpplay-xbmc.googlecode.com/files/repository.RTPplay.xbmc.zip' ), 
		'SastaTv' => array( 'name' => 'Sastatv Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://sastatv.com/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'seppius' => array( 'name' => 'Seppius RU Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://seppius-xbmc-repo.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://seppius-xbmc-repo.googlecode.com/svn/trunk/addons/repository.seppius.zip' ), 
		'sickbeard' => array( 'name' => 'Sickbeard integration into XBMC', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://sickbeard-xbmc.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://sickbeard-xbmc.googlecode.com/files/repository.sickbeard.xbmc-plugins.zip' ), 
		'silhouette' => array( 'name' => 'Silhouette XBMC Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://silhouette-xbmc-repo.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://silhouette-xbmc-repo.googlecode.com/svn/trunk/addons/repository.silhouette.zip' ), 
		'smuto' => array( 'name' => 'smuto Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://smuto.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://smuto.googlecode.com/files/repository.smuto-1.2.1.zip' ), 
		'stacked' => array( 'name' => 'stacked Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://plugin.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://plugin.googlecode.com/files/repository.stacked.xbmc.addons.zip' ), 
		'Taxigps' => array( 'name' => 'Chinese Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-addons-chinese.googlecode.com/svn/addons/eden_src/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-addons-chinese.googlecode.com/files/repository.googlecode.xbmc-addons-chinese-eden.zip' ), 
		'teefer' => array( 'name' => 'teefer Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://teefer-xbmc-repo.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://teefer-xbmc-repo.googlecode.com/files/repository.teefer.xbmc-plugins.zip' ), 
		'THN' => array( 'name' => 'THN\'s Addons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://repothn.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://repothn.googlecode.com/files/repository.googlecode.repothn.zip' ), 
		'todits' => array( 'name' => 'todits.xbmc Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://todits-xbmc.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://todits-xbmc.googlecode.com/files/repository.todits.xbmc.addons.zip' ), 
		'tolin' => array( 'name' => 'TOLIN XBMC Add-on\'s', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://tolin-xbmc-repo.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://tolin-xbmc-repo.googlecode.com/svn/trunk/addons/repository.tolin.zip' ), 
		't0mus' => array( 'name' => 't0mus-xbmc-addons repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://t0mus-xbmc-addons.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://t0mus-xbmc-addons.googlecode.com/svn/trunk/repository.t0mus-1.0.0.zip' ), 
		'TVChinese' => array( 'name' => 'TVChinese Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xbmc-addon-tv-tianxianbaby.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-addon-tv-tianxianbaby.googlecode.com/files/repository.googlecode.xbmc-addon-txbb.zip' ), 
		'twitxbmc' => array( 'name' => 'XBMC Eraser\'s Addons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://twitxbmc.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://twitxbmc.googlecode.com/svn/addons/repository.eraser.zip' ), 
		'voinage' => array( 'name' => 'Voinage Add-ons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'https://voinage-xbmc-plugins.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://voinage-xbmc-plugins.googlecode.com/files/repository.voinage.zip' ), 
		'xb-israel' => array( 'name' => 'xb-israel, israeli VOD', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://xb-israel.googlecode.com/svn/trunk/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xb-israel.googlecode.com/files/repository.xb-israel.shmulik.zip' ), 
		'ztas' => array( 'name' => 'Zatz addons', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://ztas-xbmc-addons.googlecode.com/svn/trunk/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://ztas-xbmc-addons.googlecode.com/files/repository.ztas.zip' ),

//problematic repo's
		'bstrdsmkr' => array( 'name' => 'bstrdsmkr\'s Repo', 'dataUrl' => 'http://repo.gosub.dk/bstrdsmkr/repo/', 'xmlUrl' => 'http://repo.gosub.dk/bstrdsmkr/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://repo.gosub.dk/bstrdsmkr/repo/repository.bstrdsmkr/repository.bstrdsmkr-0.0.3.zip' ),
		'homeless' => array( 'name' => 'Homeless Repo', 'dataUrl' => 'https://raw.githubusercontent.com/totalxbmc/homeless/master/', 'xmlUrl' => 'https://raw.githubusercontent.com/totalxbmc/homeless/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/totalxbmc/homeless/blob/master/repository.homeless.addons/repository.homeless.addons-1.0.0.zip?raw=true' ), 
		'Bas Rieter' => array( 'name' => 'XBMC Online TV (formerly XOT-Uzg.v3) Add-ons', 'dataUrl' => 'http://www.rieter.net/net.rieter.xot.repository/', 'xmlUrl' => 'http://www.rieter.net/net.rieter.xot.repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://www.rieter.net/ext/?uri=http://xot.hamans.com/net.rieter.xot.repository-1.0.4.zip' ), 
//bitbucket repositories
		'mash2k3' => array( 'name' => 'mash2k3 Add-ons', 'dataUrl' => 'http://bitbucket.org/mash2k3/mash2k3-repository/raw/master/zips/', 'xmlUrl' => 'http://bitbucket.org/mash2k3/mash2k3-repository/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bitbucket.org/mash2k3/mash2k3-repository/src/fdb0591116541a1b8c50617d3cb20d7c20ffac3c/zips/repository.mash2k3/repository.mash2k3-1.6.zip?at=master' ), 
		'shani' => array( 'name' => 'shani Add-ons', 'dataUrl' => 'http://bitbucket.org/shani-08/shanixbmcwork/raw/master/zips/', 'xmlUrl' => 'https://bitbucket.org/shani-08/shanixbmcwork/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/Shani-08/ShaniXBMCWork/raw/master/zips/repository.shani/repository.shani-2.3.zip' ), 
		'jas0npc' => array( 'name' => 'Jas0nPC\'s Repo', 'dataUrl' => 'https://bitbucket.org/jas0npc_13/jas0npc-repo/raw/master/zips/', 'xmlUrl' => 'https://bitbucket.org/jas0npc_13/jas0npc-repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://bitbucket.org/jas0npc_13/jas0npc-repo/src/c2f0c44fa60c7d2162ab9cd0c48bd58108ae9336/zips/repository.Jas0npc/repository.Jas0npc-1.5.zip?at=master' ), 
//end of bitbucket
		'YoshioftheWire' => array( 'name' => 'urlXL XBMC Addon Repo', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://urlxl-repo.googlecode.com/git/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://drive.google.com/file/d/0B3jP6FXjlDKTRFdmejJsSU9fSUE/edit' ), 
		'urlxl' => array( 'name' => 'urlXL Add-on Repository', 'dataUrl' => 'https://github.com/totalinstall/manual-updates/raw/master/', 'xmlUrl' => 'http://urlxl-repo.googlecode.com/git/gotham/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://drive.google.com/file/d/0B3jP6FXjlDKTcWwzUl9kMU02VUE/edit' ), 
		'TheYidXXX' => array( 'name' => 'TheYid XXX Repo', 'dataUrl' => 'https://raw.githubusercontent.com/TheYid/My-Repo/master/zips/', 'xmlUrl' => 'https://bitbucket.org/tcz009/theyidxxx/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/TheYid/My-Repo/blob/master/zips/repository.TheYidXXX/repository.TheYidXXX-1.4.zip?raw=true' ), 
		'sapo' => array( 'name' => 'SAPO\'s Repo', 'dataUrl' => 'https://raw.github.com/sapo/xbmc-repo/master/release/', 'xmlUrl' => 'https://raw.githubusercontent.com/sapo/xbmc-repo/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/sapo/xbmc-repo/blob/master/repository.sapo-1.0.1.zip?raw=true' ), 
		'gbzygil' => array( 'name' => 'gbzygil XBMC Addon Repository', 'dataUrl' => 'https://github.com/gbzygil/gbzygil-xbmc-repo/raw/master/', 'xmlUrl' => 'https://github.com/gbzygil/gbzygil-xbmc-repo/raw/master/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://github.com/gbzygil/gbzygil-xbmc-repo/blob/master/repository.gbzygil-IndianMovies.zip?raw=true' ), 
		'xtream' => array( 'name' => 'Xtream Media add-on repository', 'dataUrl' => 'http://xtream-media.googlecode.com/svn/addons/', 'xmlUrl' => 'http://xtream-media.googlecode.com/svn/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xtream-media.googlecode.com/files/repository.googlecode.xtream-media.zip' ), 
		'xbxl' => array( 'name' => 'The Xbxl Add-on Repository', 'dataUrl' => 'https://xbmc-dpstream.googlecode.com/git/repository/', 'xmlUrl' => 'https://xbmc-dpstream.googlecode.com/git/repository/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://xbmc-dpstream.googlecode.com/files/repository.xbxl.zip' ), 
//no addon.xml	'twinther' => array( 'name' => 'twinther Add-ons', 'dataUrl' => 'http://tommy.winther.nu/xbmc/', 'xmlUrl' => 'http://tommy.winther.nu/xbmc/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
/*site offline*/		'sporting streams' => array( 'name' => 'SportingStreams Add-on Repository', 'dataUrl' => 'http://sportingstreams.net/repo/', 'xmlUrl' => 'http://sportingstreams.net/repo/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'http://sportingstreams.net/repo/plugin.video.sportingstreams.zip' ), 
//Vanished		'StreamOn' => array( 'name' => 'StreamOn Repository', 'dataUrl' => 'https://dl.dropbox.com/u/57491593/repo1/', 'xmlUrl' => 'https://dl.dropbox.com/u/57491593/repo1/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
//password protected		'enen92' => array( 'name' => 'MovK Add-on Repository', 'dataUrl' => 'http://movk-xbmc-addon.googlecode.com/svn/', 'xmlUrl' => 'http://movk-xbmc-addon.googlecode.com/svn/addons.xml', 'statsUrl' => '', 'downloadUrl' => '' ), 
		'dudehere' => array( 'name' => 'dudehere Repo', 'dataUrl' => 'https://dudehere-repository.googlecode.com/git/addons/', 'xmlUrl' => 'https://dudehere-repository.googlecode.com/git/addons/addons.xml', 'statsUrl' => '', 'downloadUrl' => 'https://dudehere-repository.googlecode.com/files/repository.dudehere.plugins-1.0.2.zip' )

	),
	// template and rendering related settings
	'templatePath' => 'templates',
	'images' => array(
		'dummy' => 'images/addon-dummy.png',
		'sizes' => array(
			'addonThumbnail' => array(120,120),
			'addonThumbnailSmall' => array(60,60),
			'large' => array(256,256)
		)
	),
/*	'analytics' => "<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-3066672-6', 'xbmc.org');
	ga('send', 'pageview');
</script>",
	'addonExcludeClause' => ' AND NOT deleted AND id NOT LIKE "%.common.%" AND id NOT LIKE "script.module%" ',*/
	'categories' => array(
		'categories2' => array(
			'label' => 'XBMC Categories',
			'subCategories' => array(
				'audio' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'contentType' => 'audio',
					'label' => 'Audio'
				),
				'video' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'contentType' => 'video',
					'label' => 'Video'
				),
				'pictures' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'contentType' => 'image',
					'label' => 'Pictures'
				),
				'screensaver' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'contentType' => 'screensaver',
					'label' => 'Screensaver'
				),
				'skins' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.gui.skin',
					'label' => 'Skins'
				),
				'weather' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.python.weather',
					'label' => 'Weather'
				),
				'programs' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'contentType' => 'executable',
					'label' => 'Programs'
				),
				'lyrics' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.python.lyrics',
					'label' => 'Lyrics'
				),
				'webinterface' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.gui.webinterface',
					'label' => 'Webinterface'
				),
				'metadata' => array(
					'extensionPoint' => 'xbmc.metadata',
					'label' => 'Metadata',
					'subCategories' => array(
						'artists' => array(
							'not_adult' => 'yes',
							'depreciated' => '',
							'extensionPoint' => 'xbmc.metadata.scraper.artists',
							'label' => 'Artists'
						),
						'albums' => array(
							'not_adult' => 'yes',
							'depreciated' => '',
							'extensionPoint' => 'xbmc.metadata.scraper.albums',
							'label' => 'Albums'
						),
						'movies' => array(
							'not_adult' => 'yes',
							'depreciated' => '',
							'extensionPoint' => 'xbmc.metadata.scraper.movies',
							'label' => 'Movies'
						),
						'musicvideos' => array(
							'not_adult' => 'yes',
							'depreciated' => '',
							'extensionPoint' => 'xbmc.metadata.scraper.musicvideos',
							'label' => 'Musicvideos'
						),
						'tvshows' => array(
							'not_adult' => 'yes',
							'depreciated' => '',
							'extensionPoint' => 'xbmc.metadata.scraper.tvshows',
							'label' => 'TV-Shows'
						),
					)
				),
				'subtitles' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.python.subtitles',
					'label' => 'Subtitles'
				),
				'services' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.service',
					'label' => 'Services'
				),
				'scriptmodules' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'extensionPoint' => 'xbmc.python.module',
					'label' => 'Script Modules'
				),
			),
		),
		'genres' => array(
			'label' => 'Search By Genre',
			'subCategories' => array(
				'anime' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'anime',
					'label' => 'Anime'
				),
				'audiobooks' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'audiobooks',
					'label' => 'Audiobooks'
				),
				'comedy' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'comedy',
					'label' => 'Comedy'
				),
				'comics' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'comics',
					'label' => 'Comics'
				),
				'documentary' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'documentary',
					'label' => 'Documentary'
				),
				'downloads' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'downloads',
					'label' => 'Downloads'
				),
				'food' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'food',
					'label' => 'Food'
				),
				'gaming' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'gaming',
					'label' => 'Gaming'
				),
				'health' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'health',
					'label' => 'Health'
				),
				'howto' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'howto',
					'label' => 'How To...'
				),
				'kids' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'kids',
					'label' => 'Kids'
				),
				'livetv' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'livetv',
					'label' => 'Live TV'
				),
				'movies' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'movies',
					'label' => 'Movies'
				),
				'music' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'music',
					'label' => 'Music'
				),
				'news' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'news',
					'label' => 'News & Weather'
				),
				'photos' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'photos',
					'label' => 'Photos'
				),
				'podcasts' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'podcasts',
					'label' => 'Podcasts'
				),
				'radio' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'radio',
					'label' => 'Radio'
				),
				'religion' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'religion',
					'label' => 'Religion'
				),
				'space' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'space',
					'label' => 'Space'
				),
				'sports' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'sports',
					'label' => 'Sports'
				),
				'tech' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'tech',
					'label' => 'Technology'
				),
				'trailers' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'trailers',
					'label' => 'Trailers'
				),
				'tv' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'tv',
					'label' => 'TV Shows'
				),
				'adult' => array(
					'depreciated' => '',
					'genreType' => 'adult',
					'label' => 'XXX'
				),
				'other' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'other',
					'label' => 'Misc.'
				),
			),
		),
		'countries' => array(
			'label' => 'Search By Country',
			'subCategories' => array(
/*				'african' => array(
					'contentType' => 'video',
					'genreType' => 'african',
					'label' => 'African'
				),*/
				'arabic' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'arabic',
					'label' => 'Arabic'
				),
				'asian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'asian',
					'label' => 'Asian'
				),
				'australian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'australian',
					'label' => 'Australian'
				),
				'austrian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'austrian',
					'label' => 'Austrian'
				),
				'belgian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'belgian',
					'label' => 'Belgian'
				),
				'brazilian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'brazilian',
					'label' => 'Brazilian'
				),
				'canadian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'canadian',
					'label' => 'Canadian'
				),
				'chinese' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'chinese',
					'label' => 'Chinese'
				),
				'columbian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'columbian',
					'label' => 'Columbian'
				),
				'czech' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'czech',
					'label' => 'Czech'
				),
				'danish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'danish',
					'label' => 'Danish'
				),
				'dominican' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'dominican',
					'label' => 'Dominican'
				),
				'dutch' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'dutch',
					'label' => 'Dutch'
				),
				'egyptian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'egyptian',
					'label' => 'Egyptian'
				),
				'filipino' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'filipino',
					'label' => 'Filipino'
				),
				'finnish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'finnish',
					'label' => 'Finnish'
				),		
				'french' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'french',
					'label' => 'French'
				),
				'german' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'german',
					'label' => 'German'
				),
				'greek' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'greek',
					'label' => 'Greek'
				),
				'hebrew' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'hebrew',
					'label' => 'Hebrew'
				),
				'hungarian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'hungarian',
					'label' => 'Hungarian'
				),
				'icelandic' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'icelandic',
					'label' => 'Icelandic'
				),
				'indian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'indian',
					'label' => 'Indian'
				),
				'irish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'irish',
					'label' => 'Irish'
				),
				'italian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'italian',
					'label' => 'Italian'
				),
				'japanese' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'japanese',
					'label' => 'Japanese'
				),		
				'korean' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'korean',
					'label' => 'Korean'
				),
				'lebanese' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'lebanese',
					'label' => 'Lebanese'
				),
				'mongolian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'mongolian',
					'label' => 'Mongolian'
				),
				'moroccan' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'moroccan',
					'label' => 'Moroccan'
				),
				'nepali' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'nepali',
					'label' => 'Nepali'
				),
				'newzealand' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'newzealand',
					'label' => 'New Zealand'
				),
				'norwegian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'norwegian',
					'label' => 'Norwegian'
				),
				'pakistani' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'pakistani',
					'label' => 'Pakistani'
				),
				'polish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'polish',
					'label' => 'Polish'
				),
				'portuguese' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'portuguese',
					'label' => 'Portuguese'
				),
				'romanian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'romanian',
					'label' => 'Romanian'
				),
				'russian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'russian',
					'label' => 'Russian'
				),		
				'singapore' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'singapore',
					'label' => 'Singapore'
				),
				'spanish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'spanish',
					'label' => 'Spanish'
				),
				'swedish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'swedish',
					'label' => 'Swedish'
				),
				'swiss' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'swiss',
					'label' => 'Swiss'
				),
				'syrian' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'syrian',
					'label' => 'Syrian'
				),
				'tamil' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'tamil',
					'label' => 'Tamil'
				),
				'thai' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'thai',
					'label' => 'Thai'
				),
				'turkish' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'turkish',
					'label' => 'Turkish'
				),
				'uk' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'uk',
					'label' => 'UK'
				),
				'usa' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'usa',
					'label' => 'USA'
				),
				'vietnamese' => array(
					'not_adult' => 'yes',
					'depreciated' => '',
					'genreType' => 'vietnamese',
					'label' => 'Vietnamese'
				),
			),
		),
		'repositories' => array(
			'not_adult' => 'yes',
			'depreciated' => '',
			'extensionPoint' => 'xbmc.addon.repository',
			'contentType' => 'repository',
			'label' => 'Repositories'
		),
		'xbox' => array(
			'label' => 'Xbox Compatible',
			'subCategories' => array(
				'audio' => array(
					'depreciated' => '',
					'contentType' => 'audio',
					'xboxCompatible' => 'yes',
					'label' => 'Audio'
				),
				'video' => array(
					#'extensionPoint' => 'xbmc.python.pluginsource',
					'depreciated' => '',
					'contentType' => 'video',
					'xboxCompatible' => 'yes',
					'label' => 'Video'
				),
				'pictures' => array(
					#'extensionPoint' => 'xbmc.python.pluginsource',
					'depreciated' => '',
					'contentType' => 'image',
					'xboxCompatible' => 'yes',
					'label' => 'Pictures'
				),
				'programs' => array(
					#'extensionPoint' => 'xbmc.python.pluginsource',
					'depreciated' => '',
					'contentType' => 'executable',
					'xboxCompatible' => 'yes',
					'label' => 'Programs'
				),
				'skins' => array(
					'depreciated' => '',
					'xboxCompatible' => 'yes',
					'extensionPoint' => 'xbmc.gui.skin',
					'label' => 'Skins'
				),
			),
		),	
		'xboxtesting' => array(
			'label' => 'Need Testing',
			'subCategories' => array(
				'audio' => array(
					'xbox_untested' => '1',
					'depreciated' => '',
					'contentType' => 'audio',
					'label' => 'Audio'
				),
				'video' => array(
					'xbox_untested' => '1',
					'depreciated' => '',
					'contentType' => 'video',
					'label' => 'Video'
				),
				'pictures' => array(
					'xbox_untested' => '1',
					'depreciated' => '',
					'contentType' => 'image',
					'label' => 'Pictures'
				),
				'programs' => array(
					'xbox_untested' => '1',
					'depreciated' => '',
					'contentType' => 'executable',
					'label' => 'Programs'
				),
			),
		),
		'graveyard' => array(
			'depreciated' => '1',
			'label' => 'Addon Graveyard'
		),
		'broken' => array(
			'depreciated' => '',
			'broken_addons' => '',
			'label' => 'Broken Addons'
		),
	
	),	
	// cache settings
	'cache' => array(
		'pathWrite' => SITE_ROOT . 'cache' . DIRECTORY_SEPARATOR,
		'pathRead' => 'cache/'
	),
	'baseUrl' => NULL,
	'security' => array(
		'token' => ''
	)
);


// include the context depending configuration at the bottom
// which allows to override any default configuration if needed
if (CONTEXT == 'development') {
	require_once('developmentConfiguration.php');
} else {
	require_once('/etc/xbmc/php-include/addons/private/configuration.php');
}
?>