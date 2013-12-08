<?php
//
// PHASE: BOOTSTRAP
//
define('jasse_INSTALL_PATH', dirname(__FILE__));
define('jasse_SITE_PATH', jasse_INSTALL_PATH . '/site');

require(jasse_INSTALL_PATH.'/src/Cjasse/bootstrap.php');

$ja = Cjasse::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ja->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$ja->ThemeEngineRender();